<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProducerRequest extends FormRequest
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
            'txtName'=>'required|unique:producers,name'
        ];
    }
    public function message() {
        return [
            'txtName.required'=>'Please enter the name of producer',
            'txtName.unique'=>'This name of producer is exist'
        ];
    }
}
