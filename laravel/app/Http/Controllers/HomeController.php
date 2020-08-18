<?php

namespace App\Http\Controllers;

use App\Module;
use App\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $courses->each->append('status');
        return view('home',['courses'=>$courses]);
    }
}
