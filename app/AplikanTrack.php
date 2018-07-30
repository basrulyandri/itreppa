<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AplikanTrack extends Model
{
    protected $table = 'aplikan_track';
    protected $fillable = ['aplikan_id','nama_proses','user_id'];

    public function aplikan()
    {
    	return $this->belongsTo(Aplikan::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
