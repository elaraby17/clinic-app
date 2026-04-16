<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }elseif(Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }
        return view('client.pages.auth.login');
    }
    public function register()
    {
        return view('client.pages.auth.register');
    }
    public function signin(LoginUserRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
            return redirect()->route('home')->with('success', 'Logged in successfully.');
        }elseif(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully.');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }

    }
    public function signup(RegisterUserRequest $request)
    {
      $data = $request->validated();
      $data['password'] = Hash::make($data['password']);
      User::create($data);
        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }

    public function logout()
    {
        Auth::logout();
        Auth::guard('admin')->logout();
        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }

}
