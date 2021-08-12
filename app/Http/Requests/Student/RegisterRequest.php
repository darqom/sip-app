<?php

namespace App\Http\Requests\Student;

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
            'fullname' => 'required',
            'nisn' => 'required|digits:10',
            'niss' => 'required',
            'vocation' => 'required',
            'class' => 'required',
            'birth_date' => 'required|date',
            'birth_place' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
