<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NotEmptyOrNull implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the value is not null or empty
        return !is_null($value) && trim($value) !== '';
    }

    public function message()
    {
        return 'The :attribute field must not be empty.';
    }
}