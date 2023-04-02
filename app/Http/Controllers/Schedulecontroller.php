<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class schedulecontroller extends Controller
{
    public function index(Schedule $schedule)
    {
        return view ('schedules/index')->with(['schedules' => $schedule->getByLimit()]);
    }
}
