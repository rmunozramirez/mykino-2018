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
        return $this->belongsToMany('App\Film', 'actor_film');
    }

    public function image()
    {
        return $this->hasOne('App\Image');
    }
}
