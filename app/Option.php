<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable=['question_id','option1','option2','option3'];

    public function question()
    {
        
        return $this->belongTo(Question::class);
    }
}
