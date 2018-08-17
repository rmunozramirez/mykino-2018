<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
	protected $fillable = [

		    'name',
            'image_id',
            'description',
            'slug',
            'trailer',
            'year',
            'duration',
			'fsk_id',
			'language_id',
			'category_id' 
	];


    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
   	}

    public function fsk()
    {
        return $this->belongsTo('App\Fsk');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'actor_film');
    }

    public function image()
    {
        return $this->hasOne('App\Image', 'film_id', 'id');
    }
}
