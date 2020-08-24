<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Course;

class UsersAdminController extends Controller
{
    public function index()
    {
        $users = User::where('type','student')->get();

        return view('users.admin.index', ['users' => $users]);
    }
}
