<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class UpdateUser extends Request
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
        //$this->id comes from hidden input in form (that has value of $user->id)
        return [
            'name' => 'alpha_dash|unique:users,name,'.$this->id,
            'email' => '|email|unique:users,email,'.$this->id,
            'password' => 'between:6,20',
            'password_confirmation' =>'required_with:password|same:password'
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
