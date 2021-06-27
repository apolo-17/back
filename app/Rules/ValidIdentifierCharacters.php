<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidIdentifierCharacters implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $capital_letter =  preg_match_all('/([A-Z]{1})/', $value, $foo);
        $numeric = preg_match_all('/([0-9]{1})/', $value, $foo);

        if ($capital_letter == 1 && $numeric == 10) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El formato del identificador es incorrecto';
    }
}
