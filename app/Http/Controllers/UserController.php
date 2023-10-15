<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ]);
        // return $req->input();

        $user = new User;
        $user->name = $req['name'];
        $user->email = $req['email'];
        $user->password = md5($req['password']);
        $user->gender = $req['gender'];
        $user->date_of_birth = $req['date_of_birth'];
        $user->address = $req['address'];
        // dd($user);
        $user->save();

        return redirect('/login/view');
    }
    function view()
    {
        $user = User::all();
        $data = compact('user');
        // die;
        return view('Customer-View')->with($data);
    }
}
