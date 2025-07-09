<?php

namespace App\Enums;

enum CommonStatusEnum: string
{

    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case ARCHIVED = 'archived';


    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}