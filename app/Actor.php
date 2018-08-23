<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Actor extends Model
{

	protected $fillable = [
		'name',
		'image_id',
        'slug',
        'gender_id',
        
	];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function films()
    {
        return $this->belongsToMany('App\Film');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }
}
