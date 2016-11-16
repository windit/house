<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
	protected $table = 'Kinds';

	public $timestamps = false;

	public function houses()
	{
		return $this->hasMany('App\House', 'kind_id', 'id');
	}

	public function category()
	{
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}
}
