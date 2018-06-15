<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{



    public function shop()
    {
        $products = Product::all();
        return view('pages.shop', compact('products'));
    }



}
