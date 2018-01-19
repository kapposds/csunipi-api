<?php

namespace App\Http\Requests;

class UpdatePage extends Request
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
            'title' => 'required',
            'alias' => 'required',//unique is handled in controller
            'ckeditor_content' => 'required',
        ];
    }

    public function messages()
    {
        return [
//            'email.required'=>'You cant leave Email field empty',
//            'name.required'=>'You cant leave name field empty',
//            'name.min'=>'The field has to be :min chars long'
        ];
    }
}
