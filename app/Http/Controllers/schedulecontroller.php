<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\schedule;

class schedulecontroller extends Controller
{
    public function index(Schedule $schedule)
    {
        return $schedule->get();
    }
}
