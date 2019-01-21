<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;

class AuthController extends Controller
{
    //
    public function register(UserRegisterRequest $request){
        // バリデーションとかはUserRegisterRequestに
        //dd('来てるよ〜');
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        return $user;

    }
}
