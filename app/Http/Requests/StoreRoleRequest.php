<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:roles,name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя роли обязательно для заполнения',
            'name.unique' => 'Роль с таким именем уже существует',
        ];
    }
}
