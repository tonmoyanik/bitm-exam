<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    private $products;
    private $product;

    public function index()
    {
        $this->products = Product::all();
        return view('front.home',['products' => $this->products]);
    }



    public function detail($id)
    {

        $this->product = Product::find($id);
        return view('front.detail',['product' => $this->product]);
    }
}
