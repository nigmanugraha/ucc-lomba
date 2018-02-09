<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    function login(Request $request){
        $email      = $request->input('email');
        $password   = $request->input('password');

        // return $username. " " . $password;
        //authentication system. target database email dan password
        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }else{
            return 'username atau password salah';
        }
    }

    function reg(Request $request){
        $name       = $request->input('name');
        $email      = $request->input('email');
        $password   = $request->input('password');
        $retypepass = $request->input('retypePassword');


        //Validasi Email
        $data= User::where('email',$email)->first(); //get user database
        if($data != null){
            return 'email sudah ada';
        }

        if($password==null){
            return "password kosong";
        }

        if($email==null){
            return "email kosong";
        }

        if($name == null){
            return "nama kosong";
        }

        if($password!=$retypepass){
            return "password tidak sama";
        }
        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = bcrypt($password);
        $user->save();

        Auth::loginUsingId($user->id);
        //return "Nama        : $name <br>Email       : $email <br>Password    : $password";
        return redirect('dashboard');

    }
}
