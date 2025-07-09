<?php

namespace App\Enums;    

enum UserGenderEnum: string

{
    case MALE = 'male';
    case FEMALE = 'female';
    case OTHER = 'other';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}