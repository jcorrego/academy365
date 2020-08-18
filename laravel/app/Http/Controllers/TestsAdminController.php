<?php

namespace App\Http\Controllers;

use App\Test;
use App\Course;
use Illuminate\Http\Request;
use App\Models\Tests\Question;

class TestsAdminController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $tests   = collect([]);
        foreach ($courses as $course) {
            $tests->push(Test::firstOrCreate(['course_id' => $course->id]));
        }

        return view('tests.admin.index', ['tests' => $tests]);
    }

    public function edit(Test $test)
    {
        return view('tests.admin.edit', ['test' => $test]);
    }

    public function createQuestion(Test $test)
    {
        return view('tests.admin.question-create', ['test' => $test]);
    }
    public function editQuestion(Test $test, Question $question)
    {
        return view('tests.admin.question-edit', ['test' => $test, 'question'=> $question]);
    }

    public function storeQuestion(Test $test)
    {
        $this->validate(request(), [
            'name' => 'required|min:10',
            'description' => 'required|min:10',
        ]);
        
        $test->questions()->create(request()->only(['name','description','options','answer']));
        
        return redirect()->route('test-edit', $test->id)->with(['status_title'=> 'Question added!','status_message'=>'Your data has been saved']);
    }
    
    public function updateQuestion(Test $test, Question $question)
    {
        $this->validate(request(), [
            'name' => 'required|min:10',
            'description' => 'required|min:10',
        ]);
        $question->update(request()->only(['name','description','options','answer']));

        return redirect()->route('test-edit', $test->id)->with(['status_title'=> 'Question updated!','status_message'=>'Your data has been saved']);
    }

    public function deleteQuestion(Test $test, Question $question)
    {
        $question->delete();
        return redirect()->route('test-edit', $test->id)->with(['status_title'=> 'Question removed!','status_message'=>'Your data has been deleted']);
    }
}
