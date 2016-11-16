<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'Wards';

    public $timestamps = false;

    public function district()
    {
    	return $this->belongsTo('App\District', 'district_id', 'id');
    }
}
