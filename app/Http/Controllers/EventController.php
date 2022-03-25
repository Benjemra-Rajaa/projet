<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function listEvent(Event $event) { // 
        $event = Event::all();
       return view('layouts.events')->with('events',$event);
    }
}
