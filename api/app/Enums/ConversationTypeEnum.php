<?php

namespace App\Enums;    

enum ExamDifficultyLevelEnum: string

{
    case PRIVATE = 'private';
    case GROUP = 'group';
    case SUPPORT = 'support';
    case ANNOUNCEMENT = 'announcement';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}