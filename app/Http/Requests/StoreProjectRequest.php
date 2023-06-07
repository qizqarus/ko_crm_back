<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'team_photo' => 'required|image',
            'project_name' => 'required|string',
            'location' => 'required|string',
            'status' => 'required|string',
            'attachment' => 'nullable|array',
            'attachment.*' => 'file|mimes:docx,xlsx,pptx,pdf',
            'mentor' => 'nullable|string',
            'partner' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'problem_prerequisites' => 'required|string',
            'problem_description' => 'required|string',
            'solutions' => 'required|string',
            'innovation' => 'nullable|string',
            'equipment_cost' => 'nullable|numeric',
            'transportation_expenses' => 'nullable|numeric',
            'services_cost' => 'nullable|numeric',
            'rent_cost' => 'nullable|numeric',
            'raw_materials_cost' => 'nullable|numeric',
            'other_cost' => 'nullable|numeric',
            'resources' => 'nullable|string',
            'participants' => 'nullable|array',
            'participants.*' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'team_photo.required' => 'Фото команды обязательно для заполнения.',
            'team_photo.image' => 'Фото команды должно быть изображением.',
            'project_name.required' => 'Название проекта обязательно для заполнения.',
            'project_name.string' => 'Название проекта должно быть строкой.',
            'location.required' => 'Местоположение обязательно для заполнения.',
            'location.string' => 'Местоположение должно быть строкой.',
            'status.required' => 'Статус обязателен для заполнения.',
            'status.string' => 'Статус должен быть строкой.',
            'attachment.array' => 'Вложение должно быть массивом.',
            'attachment.*.file' => 'Каждое вложение должно быть файлом.',
            'attachment.*.mimes' => 'Формат вложения должен быть одним из следующих: docx, xlsx, pptx, pdf.',
            'start_date.required' => 'Дата начала обязательна для заполнения.',
            'start_date.date' => 'Дата начала должна быть датой.',
            'end_date.required' => 'Дата завершения обязательна для заполнения.',
            'end_date.date' => 'Дата завершения должна быть датой.',
            'end_date.after' => 'Дата завершения должна быть позже даты начала.',
            'problem_prerequisites.required' => 'Предпосылки проблемы обязательны для заполнения.',
            'problem_prerequisites.string' => 'Предпосылки проблемы должны быть строкой.',
            'problem_description.required' => 'Описание проблемы обязательно для заполнения.',
            'problem_description.string' => 'Описание проблемы должно быть строкой.',
            'solutions.required' => 'Решения обязательны для заполнения.',
            'solutions.string' => 'Решения должны быть строкой.',
            'innovation.string' => 'Инновация должна быть строкой.',
            'equipment_cost.numeric' => 'Стоимость оборудования должна быть числом.',
            'transportation_expenses.numeric' => 'Стоимость транспортных расходов должна быть числом.',
            'services_cost.numeric' => 'Стоимость услуг должна быть числом.',
            'rent_cost.numeric' => 'Стоимость аренды должна быть числом.',
            'raw_materials_cost.numeric' => 'Стоимость сырья должна быть числом.',
            'other_cost.numeric' => 'Стоимость прочих расходов должна быть числом.',
            'resources.string' => 'Ресурсы должны быть строкой.',
            'participants.array' => 'Участники должны быть массивом.',
            'participants.*.string' => 'Каждый участник проекта должен быть строкой.',
        ];
    }
}
