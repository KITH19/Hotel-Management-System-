<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Booking;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function show(Request $request)
    {
       
        $booking = Booking::all();
        return view('booking-approve');
    }
    public function approve(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required',
            'room_type' => 'required',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date',
        ]);
    
        // Store the booking details
        Approve::create($validatedData);
    
        // Redirect or display a success message
        // ...
    }
}
