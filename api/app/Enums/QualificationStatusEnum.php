<?php

namespace App\Enums;

enum QualificationStatusEnum: string

{
    case PASSED = 'passed';
    case FAILED = 'failed';
    case IN_REVIEW = 'in_review';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}