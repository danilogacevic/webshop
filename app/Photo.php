<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class Photo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';

    protected $uploads = '/photos/';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['file', 'product_id'];

//    file getter for Photo model

    public function getFileAttribute($file){

        return $this->uploads . $file;
    }


    public function uploadPhoto($data,$id=0) {

        $file = $data->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('photos' , $name);
//        if(Session::has('added_product')){
//            $id = Session::get('added_product');
//            session()->forget('added_product');
//        } else {
//            $id = 0;
//        }

//        session()->flash('added_product',$id);

        $this->create(['file'=>$name,'product_id'=>$id]);
    }

    public function destroy_all($id)
    {
        $photos = Photo::where('product_id','=',$id)->get();

        foreach ($photos as $photo) {

            unlink(public_path() . $photo->file);
            $photo -> delete();

        }
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }


}
