<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Album extends Model
{
	use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */   
    protected $fillable= ['name','description'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
	public function images()
	{
		return $this->belongsToMany(Image::class);
	}

	public function thumbnail()
	{
		if($this->images->isEmpty()){
			return url('/assets/frontend/corporate/img/default-thumb.jpg');
		}

		return $this->images->first()->thumbnail();
	}
}
