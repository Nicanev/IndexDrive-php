<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterContoller extends Controller
{
    public function submit(RegisterRequest $req) {
        $contact = new User();
        $contact->first_name = $req->input('first_name');
        $contact->last_name = $req->input('last_name');
        $contact->patronymic = $req->input('patronymic');
        $contact->phone = $req->input('phone');
        $contact->birth_date = $req->input('birth_date');
        $contact->passport_series = $req->input('passport_series');
        $contact->passport_number = $req->input('passport_number');
        $contact->password = Hash::make($req->input('password'));

       $contact->save();

        return redirect()->route('login');
    }

    public function store(UserStoreRequest $request) {

        return User::create($request->all());
    }


    public function allUsers() {
        $user = new User;
        return $user->all();
    }

}
