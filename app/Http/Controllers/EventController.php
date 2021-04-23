<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){ // Shows all events
      return Event::All();
    }
  
    public function show($id){ // Show a specific event using id
      return Event::find($id);   
    }
  
    public function create(Request $request){
      $event = new Event(); 
      
      $event->created_by_user_id = $request->created_by_user_id;
      $event->title = $request->title;
      $event->location = $request->location;
      $event->start_time = $request->start_time;
      $event->end_time = $request->end_time;
      $event->repeating_id = $request->repeating_id;
      $event->type_id = $request->type_id;
      
      $event->save();
      return $event;
    }
  
  
  
  
}
