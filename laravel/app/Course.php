<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    public function test()
    {
        return $this->hasOne(Test::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function getStatusAttribute()
    {
        if(auth()->user()->type == 'admin') return 'active';
        if($order = Order::where('email',auth()->user()->email)
                         ->where('course_id',$this->id)
                         ->where('valid','>',Carbon::now())->first()){
            return 'active';
        } 
        return 'blocked';
    }
    public function getValidAttribute()
    {
        if(auth()->user()->type == 'admin') return 'Forever (admin)';
        if($order = Order::where('email',auth()->user()->email)
                         ->where('course_id',$this->id)
                         ->where('valid','>',Carbon::now())->first()){
            return $order->valid->toDateString();
        }
        return 'Expired';
    }
}
