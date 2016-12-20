<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenreRequest extends FormRequest
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
            'txtName'=>'required|unique:genres,name'
        ];
    }
    public function messages() {
        return [
            'txtName.required'=>'Please enter the name of genre',
            'txtName.unique'=>'This name of genre is exist'
        ];
    }
}
