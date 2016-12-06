<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtName'       => 'required',
            'txtEmail'      => 'required|unique:users,email',
            'txtPassword'   => 'required',
            'txtRepassword' => 'required|same:txtPassword'
        ];
    }

    public function messages() {
        return [
            'txtName.required'       => 'Please enter username',
            'txtEmail.required'      => 'Please enter email',
            'txtEmail.unique'        => 'Email is exists',
            'txtEmail.regex'         => 'Email syntax error',
            'txtPassword.required'   => 'Please enter password',
            'txtRepassword.required' => 'Please enter repassword',
            'txtRepassword.same'     => 'Repassword don\'t match'
        ];
    }
}
