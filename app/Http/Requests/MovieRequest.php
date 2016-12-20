<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'txtName'        => 'required|unique:movies,name',
            'txtStatus'      => 'required',
            'txtNumber'      => 'required',
            'txtDescription' => 'required',
            'txtYear'        => 'required',
            'fileThumb'        => 'required',
            'txtSeason'      => 'required',
            'txtProducer'=>'required',
            'txtGenre' => 'required',
            'txtFansub' => 'required',
            'txtKeyword' => 'required'
        ];
    }
    public function messages() {
        return [
            'txtName.required'=> 'Please enter the name of movie',
            'txtName.unique'=> 'Movie has existed',
            'txtStatus'       => 'Please enter the name of status',
            'txtNumber'       => 'Please enter the name of total episode',
            'txtDescription'  => 'Please enter the name of description',
            'txtYear'         => 'Please enter the name of year',
            'txtSeason'       => 'Please enter the name of season',
            'txtProducer'=>'Please enter the name of producers',
            'txtGenre' => 'Please enter the name of genres',
            'txtFansub' => 'Please enter the name of fansubs',
            'txtKeyword' => 'Please enter the name of keywords',
            'fileThumb'        => 'Please input thumb of movie',
        ];
    }
}
