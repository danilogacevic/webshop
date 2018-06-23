<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [

        'product_title',
        'category_id',
        'is_active',
        'product_price',
        'product_quantity',
        'product_description',
        'short_description'
    ];

//    Relations

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function photos(){

        return $this->hasMany('App\Photo');
    }


}
