<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sport_id' => ['required', 'exists:sports,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1024'],
            'event_date' => ['required', 'datetime', 'after:now'],
            'min_age' => ['nullable', 'integer', 'min:14'],
            'max_players' => ['required', 'integer', 'min:2'],
            'status' => ['required', 'in:scheduled,cancelled,completed'],
            'zip_code' => ['required', 'string', 'digits:8'],
            'house_number' => ['required', 'string', 'max:10'],
        ];
    }
}
