<?php

declare(strict_types=1);

namespace App\Enumerations;

enum Role: string
{
    case ADMIN = 'admin';
    case USER = 'user';
}