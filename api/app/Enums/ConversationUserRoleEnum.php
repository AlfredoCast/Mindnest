<?php

namespace App\Enums;

enum ConversationUserRoleEnum: string
{
    case ADMIN = 'admin';         
    case MODERATOR = 'moderator'; 
    case MEMBER = 'member';      
    case GUEST = 'guest';         

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}