<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmsRequest extends FormRequest
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
                
            'name' => 'required|max:255',
            'trailer' => 'required|max:255',
            'year' => 'required|max:255',
            'duration' => 'required|max:255',
            'category_id'   => 'required|integer',
            'language_id'   => 'required|integer',
            'age_id'   => 'required|integer',
            'description' => 'required',
            'image' => 'required|image' 
        ];
    }
}
