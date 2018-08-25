<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
	protected $fillable = [
	    'name',
        'slug',

	];

    public function actors()
    {
        return $this->hasMany('App\Actor');
    }
}
