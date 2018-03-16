<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
 

	protected $fillable = [

	    'language',
	    'image',
        'slug',

	];

    public function films()
    {
        return $this->hasMany('App\Film');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
