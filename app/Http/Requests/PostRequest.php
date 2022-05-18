<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'cat_id' => [
                'required',
                Rule::exists("categories", "id"),
            ],
            'title' => [
                'required',
                Rule::unique('posts')->ignore($this->route('post')),
                'min:5',
                'max:255'
            ],
            'body' => [
                'required',
            ],
            'image' => [
                'nullable',
                'image:jpg,jpeg,png',
                'max:512'
            ]
        ];
    }
}
