<?php

namespace App\Http\Requests;

class StoreUpdateArticle extends StorePicture
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
            'category_with_articles' => 'empty_with:category_without_articles|required_without:category_without_articles',
            'category_without_articles' => 'empty_with:category_with_articles|required_without:category_with_articles',
            'thumbnail' => 'required_with:file', //if file field is filled, then thumbnail is required (as a filename)
            'attachement' => 'required|in:0,1',
            'attachement_url' =>'url|required_if:attachement,1',
            'ckeditor_content' => 'required_if:attachement,0',
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
