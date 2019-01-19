<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        // バリデーションとか書く
        //dd('Register!!');
        $this->validate($request, [
            'name' => 'required|string|max:180',
            'email' => 'required|string|email|max:180|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        return $user;

    }
}
