<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
	protected $fillable = [

	    'name',
	    'image',
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
        return $this->belongsTo('App\Image');
    }
}
