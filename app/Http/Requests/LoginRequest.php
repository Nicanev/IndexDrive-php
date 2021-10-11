<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'phone' => 'required|numeric',
                'password' => 'required'
        ];
    }

    public function messages() {
        return [
            'phone.required' => 'Поле телефон является обязательным.',
            'password.required' => 'Поле пароль является обязательным.',
            'phone.numeric' => 'Поле телефон должно состоять из цифр',
        ];
    }
}
