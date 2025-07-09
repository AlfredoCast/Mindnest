<?php

namespace App\Enums;

enum SendTaskStatusEnum: string 
{
    case PENDING = 'pending';
    case SUBMITTED = 'submitted';
    case GRADED = 'graded';
    case LATE = 'late';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}