<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'city' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'password' => 'required|min:6',
        ]);

        // Create a new user object
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->city = $request->city;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password); // Hash the password

        // Save the user record to the database
        $user->timestamps = false; // Disable automatic timestamp handling
        $user->save();

        return response()->json(['message' => 'Registration successful'], Response::HTTP_CREATED);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();
            return response()->json(['message' => 'Login successful', 'user' => $user], Response::HTTP_OK);
        } else {
            // Authentication failed
            return response()->json(['error' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function bookRoom(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'room_type' => 'required',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
        ]);

        // Custom validation: Check if the user already has a booking
        $existingBooking = Booking::where('user_id', $validatedData['user_id'])->first();

        if ($existingBooking) {
            return response()->json(['error' => 'You already have an existing booking.'], Response::HTTP_BAD_REQUEST);
        }

        $booking = Booking::create($validatedData);

        return response()->json(['message' => 'Booking has been successful!', 'booking' => $booking], Response::HTTP_CREATED);
    }

    public function getBookings()
    {
        $bookings = Booking::all();

        return response()->json(['bookings' => $bookings], Response::HTTP_OK);
    }

    // ...
}
