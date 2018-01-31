<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;

class QuestionController extends Controller
{
    public function allQuestions(){

    	//$quest = Question::with('option');

    	 $quest = DB::table('questions')->join('options', 'questions.id', '=', 'options.question_id')->select('questions.id','questions.body','questions.answer','options.option1','options.option2','options.option3')->get();

    	 return response()->json(['status' => 'success', 'questions' => $quest], 200);
    }
}
