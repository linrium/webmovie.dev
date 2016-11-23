<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FansubRequest extends FormRequest
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
            'txtName'=>'required|unique:fansubs,name'
        ];
    }
    public function message() {
        return [
            'txtName.required'=>'Please enter the name of fansub',
            'txtName.unique'=>'This name of fansub is exist'
        ];
    }
}
