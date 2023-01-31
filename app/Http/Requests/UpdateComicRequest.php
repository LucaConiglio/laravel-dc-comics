<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
                'title' => 'required|unique:title,min:8,max:40',
                'thumb' => 'nullable',
                'description' => 'min:10,max:255', 
                'price' => 'nullable'
            ];
       
    }
}
