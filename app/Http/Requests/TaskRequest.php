<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'status'      => 'nullable|in:pending,in_progress,completed',
            'priority'    => 'nullable|in:low,medium,high',
            'due_date'    => 'nullable|date',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Başlık zorunludur.',
            'title.max'      => 'Başlık en fazla 255 karakter olabilir.',
            'status.in'      => 'Geçersiz durum. (pending, in_progress, completed)',
            'priority.in'    => 'Geçersiz öncelik. (low, medium, high)',
            'due_date.date'  => 'Geçerli bir tarih giriniz.',
        ];
    }
}
