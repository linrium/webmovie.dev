<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeasonRequest extends FormRequest
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
            'txtName'=>'required|unique:seasons,name'
        ];
    }
    public function messages() {
        return [
            'txtName.required'=>'Please enter the name of season',
            'txtName.unique'=>'This name of season is exist'
        ];
    }
}
