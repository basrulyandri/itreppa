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

    public function thumbnail()
    {     
        $explode = explode('/', $this->path);
        if(sizeof($explode) <= 3){
            $thumb = '/photos/thumbs'.substr($this->path, 7);      
        }else{
            $thumb = '/photos/'.$explode[2].'/thumbs/'.$explode[3];
        }
        return $thumb;
    }
}
