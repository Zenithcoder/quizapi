<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['body','answer'];

    public function option()
    {
    	
    	return $this->hasMany(Option::class);
    }
}
