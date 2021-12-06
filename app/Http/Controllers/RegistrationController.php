<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index(){
        return view('/registration-page.index',[
            'title' => 'Registration Page'
        ]);
    }

    public function save(Request $request){
        $validatedData = $request -> validate([
            'username' => 'required|max:16|unique:users|min:8',
            'email' => ' required|email|unique:users',
            'password' => ' required|min:4',
            'logas' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login-page');
    }

}
