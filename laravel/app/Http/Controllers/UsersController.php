<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function changePassword()
    {
        return view('account.change-password');
    }

    public function updatePassword()
    {
        $this->validate(request(), [
            'current_password'     => 'password',
            'new_password' => 'confirmed|required|min:6|different:current_password',
        ]);
        $user = auth()->user();
        $user->password = bcrypt(request('new_password'));
        $user->save();
        return redirect()->route('home')->with(['status_title' => 'Password updated!', 'status_message' => 'Your data has been saved']);
    }

    public function certificates()
    {
        $certificates =  collect([]);
        foreach (auth()->user()->tests as $test){
            if(round(100*$test->pivot->score/$test->questions()->count()) > 80){
                $certificates->push($test);
            }
        }
        return view('users.certificates.index',['certificates'=>$certificates]);
    }

    public function certificateView(Test $test)
    {
        $certificate = auth()->user()->tests()->where('tests.id',$test->id)->first();
        return view('users.certificates.show',['certificate'=>$certificate]);
    }
}
