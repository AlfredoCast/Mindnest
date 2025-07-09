<?php

namespace App\Enums;

enum StudentStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case SUSPENDED = 'suspended';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}