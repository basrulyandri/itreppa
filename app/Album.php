<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	public function images()
	{
		return $this->belongsToMany('App\Image');
	}
}
