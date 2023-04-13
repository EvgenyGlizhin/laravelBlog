<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required | string',
            'email' => 'required | string | email | unique:users,email,' . $this->user_id,
            'user_id' => 'required | integer | exists:users,id',
            'role' => 'required | integer'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Это поле нобходимо заполнить',
            'name.string' => 'Это поле должно быть строкой',
            'email.required' => 'Это поле необходимо заполнить',
            'email.string' => 'Это поле должно быть строкой',
            'email.email' => 'Почта должная сответствовать формату почта @gmail.com',
            'email.unique' => 'Такая почта уже существует',
            'password.required' => 'Это поле необходимо заполнить'
        ];
    }
}
