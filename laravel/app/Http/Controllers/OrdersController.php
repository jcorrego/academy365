<?php

namespace App\Http\Controllers;

use App\Test;
use App\User;
use App\Order;
use App\Course;
use App\Models\Tests\Question;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', ['orders' => $orders]);
    }

    public function create()
    {
        $courses = Course::all()->pluck('name', 'id');
        return view('orders.create',['courses' => $courses]);
    }
    
    public function userCreate(User $user)
    {
        $courses = Course::all()->pluck('name', 'id');
        return view('orders.create',['courses' => $courses, 'email'=>$user->email]);
    }

    public function edit(Order $order)
    {
        $courses = Course::all()->pluck('name', 'id');
        return view('orders.edit', ['order' => $order, 'courses' => $courses]);
    }

    public function store()
    {
        $this->validate(request(), [
            'wp_order'  => 'required',
            'course_id' => 'required',
            'email'     => 'required|email',
        ]);

        Order::create(request()->only(['wp_order', 'email', 'valid', 'course_id']));

        return redirect()->route('admin-orders')->with(['status_title' => 'Order added!', 'status_message' => 'Your data has been saved']);
    }

    public function update(Order $order)
    {
        $this->validate(request(), [
            'wp_order'  => 'required',
            'course_id' => 'required',
            'email'     => 'required|email',
        ]);
        $order->update(request()->only(['wp_order', 'email', 'valid', 'course_id']));

        return redirect()->route('admin-orders')->with(['status_title' => 'Order updated!', 'status_message' => 'Your data has been saved']);
    }
}
