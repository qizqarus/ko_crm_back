<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'avatar_path' => 'nullable|string',
            'full_name' => 'nullable|string',
            'birth_day' => 'nullable|date',
            'email' => 'nullable|email|unique:users,email,',
            'password' => 'nullable|string',
            'activity' => 'nullable|boolean',
            'started_work' => 'nullable|string',
            'experience' => 'nullable|string',
            'about_me' => 'nullable|string',
            'hobby' => 'nullable|string',
            'favorite_places' => 'nullable|string',
            'facebook' => 'nullable|string',
            'vk' => 'nullable|string',
            'instagram' => 'nullable|string',
            'duty' => 'nullable|string',
            'phone' => 'nullable|string|unique:users,phone,',
            'login_oktell' => 'nullable|string|unique:users,login_oktell,',
            'login_password' => 'nullable|string',
            'notify' => 'nullable|boolean',
            'distribution_results' => 'nullable|boolean',
            'accept_leads' => 'nullable|boolean',
            'accept_calls' => 'nullable|boolean',
            'compulsory_education' => 'nullable|boolean',
        ];
    }
}
