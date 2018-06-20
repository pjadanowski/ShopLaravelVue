<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class PagesController extends Controller
{



    public function shop()
    {
        $products = Product::all();
        return view('pages.shop', compact('products'));
    }


    public function cart()
    {

        return view('pages.cart', compact(''));
    }

    public function add_to_cart(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');
        return back();
    }


}
