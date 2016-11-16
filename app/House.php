<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'Houses';

    public function comments()
    {
    	return $this->hasMany('App\Comment', 'author_id', 'id');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function district()
    {
    	return $this->belongsTo('App\District', 'district_id', 'id');
    }

    public function images()
    {
    	return $this->hasMany('App\Image', 'house_id', 'id');
    }

    public function kind()
    {
    	return $this->belongsTo('App\Kind', 'kind_id', 'id');
    }

    public function project()
    {
    	return $this->belongsTo('App\Project', 'project_id', 'id');
    }

    public function street()
    {
    	return $this->belongsTo('App\Street', 'street_id', 'id');
    }

    public function trend()
    {
    	return $this->belongsTo('App\Trend', 'trend_id', 'id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function ward()
    {
    	return $this->belongsTo('App\Ward', 'ward_id', 'id');
    }

}
