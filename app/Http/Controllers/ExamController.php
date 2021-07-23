<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\{User,Question,Answer};
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function appearExam()
    {
        $questions = Question::where('status',1)->inRandomOrder()->limit(5)->get();

        return view('student.exam',compact('questions'));
    }

    public function submitExam(Request $request)
    {   
        // dd($request->all());
        $result = 0;
        for($i=0;$i< sizeof($request->question);$i++) {
            if (!empty($request->question[$i])) {
                $rightAnswer = Answer::where('question_id',$request->question[$i])->where('is_answer',1)->first();
                if($rightAnswer->id == $request->answer[$i])
                {
                    $result = $result + 1;
                }
            }
        }
        return view('student.result',compact('result'));
    }

    public function result()
    {
        
    }
}
