<?php

namespace App\Http\Controllers;

use App\Test;
use App\Order;
use App\Course;
use App\Module;
use Illuminate\Http\Request;

class CoursesAdminController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.admin.index', ['courses'=>$courses]);
    }
    public function create()
    {
        $courses = Course::all()->pluck('name', 'id');
        return view('orders.create',['courses' => $courses]);
    }

    public function edit(Course $course)
    {
        return view('courses.admin.edit', [ 'course' => $course]);
    }

    public function store()
    {
        $this->validate(request(), [
            'name'  => 'required|min:3',
            'description'  => 'required',
        ]);

        $course = Course::create(request()->only(['name', 'description']));

        return redirect()->route('course-edit',$course->id)->with(['status_title' => 'Course created!', 'status_message' => 'Your data has been saved']);
    }

    public function update(Course $course)
    {
        $this->validate(request(), [
            'name'  => 'required|min:3',
            'description'  => 'required',
        ]);
        $course->update(request()->only(['name','description']));
        foreach (request('modules',[]) as $key=>$mod){
            $module = Module::find($mod['id']);
            $module->update(['name'=>$mod['name'], 'video'=>$mod['video'], 'order'=>$mod['order']]);
        }
        if(request()->has('delete_module')){
            $module = Module::find(collect(request('delete_module'))->keys()->first());
            $module->delete();
            return redirect()->route('course-edit',$course->id)->with(['status_title' => 'Module deleted!', 'status_message' => 'Your data has been saved']);
        }
        if(request()->has('add_module')){
            $order = $course->modules()->count() + 1;
            $course->modules()->create(['name' => 'Module ' . ($order), 'order'=>$order]);
            return redirect()->route('course-edit',$course->id)->with(['status_title' => 'Module added!', 'status_message' => 'Your data has been saved']);
        }
        return redirect()->route('admin-courses')->with(['status_title' => 'Course updated!', 'status_message' => 'Your data has been saved']);
    }
}
