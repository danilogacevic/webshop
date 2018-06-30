<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

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
    public function store(Request $request, Photo $photo)
    {

        if(session()->has('update_product')) {

            // updating product photos

            $photo->uploadPhoto($request->file('file'),session('update_product'));
            return ;

        } elseif(session()->has('added_product')){

            // uploading photos on product creation

            $photo->uploadPhoto($request->file('file'),session('added_product'));

            Session::flash('message', 'Photo added!');
            Session::flash('status', 'success');

            return ;

        } elseif(!session()->has('update_product') && !session()->has('added_product')) {

            // when session expires

            $lastPhoto = $photo->orderBy('id','desc')->first();

            $photo->uploadPhoto($request->file('file'),$lastPhoto->product_id);

            return ;
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



}
