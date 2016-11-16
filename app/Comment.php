<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comments';

    public function house()
    {
    	return $this->belongsTo('App\House', 'house_id', 'id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
