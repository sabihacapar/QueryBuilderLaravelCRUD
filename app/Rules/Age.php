<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Age implements Rule
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
        return $value<=18; //yaşın 18 den küçük yada eşit olması için
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '18 yaşından büyükler kayıt olamaz';
    }
}
