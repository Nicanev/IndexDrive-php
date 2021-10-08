<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterContoller extends Controller
{
    public function submit(RegisterRequest $req) {
        $contact = new User();
        $contact->first_name = $req->input('first_name');
        $contact->last_name = $req->input('last_name');
        $contact->patronymic = $req->input('last_name');
        $contact->phone = $req->input('phone');
        $contact->birth_date = $req->input('birth_date');
        $contact->passport_series = $req->input('passport_series');
        $contact->passport_number = $req->input('passport_number');
        $contact->password = $req->input('password');

        $contact->save();

        return redirect()->route('profile');
    }
}
