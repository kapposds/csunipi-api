<?php

namespace App\Http\Requests;

class UpdateViewsDownloads extends Request //used in api
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
            'views' => 'integer|min:0',
            'downloads' => 'integer|min:0'
        ];
    }
}
