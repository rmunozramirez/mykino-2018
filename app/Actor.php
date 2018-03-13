<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

	protected $fillable = [

		'name',
		'image_id',
		'genre',
        'slug',
		
	];

    public function films()
    {
        return $this->belongsToMany('App\Film');
    }

    public function images()
    {
        return $this->morphMany('App\Comment', 'imageable');
    }
}
