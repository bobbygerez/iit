<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    
    protected $table = 'questions';

    public function answers(){

    	return $this->hasMany('App\Model\Answer', 'question_id', 'id');
    }
}
