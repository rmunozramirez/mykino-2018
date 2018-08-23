<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{

	protected $fillable = [

        'image_name',
        'slug',
        'alt', 
        'about',

	];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function film()
    {
        return $this->hasOne('App\Film');
    }
    public function category()
    {
        return $this->hasOne('App\Category');
    }
    public function actor()
    {
        return $this->hasOne('App\Actor');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
    
}
