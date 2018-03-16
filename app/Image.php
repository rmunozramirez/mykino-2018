<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

	protected $fillable = [

		'image',

	];

    public function imageable()
    {
        return $this->morphTo();
    }


    public function film()
    {
        return $this->belongsTo('App\Film');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function actor()
    {
        return $this->belongsTo('App\Actor');
    }
    
}
