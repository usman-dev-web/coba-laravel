<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => "Register",
            'active' => "login"
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // encrypt password
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd('registration success');
        // menyimpan ke database
        User::create($validatedData);

        // membuat notif ketika berhasil register
        $request->session()->flash('success', 'Registration successfull! Please Login');

        // redirect ke halaman login
        return redirect('/login');
    }

}
