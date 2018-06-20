<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cookie;
use Illuminate\Http\Response;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    private $minutes = 120;

    public function addToCart(Request $request)
    {
         $product = (object)$request->product;
//        echo $product->id;

        $cookie = cookie('shopping-cart', json_encode($product), $this->minutes);
//        Cart::add($product->id, $product->name, 1, $product->price);
//            ->associate('App\Product');
//        return Cart::content();
        return response()->json(['product' => $product], 200)->cookie($cookie);
    }
}
