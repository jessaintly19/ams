<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view ('events.index')->with('events', $events);
    }
    
    public function create()
    {
        return view('events.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Event::create($input);
        return redirect('faculty/event')->with('flash_message', 'Class Subject Addedd!');  
    }
    
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('events', $event);
    }
    
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit')->with('events', $event);
    }
  
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $input = $request->all();
        $event->update($input);
        return redirect('faculty/event')->with('flash_message', 'Class Subject Updated!');  
    }
  
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('faculty/event')->with('flash_message', 'Class Subject deleted!');  
    }
}
