<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AuthController::class)->prefix('/auth')->group(function(){

    Route::get('/login','login')->name('login');
    Route::post('/login','doLogin');
    Route::get('/register','register');
    Route::post('/register','doRegister');

});

Route::get('/open',function(){
    return view('user.open');
});


ROute::middleware('is.login')->group(function(){


    Route::controller(UserController::class)->group(function(){

        Route::get('/','index');
        Route::get('/petunjuk','petunjuk');
        Route::get('/tentang','tentang');
        Route::get('/pengembang','pengembang');
        Route::get('/logout',function(){
            Auth::logout();
            return redirect()->to('/auth/login');
        });

    });
  
    Route::controller(ProdukController::class)->group(function(){

        Route::get('/produk/list','list');
        Route::get('/produk/add','add');
        Route::post('/produk/add','doAdd');
        Route::get('/produk/edit/{id}','edit');
        Route::get('/produk/choose/{id}','choose');
        Route::post('/produk/choose/','doChoose');
        Route::post('/produk/edit','doEdit');
        Route::get('/produk/detail/{id}','detail');
        // Route::get('/produk/edit/{id}','list');
        Route::get('/produk/reset','reset');
        Route::get('/produk/reset/{id}','resetDetail');
        Route::post('/produk/delete','list');

    });

    Route::controller(BahanController::class)->group(function(){
        Route::get('/bahan/add','add');
        Route::get('/bahan/list','list');
        Route::get('/bahan/reset','reset');
        Route::post('/bahan/add','doAdd');
        Route::get('/bahan/count','count');
        Route::post('/bahan/count','doCount');

    });

});
