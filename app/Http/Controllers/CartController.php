<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        //    Adding products to shopping cart


            //     Checking if cart is empty

        if(!empty(session()->get('cart.items'))){

						//          Checking if item is in the list

						if(! in_array($id,session()->get('cart.items'))) {

							session()->push('cart.items', $id);

							session()->put('product_'.$id, 1);

							return redirect()->route('checkout');



						} else {

							$currentAmount = session()->get('product_'.$id);

							session()->put('product_'.$id, ++$currentAmount);

							return redirect()->route('checkout');


						}



    	} else {

//            if cart is empty, add product to it

            session()->push('cart.items', $id);

			session()->put('product_'.$id, 1);

			return redirect()->route('checkout');



        }
    }

    public function decreaseQuantity($id){


        if(session('product_'.$id) > 1){

            $amount = session()->get('product_' . $id);

            session()->put('product_'.$id, --$amount);

            return redirect()->route('checkout');

        } else {

            session()->forget('product_'.$id);

            return redirect()->route('checkout');
        }


    }

    public function increaseQuantity($id){


        $product = Product::findOrFail($id);

        if(session('product_'.$id) < $product->product_quantity){

			$amount = session()->get('product_' . $id);

			session()->put('product_' . $id, ++$amount);

            return redirect()->route('checkout');

        } else {

            session()->flash('message','We have only '. $product->product_quantity . 'left');

            return redirect()->route('checkout');
        }


    }



    public function removeProduct($id){

        //    Removing product from list

        session()->forget('product_'.$id);

        $cartProducts = session()->get('cart.items');

        array_filter($cartProducts, function($product) use ($id) {

        	return $product !== $id;

		});

        session()->put('cart.items',$cartProducts);

        return redirect()->route('checkout');
    }



    public function emptyCart(){

        //    empty shopping cart

        foreach (session()->get('cart.items') as $productId) {

            session()->forget('product_'. $productId);
        }

        session()->forget('cart.items');

        return redirect()->route('ecom');
    }
}
