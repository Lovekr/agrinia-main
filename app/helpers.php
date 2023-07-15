<?php
if (! function_exists('cartItems')) {
    // dd(session()->all());
    function cartItems() {
        if(auth()->user()) {
         $id = auth()->user()->id;   
         return \DB::table('carts')->leftJoin('products', 'products.id', '=', 'carts.product_id')->where('user_id', $id)->get();
        } else {
            $products = Session::get('user_temp_id');
            
            $productId = [];
            if(!empty($products)) {
                foreach($products as $k =>  $product) {
                    $productId[$k] = $product['product_id'];
                }
                return  \DB::table('products')->whereIn('id', $productId)->get();
            }
        }
        return null;
    }
}
?>