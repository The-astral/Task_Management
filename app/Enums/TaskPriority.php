<?php

namespace App\Enums;

enum Taskpriority:string
{
    case TODO = "todo";
    case IN_PROGRESS = "inprogress";
    case COMPLETED ="completed";
}