<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

//    display products and qantity on checkout page

    public function index()
    {
        //

        $total         = 0;
        $item_quantity = 0;
        $item_name     = 1;
        $item_number   = 1;
        $amount        = 1;
        $quantity      = 1;


        $items = Session::get('cart')['items'];

        $products = Product::findMany($items);

        return view('checkout',compact('products','item_quantity','item_name','item_number','amount','quantity','total'));

        // Session::flush();
        // Cache::flush();

    }

//    Add products to shoping cart

    public function addProduct($id){


//    Checking if cart is empty

        if(!empty(Session::get('cart')['items'])){

            $products = Session::get('products')['id'];

//          Checking if item is in the list

            if(! in_array($id,Session::get('cart')['items'])) {

                Session::push('cart.items', $id);

            }

//            Checging if product is added to shopping cart

            if(Session::has('product_'.$id)) {

                $amount = 1;

//                if it's already there, increase amount by one

                Cache::increment('amount'.$id,$amount);

                Session::set('product_'.$id,Cache::get('amount'.$id));

                return redirect('/products/');

            }  else {

//                if product isn't in the list, add it and set amount to one

                Cache::put('amount'.$id,1,10);

                Session::set('product_'.$id,Cache::get('amount'.$id));

                return redirect('/products/');
            }




    } else {

//            if cart is empty, add product to it

            Session::push('cart.items', $id);

        }
    }

    public function decreaseQuantity($id){

        if(session('product_'.$id)>1){

            $amount = 1;

            session(['product_'.$id => Cache::decrement('amount'.$id,$amount)]);

            return redirect('/products');

        } else {

            session()->forget('product_'.$id);
            Cache::forget('amount' . $id);

            return redirect('/products');
        }


    }

    public function increaseQuantity($id){

        $product = Product::findOrFail($id);

        if(session('product_'.$id) < $product->product_quantity){

            $amount = 1;

            session(['product_'.$id => Cache::increment('amount'.$id,$amount)]);

            return redirect('/products');



        } else {

            session()->flash('message','We have only '. $product->product_quantity . 'left');

            return redirect('/products');
        }


    }

    public function removeProduct($id){

        session()->forget('product_'.$id);
        Cache::forget('amount' . $id);

        return redirect('/products');
    }
}
