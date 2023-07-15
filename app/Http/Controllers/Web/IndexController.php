<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Http;


class IndexController extends Controller
{
    /**
     * Show the index page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $product = session()->get('product');
        return view('main.index');
    }

    public function privacyPolicy() {
        return view('main.privacy-policy');
    }

    public function termAndCondition() {
        return view('main.term-and-condition');
    }
    
    public function retrunPolicy() {
        return view('main.return-policy');
    }

    public function shippingDelivery() {
        return view('main.shipping-delivery');
    }

    public function contactForm() {
        return view('contact.contact');
    }

    public function aboutUs() {
        return view('about.about_us');
    }

    public function agriculatural() {
        session()->put('product', 'agricultural');
        // $instagramFeed = [];
        $instagramFeed = $this->getInstagramFeed();
        $products = Products::orderBy('created_at', 'desc')->where('product_type', '0')->limit(4)->get();
        return view('main.agricultural')->with(['products' => $products, 'instagram'=> $instagramFeed]);
    }

    public function gardening() {
        session()->put('product', 'gardening');
        // $instagramFeed = [];
        $instagramFeed = $this->getInstagramFeed();
        $products = Products::orderBy('created_at', 'desc')->where('product_type', '1')->limit(4)->get();
        return view('main.gardening')->with(['products' => $products, 'instagram'=> $instagramFeed]);
    }

    public function getInstagramFeed() {
        $instagramPost = [];
        try {
            $apiUrl = env('INSTAGRAM_API_URL').''.env('INSTAGRAM_USER_ID').'/media?fields=id,media_type,media_url,permalink,thumbnail_url&access_token='.env('INSTAGRAM_ACCESS_TOKEN');
            $response = Http::withoutVerifying()->get($apiUrl)->getBody();
            $mediaArray = json_decode($response, true);
            if(isset($mediaArray['data']) && !empty($mediaArray['data'])) {
                foreach($mediaArray['data'] as $k => $media) {
                    if($media['media_type'] == 'IMAGE') {
                        $instagramPost[$k]['media_url'] = $media['media_url'];
                        $instagramPost[$k]['permalink'] = $media['permalink'];
                    }

                    if(count($instagramPost) == 6) {
                        break;
                    }
                }
            }
        } catch (\Excepetion $e) {
            $instagramPost = [];
        }
        return $instagramPost;
    }

    public function services() {
        return view('services.service');
    }
}