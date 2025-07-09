<?php

namespace App\Enums;

enum UserStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BANNED = 'banned';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
};