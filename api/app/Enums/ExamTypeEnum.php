<?php

namespace App\Enums;    

enum ExamTypeEnum: string

{
    case QUIZ = 'quiz';
    case MIDTERM = 'midterm';
    case FINAL = 'final';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}