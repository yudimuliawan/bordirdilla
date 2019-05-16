<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=> 'alpha|max:100',
            'email'=> 'email',
            'password'=> 'required|max:100',
            'passwordConfirmation'=> 'required|max:100'
        ];
    }

    public function message()
    {
        return [
            'username.required' => 'Username field is required',
            'email.required' => 'Email field is required',
            'password.required' => 'Password field is required',
            'passwordConfirmation.required' => 'Confirm password is required'
        ];
    }
}
