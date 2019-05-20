<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
    public static function findUser(string $key)
    {
        return self::where([
            'key' => $key,
            'is_payed' => 1
        ])->first();
    }

    public static function findUserByEmailPass(string $email, string $pass)
    {
        return self::where([
            'email' => $email,
            'password' => $pass,
            'is_payed' => 1
        ])->first();
    }
}
