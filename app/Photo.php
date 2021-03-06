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

//    photos uploading function

    public function uploadPhoto($data,$id=0) {

        $file = $data->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('photos' , $name);


        $this->create(['file'=>$name,'product_id'=>$id]);
    }

//    delete all photos related to specific product

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
