<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile;

class RegisterContoller extends Controller
{
    public function submit(RegisterRequest $req) {
        $user = new User();
        $profile = new Profile();
        $user->first_name = $req->input('first_name');
        $user->last_name = $req->input('last_name');
        $user->patronymic = $req->input('patronymic');
        $user->phone = $req->input('phone');
        $user->birth_date = $req->input('birth_date');
        $user->passport_series = $req->input('passport_series');
        $user->passport_number = $req->input('passport_number');
        $user->password = Hash::make($req->input('password'));

        $user->save();
        $user->profile()->save($profile);

        return redirect()->route('login');
    }

    public function store(UserStoreRequest $request) {

        return User::create([
            'password' => Hash::make($request->password)
        ] + $request->all());
    }


    public function allUsers() {
        $user = new User;
        return $user->all();
    }

}
