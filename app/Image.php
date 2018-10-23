<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Image extends Model
{
	
	protected $fillable = ['name','path','description'];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function albums()
    {
    	return $this->belongsToMany('App\Album');
    }
}
