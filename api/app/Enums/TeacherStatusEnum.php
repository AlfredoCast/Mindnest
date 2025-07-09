<?php

namespace App\Enums;

enum TeacherStatusEnum: string{
    case CONTRACTED = 'contracted';
    case ON_LEAVE = 'on leave';
    case TERMINATED = 'terminated';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
};
