<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

	protected $fillable = [

	    'name',
	    'description',
	    'image_id',
        'slug',

	];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function films()
    {
        return $this->hasMany('App\Film');
    }

    public function image()
    {
        return $this->belongsTo('App\Image', 'category_id', 'id');
    }
}
