<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trend extends Model
{
    protected $table = 'Trends';

    public $timestamps = false;

    public function houses()
    {
    	return $this->hasMany('App\House', 'trend_id', 'id');
    }


}
