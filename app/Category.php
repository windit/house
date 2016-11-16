<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'Categories';

	public $timestamps = false;

	public function house()
	{
		return $this->hasManyThrough('App\House', 'App\Kind', 'category_id', 'kind_id', 'id');
	}
}
