<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UserStoreRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'patronymic' => 'required',
            'phone' => 'required|numeric|unique:users',
            'birth_date' => 'required',
            'passport_series' => 'required|numeric',
            'passport_number' => 'required|numeric',
            'password' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, response()->json(
            $validator->errors(), 422
        ));
    }
}
