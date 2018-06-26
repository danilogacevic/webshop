<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use App\Product;

class CartController extends Controller
{



    public function index()
    {
        //    display products and qantity on checkout page

        // variables needed for paying, for example with paypal.

        $total         = 0;
        $item_quantity = 0;
        $item_name     = 1;
        $item_number   = 1;
        $amount        = 1;
        $quantity      = 1;

        $items = Session::get('cart')['items'];

        $products = Product::findMany($items);

        return view('checkout',compact('products','item_quantity','item_name','item_number','amount','quantity','total'));



    }



    public function addProduct($id){

        //    Adding products to shoping cart


            //     Checking if cart is empty

        if(!empty(Session::get('cart')['items'])){

            $products = Session::get('products')['id'];

            //          Checking if item is in the list

            if(! in_array($id,Session::get('cart')['items'])) {

                Session::push('cart.items', $id);

            }

            //            Checking if product is added to shopping cart

            if(Session::has('product_'.$id)) {

                $amount = 1;

                //                if it's already there, increase amount by one

                Cache::increment('amount'.$id,$amount);

                session(['product_'.$id => Cache::get('amount'.$id)]);

                return redirect()->route('checkout');

            }  else {

                //                if product isn't in the list, add it and set amount to one. Set time cache time to 10 mins

                Cache::put('amount'.$id,1,10);

                session(['product_'.$id => Cache::get('amount'.$id)]);

                return redirect()->route('checkout');

            }




    } else {

//            if cart is empty, add product to it

            Session::push('cart.items', $id);


            Cache::put('amount'.$id,1,10);

            session(['product_'.$id => Cache::get('amount'.$id)]);

            return redirect()->route('checkout');



        }
    }

    public function decreaseQuantity($id){

//        if cache time is expired, empty shoping cart

        if(! cache()->has('amount'.$id)) {

           return $this->emptyCart();
        }

        if(session('product_'.$id)>1){

            $amount = 1;

            session(['product_'.$id => Cache::decrement('amount'.$id,$amount)]);

            return redirect()->route('checkout');

        } else {

            session()->forget('product_'.$id);
            Cache::forget('amount' . $id);

            return redirect()->route('checkout');
        }


    }

    public function increaseQuantity($id){

        //        if cache time is expired, empty shoping cart


        if(! cache()->has('amount'.$id)) {

           return $this->emptyCart();
        }

        $product = Product::findOrFail($id);

        if(session('product_'.$id) < $product->product_quantity){

            $amount = 1;

            session(['product_'.$id => Cache::increment('amount'.$id,$amount)]);

            return redirect()->route('checkout');



        } else {

            session()->flash('message','We have only '. $product->product_quantity . 'left');

            return redirect()->route('checkout');
        }


    }



    public function removeProduct($id){

        //    Removing product from list

        session()->forget('product_'.$id);
        Cache::forget('amount' . $id);

        return redirect()->route('checkout');
    }



    public function emptyCart(){

        //    empty shoping cart

//        deleting all sessions related to shoping cart and all cache

        foreach (session()->get('cart.items') as $productId) {

            session()->forget('product_'. $productId);
        }
        session()->forget('cart.items');
        cache()->flush();
        return redirect()->route('ecom');
    }
}
