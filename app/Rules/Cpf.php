<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Cpf implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $cpf = preg_replace('/\D/', '', $value);

        if (strlen($cpf) !== 11) {
            $fail(__(
                'validation.cpf',
                ['attribute' => $attribute]
            ));
            return;
        }

        if (preg_match('/^(\\d)\\1{10}$/', $cpf)) {
            $fail(__(
                'validation.cpf',
                ['attribute' => $attribute]
            ));
            return;
        }

        for ($t = 9; $t < 11; $t++) {
            $sum = 0;
            for ($i = 0; $i < $t; $i++) {
                $sum += $cpf[$i] * (($t + 1) - $i);
            }
            $digit = ((10 * $sum) % 11) % 10;
            if ($cpf[$i] != $digit) {
                $fail(__(
                    'validation.cpf',
                    ['attribute' => __('validation.attributes.' . $attribute)]
                ));
                return;
            }
        }
    }
}
