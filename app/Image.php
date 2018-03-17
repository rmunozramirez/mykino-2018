<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

	protected $fillable = [

		'image',
        'film_id',
        'actor_id',
        'category_id',

	];

    public function film()
    {
        return $this->belongsTo('App\Film', 'film_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function actor()
    {
        return $this->belongsTo('App\Actor');
    }
    
}
