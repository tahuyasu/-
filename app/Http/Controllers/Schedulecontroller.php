<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(Schedule $schedule)
    {
        return view ('schedules/index')->with(['schedules' => $schedule->getByLimit()]);
    }
    
    public function show(Schedule $schedule)
    {
        return view('schedules/show')->with(['schedule' => $schedule]);
    }
    
    public function create()
    {
        return view('schedules/create');
    }
}
