<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request) {
        if(Auth::attempt($request->only(['phone', 'password'])))
            return redirect()->route('profile');
        return back()->withErrors([
            'phone' => 'Телефон или пароль введены неверно!'
        ]);
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }

    public function profile() {
        if(Auth::user() === null)
            return redirect()->route('login');

        return view('profile');
    }
}
