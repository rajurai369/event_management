<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
{
    return Event::with('category')->get();
}

public function show($id)
{
    return Event::with(['category', 'attendees'])->findOrFail($id);
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required',
        'date' => 'required|date',
        'location' => 'required|string',
        'category_id' => 'required|exists:categories,id',
    ]);

    Event::create($request->all());
}

public function update(Request $request, Event $event)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required',
        'date' => 'required|date',
        'location' => 'required|string',
        'category_id' => 'required|exists:categories,id',
    ]);

    $event->update($request->all());
}

public function destroy(Event $event)
{
    $event->delete();
}

}
