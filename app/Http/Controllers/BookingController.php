<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Approve;
use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class BookingController extends Controller

{

    public function showForm()
    {
        $user = Auth::user();
        return view('booking-form',compact('user'));
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
  
    public function displayRequests()
    {
        $pendingBookings = Booking::where('status', 'pending')->get();

        return view('bookings', compact('pendingBookings'));
    }
  
   

    public function index(Request $request)
    {
        $timePeriod = $request->input('time_period', 'today');
        $acceptedBookings = $this->getFilteredAcceptedBookings($timePeriod);

        return view('accepted-requests', compact('acceptedBookings', 'timePeriod'));
    }

    private function getFilteredAcceptedBookings($timePeriod)
    {
        $now = Carbon::now();

        switch ($timePeriod) {
            case 'today':
                return Booking::where('status', 'accepted')
                    ->whereDate('created_at', $now->toDateString())
                    ->get();
            case 'yesterday':
                return Booking::where('status', 'accepted')
                    ->whereDate('created_at', $now->subDay()->toDateString())
                    ->get();
            case 'week':
                return Booking::where('status', 'accepted')
                    ->whereBetween('created_at', [$now->startOfWeek(), $now->endOfWeek()])
                    ->get();
            case 'month':
                return Booking::where('status', 'accepted')
                    ->whereYear('created_at', $now->year)
                    ->whereMonth('created_at', $now->month)
                    ->get();
            case 'all':
                return Booking::where('status', 'accepted')->get();
            default:
                return [];
        }
    }

    public function displayRejectedRequests(Request $request)
    {
        $timePeriod = $request->input('time_period', 'today');
        $rejectedBookings = $this->getFilteredRejectedBookings($timePeriod);

        return view('rejected-requests', compact('rejectedBookings', 'timePeriod'));
    }

    private function getFilteredRejectedBookings($timePeriod)
    {
        $now = Carbon::now();

        switch ($timePeriod) {
            case 'today':
                return Booking::where('status', 'rejected')
                    ->whereDate('created_at', $now->toDateString())
                    ->get();
            case 'yesterday':
                return Booking::where('status', 'rejected')
                    ->whereDate('created_at', $now->subDay()->toDateString())
                    ->get();
            case 'week':
                return Booking::where('status', 'rejected')
                    ->whereBetween('created_at', [$now->startOfWeek(), $now->endOfWeek()])
                    ->get();
            case 'month':
                return Booking::where('status', 'rejected')
                    ->whereYear('created_at', $now->year)
                    ->whereMonth('created_at', $now->month)
                    ->get();
            case 'all':
                return Booking::where('status', 'rejected')->get();
            default:
                return [];
        }
    }

    public function accept(Request $request, $id)
    {
        // Update the status of the booking to "accepted" and perform any other necessary actions
        $booking = Booking::findOrFail($id);
        $booking->status = 'accepted';
        $booking->save();
        session()->flash('success', 'Booking accepted');
        return redirect('/dash');
    }

    public function reject(Request $request, $id)
    {
        // Update the status of the booking to "rejected" and perform any other necessary actions
        $booking = Booking::findOrFail($id);
        $booking->status = 'rejected';
        $booking->save();

        session()->flash('success', 'Booking Rejected');

        // Redirect to the home page
        return redirect('/dash');
    }

    public function acceptedRequests()
{
    $acceptedBookings = Booking::where('status', 'accepted')->get();

    return view('accepted-requests', compact('acceptedBookings'));
}

public function rejectedRequests()
{
    $rejectedBookings = Booking::where('status', 'rejected')->get();

    return view('rejected-requests', compact('rejectedBookings'));
}
}

