<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fsk extends Model
{

	protected $fillable = [

		'fsk',
		'slug_fsk',
		'image_id',
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
