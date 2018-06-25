<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ecom()
    {

//        $products = Product::with('photos')->get();
//        $products = Product::all();

//        foreach ($products as $product) {
//
//            dd($product->photos()->first()->file);
//        }

        $products = Product::with(['photos' => function ($query) {
            $query->first();
        }])->get();

//        foreach ($products as $product) {
//            dd($product->photos[0]->file);
//        }

        $categories = Category::all();


        return view('ecom', compact('products', 'categories'));
    }

    public function item($id)
    {
        $product = Product::findOrFail($id);
        return view('item',compact('product'));
    }

}
