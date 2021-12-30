<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    { 
            $product = Product::findOrFail($request->input('product_id'));
            Cart::add(
                $product->id,
                $product->title,
                $product->price,
                $request->input('quantity')
            );
        return redirect()->back();
    
        
        
    }
    public function cartlist()
    {
        $cartItems = Cart::content();
        return view('frontend.layouts.cart.list', compact('cartItems'));
    }
    public function cartCreate(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        $product = Product::getProductByCart($product_id);
        $price = $product[0] ['offer_price'];
        $cart_array = [];
        foreach(Cart::instance('shopping')->content() as $item){
            $cart_array[]= $item->id;
        }
        $result = Cart::instance('shopping')->add($product_id,$product[0]['title'],$product_qty,$price)->associate('App\Models\Product');
        if ($result) {
            $response['status']= true;
            $response['product_id']= $product_id;
            $response['total']= Cart::subtotal();
            $response['cart_count']= Cart::instance('shopping')->count();
            $response['message']= "Item Was added to your Cart";
        }
        return json_encode($response);
    }

}
