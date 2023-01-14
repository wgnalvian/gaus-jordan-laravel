<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginReq;
use App\Http\Requests\Auth\RegisterReq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    

    public function login(){

        return view('auth.login');

    }
    public function register(){

        return view('auth.register');

    }
    public function doRegister(RegisterReq $request){

        $request->validated();


        User::create([
            'name' => $request->post('name'),
            'password' => Hash::make($request->post('password'))
            
        ]);

        Alert::success('Sukses','Sukses register');

        return redirect()->to('/auth/login');

    }

    public function doLogin(LoginReq $request){


        $request->validated();

        if(Auth::attempt(['name' => $request->post('name'),'password' => $request->post('password')])){

            return redirect()->to('/');
        }else{

            Alert::error('Oppss!','Username atau password salah');

            return redirect()->back();
        }


    }

}
