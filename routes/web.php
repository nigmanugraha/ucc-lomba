<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('login');
})->name("login"); // memberi nama router

Route::get('/dashboard',function(){
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('dashboard');
});

Route::get('/logout',function(){ //route untuk logout
    (Auth::logout());
    return redirect('/');
});

Route::get('/register',function(){
    return view('register');
});

Route::post('/login','UserController@login'); //memanggil fungsi dalam variable
Route::post('/register', 'UserController@reg');

//-----------Route Lomba-----------



Route::middleware(['auth'])->group(function(){ // perlu auth/login untuk bisa login ke halaman di dalam
    Route::get('/user',function(){
        return view('user');
    });
    Route::get('/admin',function(){
        return view('admin');
    });
    Route::get('/admin',function(){
        $role = Auth::user()->role;
        if($role != 'admin'){
            return 'tak boleh masuk';
        }
        return view('admin.index');
    });
    Route::get('lomba','LombaController@index');
    //add
    Route::get('lomba/add','LombaController@add');
    Route::post('lomba','LombaController@create');
    //edit
    Route::get('lomba/{id}/edit','LombaController@edit');
    Route::post('lomba/{id}/edit','LombaController@update');
    //delete
    Route::get('lomba/{id}/hapus','LombaController@delete');
    Route::get('lomba/{id}/confirmdelete','LombaController@deleteConfirm');
});
Route::get('lomba/{id}','LombaController@detail');
