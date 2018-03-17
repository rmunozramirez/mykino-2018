<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = [

	    'category',
	    'description',
	    'image_id',
        'slug',

	];

    public function films()
    {
        return $this->hasMany('App\Film');
    }

    public function image()
    {
        return $this->hasOne('App\Image', 'category_id', 'id');
    }
}
