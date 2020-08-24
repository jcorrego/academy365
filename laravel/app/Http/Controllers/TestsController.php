<?php

namespace App\Http\Controllers;

use App\Test;
use App\Course;

class TestsController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $tests   = collect([]);
        foreach ($courses as $course) {
            if($course->status == 'active') $tests->push(Test::firstOrCreate(['course_id' => $course->id]));
        }

        return view('tests.index', ['tests' => $tests]);
    }

    public function take(Test $test)
    {
        return view('tests.take', ['test' => $test]);
    }

    public function submit(Test $test)
    {
        $questions = $test->questions;
        $rules     = [];
        foreach ($questions as $question) {
            $rules['question_' . $question->id] = 'required';
        }
        $this->validate(request(),$rules);
        $score = 0;
        foreach ($questions as $question) {
            if(request('question_'.$question->id,'') == $question->answer)$score++;
        }
        auth()->user()->tests()->syncWithoutDetaching([$test->id => ['answers'=>json_encode(request()->except('_token')),'score'=>$score]]);
        $percentage = round(100*$score/$test->questions->count());
        if($percentage >= 50) return redirect()->route('certificate-view',$test->id)->with(['test_passed'=>$test->id]);
        else return redirect()->route('tests')->with(['test_failed'=>$test->id]);
    }
}
