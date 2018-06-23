<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Category;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();

        return view('backEnd.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::pluck('title','id')->all();
        return view('backEnd.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Product::create($request->all());

        Session::flash('message', 'Product added!');
        Session::flash('status', 'success');

        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('backEnd.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::pluck('title','id')->all();

        return view('backEnd.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $product = Product::findOrFail($id);
        $product->update($request->all());

        Session::flash('message', 'Product updated!');
        Session::flash('status', 'success');

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        Session::flash('message', 'Product deleted!');
        Session::flash('status', 'success');

        return redirect('admin/products');
    }

}