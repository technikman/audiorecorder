<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record\Timer;

class GuestController extends Controller
{
    public function index()
    {
        $timers = Timer::limit('10')->get();
//        var_dump($timers->first->start);
        return view('index', ['timers' => $timers]);
    }
}
