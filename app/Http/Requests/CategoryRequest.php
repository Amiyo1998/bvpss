<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            // 'name' =>'required|unique:categories,name|max:50',
            'name' => [
                'required',
                Rule::unique('categories')->ignore($this->route('category')),
                'min:5',
                'max:50'
            ]
        ];
    }
}
