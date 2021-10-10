<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric|unique:users',
            'birth_date' => 'required',
            'passport_series' => 'required|numeric',
            'passport_number' => 'required|numeric',
            'password' => 'required',
            'patronymic' => 'required'

        ];
    }

    public function messages() {
        return [
          'first_name.required' => 'Поле имя является обязательным.',
            'last_name.required' => 'Поле фамилия является обязательным.',
            'phone.required' => 'Поле телефон является обязательным.',
            'phone.numeric' => 'Поле телефон должно состоять из цифр',
            'password.required' => 'Поле пароль является обязательным.',
            'birth_date.required' => 'Поле дата является обязательным',
            'passport_series.required' => 'Поле серия паспорта является обязательным.',
            'passport_number.required' => 'Поле номер паспорта является обязательным',
            'passport_series.numeric' => 'Поле серия паспорта должно состоять из цифр.',
            'passport_number' => 'Поле номер паспорта должно состоять из цифр',
            'patronymic.required' => 'Поле отчество является обязательным.'
        ];
    }
}
