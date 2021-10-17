<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, response()->json([
            'error'=> [
                'code' => 422,
                'message' => 'Validation error',
                'errors' =>$validator->errors()
            ]
        ]));
    }
}
