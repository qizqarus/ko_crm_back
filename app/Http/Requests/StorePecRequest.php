<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePecRequest extends FormRequest
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
            'pec_name' => 'required|string|max:255',
            'pec_address' => 'required|string|max:255',
            'pec_status' => 'required|in:active,inactive',
            'pec_location' => 'required|in:Бохтар,Вахдат,Гиссар,Гулистон,Душанбе,Истаравшан,Истиклол,Исфара,Канибадам,Куляб,Левакант,Нурек,Пенджикент,Рогун,Турсунзаде,Худжанд,Хорог,',
        ];
    }
}
