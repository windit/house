<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'Districts';

    public $timestamps = false;

    public function wards()
    {
    	return $this->hasMany('App\Ward', 'district_id', 'id');
    }

    public function streets()
    {
    	return $this->hasMany('App\Street', 'district_id', 'id');
    }

    public function projects()
    {
    	return $this->hasMany('App\Project', 'district_id', 'id');
    }

    public function city()
    {
    	return $this->belongsTo('App\City', 'city_id', 'id');
    }
}
