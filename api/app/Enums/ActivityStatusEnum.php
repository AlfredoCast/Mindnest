<?php

namespace App\Enums;

enum ActivityStatusEnum: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case CLOSED = 'closed';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}