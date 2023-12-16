<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashController extends Controller
{
    
public function showDashboard()
{
    $totalClassicRooms = DB::table('rooms')
    ->where('room_type', 'Classic')
    ->count();

    $totalDeluxeRooms = DB::table('rooms')
    ->where('room_type', 'Deluxe')
    ->count();

    $totalLuxuryRooms = DB::table('rooms')
    ->where('room_type', 'Luxury')
    ->count();
    $totalBookings = DB::table('bookings')->count();

    return view('dash', compact('totalClassicRooms','totalDeluxeRooms','totalLuxuryRooms', 'totalBookings'));
}


}
