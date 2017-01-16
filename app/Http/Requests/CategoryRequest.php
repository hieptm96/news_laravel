<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'name' => 'required|min:3|max:100|unique:categories,name',
            'parent_id' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Category name required',
            'name.min' => 'The length of name min 3 characters',
            'name.max' => 'The length of name max 100 characters',
            'name.unique' => 'The category name existed',
            'parent_id.required' => 'Please select parent category'
        ];
    }
}
