<?php

namespace App\Enums;

enum RegistrationStatusEnum: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case CANCELLED = 'cancelled';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}