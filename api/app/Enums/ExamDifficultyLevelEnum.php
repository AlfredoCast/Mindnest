<?php

namespace App\Enums;    

enum ExamDifficultyLevelEnum: string

{
    case EASY = 'easy';
    case MEDIUM = 'medium';
    case HARD = 'hard';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}