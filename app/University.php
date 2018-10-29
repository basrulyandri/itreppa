<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
	protected $fillable = ['name','yayasan_name','rektor_name','address','phone','website_url'];
}
