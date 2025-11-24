<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Termwind\Components\Ul;



class DashboardController extends Controller
{

    public function index()
    {
        $user=User::find(auth()->id());
        
        return view('livewire/frontend/dashboardtodo',compact('user'));
    }
}
