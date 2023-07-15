<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Show the index page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $orderBY = $request->get('orderBy');
        $searchBy  = $request->get('s');
        
        switch ($orderBY) {
            case "new":
              $key = 'created_at';
              $order = 'desc';
              break;
            case "popular":
                $key = 'ratings';
                $order = 'desc';
              break;
            case "rating":
                $key = 'ratings';
                $order = 'asc';
              break;
            case "price":
                $key = 'offer_price';
                $order = 'asc';
              break;
            case "price-desc":
                $key = 'offer_price';
                $order = 'desc';
              break;
            default:
                $key = 'created_at';
                $order = 'desc';
          }

        $products = DB::table('products');
        if(!empty($searchBy)) {
          $products =  $products->where('name','LIKE','%'.$searchBy.'%');
        }
        $productType = session()->get('product');
        if($productType == 'agricultural') {
          $type = 0;
        } else {
          $type = 1;
        }
        
        $products->where('status', 1);
        $products->where('product_type', $type);
        $products->orderBy($key, $order);
        $products = $products->paginate(8);
        $products = $products->appends($request->except(['page']));

        return view('product.product')->with(['products'=> $products]);
    }

    public function productDetails($id)
    {
        $productDeatails = DB::table('products')->where('id', $id)->first();
        return view('product.product_details')->with('product_details',$productDeatails);
    }
}