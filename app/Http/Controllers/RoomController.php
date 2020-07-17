<?php

namespace App\Http\Controllers;

use App\Room;
use App\Category;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $categories = Category::all();

        return view('admin.room.index', compact('rooms', 'categories'));
    }

    public function store(Request $request)
    {
        $room = Room::create([
            'name' => $request->name,
            'link' => $request->link,
            'time' => $request->time,
        ]);

        $room->categories()->attach($request->categories);

        return back();
    }

    public function edit(Room $room)
    {
        $categories = Category::all();

        return view('admin.room.edit', compact('room', 'categories'));
    }

    public function update(Room $room, Request $request)
    {
        $room->update([
            'name' => $request->name,
            'link' => $request->link,
            'time' => $request->time,
        ]);

        $room->categories()->sync($request->categories);

        return back();
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return back();
    }
}
