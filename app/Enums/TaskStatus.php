<?php

namespace App\Enums;

enum TaskStatus: string
{
    case HIGH = 'high';
    case LOW = 'low';
    case MEDIUM = 'medium';
}