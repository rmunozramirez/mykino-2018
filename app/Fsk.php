<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fsk extends Model
{

	protected $fillable = [

		'name',
		'image_id',
        'slug',
		
	];


    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function films()
    {
        return $this->hasMany('App\Film');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
    
}
