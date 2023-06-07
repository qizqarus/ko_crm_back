<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePecRequest extends FormRequest
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
            'pec_name' => 'sometimes|required|string|max:255',
            'pec_address' => 'sometimes|required|string|max:255',
            'pec_status' => 'sometimes|required|in:active,inactive',
            'pec_location' => 'sometimes|required|in:Бохтар,Душанбе,Гиссар,Гулистон,Истаравшан,Истиклол,Исфара,Канибадам,Куляб,Левакант,Нурек,Пенджикент,Рогун,Турсунзаде,Худжанд,Хорог,Вахдат',
        ];
    }
}
