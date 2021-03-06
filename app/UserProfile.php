<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id','first_name','last_name','facebook_url','twitter_url','linkedin_url','photo','phone','agama','jenis_kelamin','address','nickname','about','photo','university_id','jabatan_di_yayasan'];

    public function university()
    {
    	return $this->belongsTo(University::class);
    }
}
