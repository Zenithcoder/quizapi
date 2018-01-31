<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	protected $fillable=['result','user_id'];

    public function user()
    {
    	
    	return $this->hasMany(User::class);
    }
}
