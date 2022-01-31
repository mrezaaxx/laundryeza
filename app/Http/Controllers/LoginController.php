<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect('home.index');
        }else{
            return view('login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }
}
