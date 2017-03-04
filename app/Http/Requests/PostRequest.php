<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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
            'category_id' => 'required',
            'title' => 'required|min:3|unique:posts,title',
            'content' => 'required',
            'thumb_img' => 'required|image'
        ];
    }

    public function messages(){
        return [
            'category_id.required' => 'Category required',
            'title.required' => 'Title required',
            'title.min' => 'Title require min 3 characters',
            'title.unique' => 'Title already existed',
            'content.required' => 'Content required',
            'thumb_img.required' => 'Thumbail image required',
            'thumb_img.image' => 'Not image'
        ];
    }
}
