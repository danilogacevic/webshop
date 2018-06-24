<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PhotosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $photos = Photo::all();

        return view('backEnd.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $photo = new Photo();

        if(session()->has('update_product')) {

//            $product = Product::find(session()->get('update_product'));
            $this->destroy_all(session()->get('update_product'));
//            $product->photos()->delete();

            $photo->uploadPhoto($request,Session::get('update_product'));
            return redirect('admin/photos');
            
        } elseif(session()->has('added_product')){

//            $photo = new Photo();
//        session()->reflash();
            $photo->uploadPhoto($request,Session::get('added_product'));

            Session::flash('message', 'Photo added!');
            Session::flash('status', 'success');

            return redirect('admin/photos');
        }





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
        $photo = Photo::findOrFail($id);

        return view('backEnd.photos.show', compact('photo'));
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
        $photo = Photo::findOrFail($id);

        return view('backEnd.photos.edit', compact('photo'));
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
        
        $photo = Photo::findOrFail($id);
        $photo->update($request->all());

        Session::flash('message', 'Photo updated!');
        Session::flash('status', 'success');

        return redirect('admin/photos');
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
        $photo = Photo::findOrFail($id);

        unlink(public_path() . $photo->file);

        $photo->delete();

        Session::flash('message', 'Photo deleted!');
        Session::flash('status', 'success');

        return redirect('admin/photos');
    }

    public function destroy_all($id)
    {
        $photos = Photo::where('product_id','=',$id)->get();

        foreach ($photos as $photo) {

            unlink(public_path() . $photo->file);
            $photo -> delete();

        }
    }

}
