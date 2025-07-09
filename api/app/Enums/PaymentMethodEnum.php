<?php

namespace App\Enums;    

enum PaymentMethodEnum: string
{
    case CREDIT_CARD = 'credit_card';
    case DEBIT_CARD = 'debit_card';
    case PAYPAL = 'paypal';
    case BANK_TRANSFER = 'bank_transfer';
    case CRYPTO = 'crypto';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}