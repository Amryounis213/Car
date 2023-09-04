<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class CheckPostAttempts implements Rule
{
    public function passes($attribute, $value)
    {
        $user = User::find($value);

        if (!$user) {
            return false;
        }

        return $user->post_attempts > 0;
    }

    public function message()
    {
        return 'The user must have post attempts.';
    }
}
