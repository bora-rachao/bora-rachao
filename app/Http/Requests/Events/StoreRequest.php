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
            'sport_id' => ['required', 'exists:sports,id_sport'],
            'title' => ['required', 'string', 'max:255', 'min:3'],
            'description' => ['nullable', 'string', 'max:1024'],
            'event_date' => ['required', 'date', 'after:' . now()->addHour()->toDateTimeString()],
            'min_age' => ['required', 'integer', 'min:14', 'max:100'],
            'max_players' => ['required', 'integer', 'min:2', 'max:30'],
            'visibility' => ['required', 'in:public,only_friends'],
            'zip_code' => ['required', 'string', 'digits:8'],
            'house_number' => ['required', 'string', 'max:10'],
        ];
    }
}
