<?php

namespace App\Enums;

enum StudentStatusEnum: string
{
    case ENROLLED = 'enrolled';
    case GRADUATED = 'graduated';
    case BLOCKED = 'blocked';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}