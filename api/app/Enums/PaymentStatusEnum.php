<?php

namespace App\Enums;

enum PaymentStatusEnum: string 
{
    case PENDING = 'pending';
    case COMPLETED = 'completed';
    case FAILED = 'failed';
    case REFUNDED = 'refunded';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}