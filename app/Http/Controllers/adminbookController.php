<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Approve;
use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class adminbookController extends Controller

{

    public function showForm()
    {
        $user = Auth::user();
        return view('adminbooking',compact('user'));
    }
    public function display()
    {
        $bookings = Booking::all(); // Retrieve all bookings from the database
        return view('book', compact('bookings'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'room_type' => 'required',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
        ]);
        
        $validatedData = $request->only(['user_id', 'name', 'room_type', 'check_in_date', 'check_out_date']);
        
        // Custom validation: Check if the user already has a booking
        $existingBooking = Booking::where('user_id', $validatedData['user_id'])->first();

        if ($existingBooking) {
            return redirect()->route('next.page')->withErrors(['booking_error' => 'You already have an existing booking.']);
        }

    
    
        $booking = Booking::create($validatedData);

        Session::flash('success', 'Booking has been successful!');

        // Redirect to the booking table display page
        return redirect('/next-page');
        // Perform any additional actions or return a response

    }
}