<?php

namespace App\Http\Requests\Auth\Register;

use App\Rules\Cpf;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

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
            'name' => [
                'required',
                'string',
                'between:5,255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                Password::default(),
                'confirmed',
            ],
            'document' => [
                'required',
                'string',
                new Cpf(),
                'unique:users,document'
            ],
            'date_of_birth' => [
                'required',
                'date',
                'before:' . now()->subYears(14)->toDateString(),
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
            'gender' => [
                'required',
                'string',
                'in:male,female,other',
            ],
        ];
    }
}
