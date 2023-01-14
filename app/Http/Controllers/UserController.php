<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        return view('user.index');

    }

    public function pengembang(){
        return view('user.pengembang');
    }

    public function tentang(){
        return view('user.tentang');
    }

    public function petunjuk(){
        return view('user.petunjuk');
    }

    public function logout(){
        Auth::logout();
        return redirect()->to('/auth/login');
    }
}
