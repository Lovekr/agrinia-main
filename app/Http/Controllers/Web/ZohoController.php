<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Contacts;

class ZohoController extends Controller
{
    public function auth(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'

        ]);

        
        $contact = Contacts::create($request->all());
        \Session()->put('zoho_contact_id', $contact->id);

        $uri = 'http://localhost/agrinia/public/zohocrm';
        $scope =  'ZohoCRM.modules.ALL';
        $clientid = '1000.TW49UNK25517QSFRL8GXDFXG1AH9PA';
        $accestype = 'offline';

        $redirectTo = 'https://accounts.zoho.in/oauth/v2/auth' . '?' . http_build_query(
        [
        'client_id' => $clientid,
        'redirect_uri' => $uri,
        'scope' => 'ZohoCRM.modules.ALL',
        'response_type' => 'code',
        ]);
       
        return redirect('zohocrm');
    }

    public function store(Request $request)
    {
        $contact_id = \Session::get('zoho_contact_id');
        $client_id = env('ZOHO_CLIENT_ID');
        $client_secret = env('ZOHO_CLIENT_SECRET');
        \Session::forget('zoho_contact_id');
        // Get ZohoCRM Token
        // $tokenUrl = 'https://accounts.zoho.in/oauth/v2/token?code='.$code.'&client_id='.$client_id.'&client_secret='.$client_secret.'&redirect_uri='.env('ZOHO_REDIRECT_URI').'&grant_type=authorization_code';
        // $accessToken = $this->generateRefreshToken();
        $accessToken = $this->generate_refresh_token($client_id, $client_secret, 'refresh_token', env('refresh_token'));
        
        $contact = Contacts::where('id', $contact_id )->first();
        // Add Contact in ZohoCRM
        
        $data['data'] = [
            [
                "First_Name" => $contact->name,
                "Last_Name" => $contact->name,
                "Email" => $contact->email,
                "Company" => "",
                "State" => ""
            ]
            ];

        $data['trigger'] = [
            "approval",
            "workflow",
            "blueprint"
        ];
        
        $dataObject = json_encode($data);    
        \Log::info($dataObject);
        $curl = curl_init('https://www.zohoapis.in/crm/v2/Leads');
        curl_setopt($curl, CURLOPT_VERBOSE, 0);     
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);     
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);     
        curl_setopt($curl, CURLOPT_TIMEOUT, 300);   
        curl_setopt($curl, CURLOPT_POST, TRUE);//Regular post  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);     
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Authorization: Zoho-oauthtoken ".$accessToken,
            "X-com-zoho-invoice-organizationid: 60017058087"
        ));
        curl_setopt($curl, CURLOPT_POSTFIELDS,$dataObject);
        //Execute cUrl session
        $cResponse = curl_exec($curl);
        curl_close($curl);
        
        $contactResponse = json_decode($cResponse);
       
        // echo "<pre>";
        // print_r($jsonData);
        // dd($contactResponse);
        if(isset($contactResponse->data[0]) && $contactResponse->data[0]->code == 'SUCCESS') {
            \Session::put('success','Contact created in ZohoCRM successfully.!');
            return redirect()->route('contact')->with('message', 'Added successfully');
        } else {
            \Session::put('error','Contact created in ZohoCRM successfully.!');
            return redirect()->route('contact')->withErrors(['error' => 'Somethong went wrong']);
            // return redirect()->route('contacts');
        }
    }

    public function generate_refresh_token( $client_id, $client_secret, $grant_type, $refresh_token ) {
    
        $url = "https://accounts.zoho.in/oauth/v2/token";
        $param = "refresh_token=".$refresh_token."&client_id=".$client_id."&client_secret=".$client_secret."&grant_type=".$grant_type;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);   
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
         
        if ($err) {
          echo $err;
        } else {
          $token_path = "token.json";
          $response_data=json_decode($result,true);
          $tokens = array(
            'access_token' => $response_data['access_token'],
            "created_at" => date('Y-m-d H:i:s')
          );
          
          if ( !file_exists( dirname( $token_path ) ) ) {
              mkdir( dirname( $token_path ), 0777, true );
            }
          file_put_contents( $token_path, json_encode( $tokens ) );
          return $response_data['access_token'];      
        }  
      } 
}

?>