<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return 'This is a login';
    }

    public function register(StoreUserRequest $request){

        $request->validated($request->all());

        $user = User::create([
            
        ]);

        return response()->json('This is a register method');
    }

    public function logout(){
        return response()->json('This is logout method');
    }
}
