<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'Projects';

    public function houses()
    {
    	return $this->hasMany('App\House', 'project_id', 'id');
    }

    public function district()
    {
    	return $this->belongsTo('App\District', 'distric_id', 'id');
    }
}
