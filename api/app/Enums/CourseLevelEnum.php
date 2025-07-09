<?php

namespace App\Enums;    

enum ExamDifficultyLevelEnum: string

{
    case BEGINNER = 'beginner';
    case INTERMEDIATE = 'intermediate';
    case ADVANCED = 'advanced';
    case EXPERT = 'expert';
    case ALL_LEVELS = 'all';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}