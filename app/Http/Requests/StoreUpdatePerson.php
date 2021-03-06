<?php

namespace App\Http\Requests;

class StoreUpdatePerson extends StorePicture
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
            'alias' => 'required',//unique is handled in controller
            'category' => 'required|exists:people,category',
            'rank' =>'required|exists:people,rank',
            'tags' => '',
            'avatar' => 'required_with:file',
            'location' => '',
            'office_hours' =>'',
            'phone_number' => '',
            'email' => 'email',
            'website' => 'url',
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
