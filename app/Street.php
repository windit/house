<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $table = 'Streets';

    public $timestamps = false;

    public function houses()
    {
    	return $this->hasMany('App\House', 'street_id', 'id');
    }

    public function district()
    {
    	return $this->belongsTo('App\District', 'district_id', 'id');
    }
}
