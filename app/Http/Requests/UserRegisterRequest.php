<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'user' => 'required|string|max:20|unique:users,user|no_space',
            'email' => 'required|email',
            'name' => 'required|string|max:50',
            'password' => 'required|min:3|max:20|confirmed|no_space'
        ];
    }
}
