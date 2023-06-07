<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'full_name' => 'required|string',
            'birth_day' => 'required|date',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'activity' => 'required|boolean',
            'started_work' => 'required|string',
            'experience' => 'required|string',
            'about_me' => 'required|string',
            'hobby' => 'required|string',
            'favorite_places' => 'required|string',
            'facebook' => 'required|string',
            'vk' => 'required|string',
            'instagram' => 'required|string',
            'duty' => 'required|date',
            'phone' => 'required|string|unique:users',
            'login_oktell' => 'required|string|',
            'login_password' => 'required|string',
            'notify' => 'required|boolean',
            'distribution_results' => 'required|boolean',
            'accept_leads' => 'required|boolean',
            'accept_calls' => 'required|boolean',
            'compulsory_education' => 'required|boolean',
        ];
    }
}
