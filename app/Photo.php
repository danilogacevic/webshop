<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function getFileAttribute($name){

        return $this->uploads . $name;
    }


    public function uploadPhoto($data) {

        $file = $data->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('photos' , $name);
        $this->create(['file'=>$name,'product_id'=>1]);
    }


}
