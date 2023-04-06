<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required | string',
            'content' => 'required | string',
            'preview_image' => 'nullable | file',
            'main_image' => 'nullable | file',
            'category_id' => 'required | integer | exists:categories,id',
            'tags_ids' => 'nullable | array',
            'tags_ids.*' => 'nullable | integer | exists:tags,id'
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'Это поле необходимо для заполнения',
            'content.required' => 'Это поле необходимо для заполнения',
            'preview_image.required' => 'Это поле необходимо для заполнения',
            'preview_image.file' => 'Это должен быть файл',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.file' => 'Это должен быть файл',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'Это поле должно быть числом категории',
            'category_id.exist' => 'Категория должна быть в базе данных',
            'tags_ids.array' => 'Этодолжен быть массив данных'
        ];
    }
}
