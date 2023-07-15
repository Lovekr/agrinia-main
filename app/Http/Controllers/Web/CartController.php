<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Session;
use Cookie;
use App\Models\Products;

class CartController extends Controller
{
    /**
     * Show the index page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function addToCart(Request $request)
    {
        $tempId = rand(10,100);
        $cartObject = [
            'user_id' => auth()->user()->id ?? null,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity == 0 ? $request->weight_quantity : $request->quantity,
            'quantity_type' => $request->quantity_type,
            'weight_quantity' => $request->weight_quantity,
        ];
        
        if(auth()->user()) {
            $addToCart = Cart::create($cartObject);
        } else {
            $cartItem[] = [
                'product_id' => $request->product_id,
                'quantity' => $request->quantity == 0 ? $request->weight_quantity : $request->quantity,
                'quantity_type' => $request->quantity_type,
                'weight_quantity' => $request->weight_quantity,
            ];
           
            $id = Session::get('user_temp_id');
            if(!empty($id)) {
                $cartItem = array_merge($id, $cartItem);
            }
            Session::put('user_temp_id',$cartItem);
        }
        return redirect('cart');
    }

    public function getCartItems() {
        $id = Session::get('user_temp_id');
        if(auth()->user()) {
            $userId = auth()->user()->id;
            $cartItems = Cart::with('products')->where('user_id', $userId)->get();
        } else {
            $products = Session::get('user_temp_id');
            $productId = [];
            if(!empty($products)) {
                foreach($products as $k =>  $product) {
                    $productId[$k] = $product['product_id'];
                }
            }
           
            $cartItems = Products::whereIn('id', $productId)->get();
        }
        return view('cart.cart')->with('cart_items', $cartItems);
    }

    public function removeFromCart($id) {
        if(auth()->user()) {
            $addToCart = Cart::find($id)->delete();
        } else {
            $cartItems = session()->get('user_temp_id');
            unset($cartItems[$id]);
            $cartItems = array_values($cartItems);
            Session::put('user_temp_id',$cartItems);
        }
        
        return redirect('cart');
    }
 }
