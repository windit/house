<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'Cities';

    public $timestamps = false;

    public function districts()
    {
    	return $this->hasMany('App\District', 'city_id', 'id');
    }

    public function wards()
    {
    	return $this->hasManyThrough('App\Ward', 'App\District', 'city_id', 'district_id', 'id');
    }

    public function streets()
    {
    	return $this->hasManyThrough('App\Street', 'App\District', 'city_id', 'district_id', 'id');
    }

    public function projects()
    {
    	return $this->hasManyThrough('App\Project', 'App\District', 'city_id', 'district_id', 'id');
    }
}
