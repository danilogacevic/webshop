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

    public function ecom($slug = null)
    {

//        $products = Product::with('photos')->get();
//        $products = Product::all();

//        foreach ($products as $product) {
//
//            dd($product->photos()->first()->file);
//        }

        if($slug) {

//            loading products by category through eager loading

            $catId = Category::where('slug',$slug)->first()->id;

              $categories = Category::with(['products' => function($query) use ($catId) {
                $query->where('category_id',$catId);
            }])->get();

            return view('posts_categories', compact( 'categories'));

        } else {

//            loading products with first photo through eager loading

            $products = Product::with(['photos' => function ($query) {
                $query->first();
            }])->get();


            $categories = Category::all();


            return view('ecom', compact('products', 'categories'));

        }


    }

    public function item($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('item',compact('product'));
    }

}
