<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ApiLoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

    public function apiLogin(ApiLoginRequest $request) {
        $user = User::where('phone', $request->phone)->first();

        if($user && Hash::check($request->password, $user->password)) {
            $user->api_token = Str::random(32);
            $user->save();

            return [
                'token' => $user->api_token
            ];
        }

        return [
            'phone' => 'Phone or password incorrect.'
        ];
    }
}
