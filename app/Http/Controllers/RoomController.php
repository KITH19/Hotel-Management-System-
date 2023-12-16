<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // Assuming your room model is named Room

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // Retrieve all rooms from the database
        return view('rooms.index', compact('rooms'));
    }
}

