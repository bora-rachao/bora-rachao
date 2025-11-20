<?php

namespace App\Http\Requests\Users\Profiles;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'username' => [
                'required',
                'string',
                Rule::unique('users', 'username')->ignore(Auth::id(), 'id_user'),
                'regex:/^[A-Za-z0-9._-]+$/',
                'max:70',
                'min:3',
            ],
            'city' => [
                'required',
                'string',
                Rule::in([
                    'jaú',
                    'bauru',
                    'barra bonita',
                    'itapuí',
                    'bocaina',
                    'mineiros do tiete',
                    'bariri',
                    'dois córregos',
                    'pederneiras',
                ])
            ],
            'bio' => [
                'nullable',
                'string',
                'max:250'
            ],
        ];
    }
}
