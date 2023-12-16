
<!-- bookings.blade.php -->
@extends('dashboard')
<!DOCTYPE html>
<html>
<head>
    @section('req')
    <title>Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 10px;
            background-color: #fff;
          
            padding: 30px;
        }

        .booking {
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .booking p {
            margin: 0;
            font-size: 16px;
            line-height: 1.6;
        }

        .booking p strong {
            font-weight: 600;
        }

        .accept-btn,
        .reject-btn {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .accept-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
        }

        .reject-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }

        .accept-btn:hover,
        .reject-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
    @if ($pendingBookings->isEmpty())
            <p>No requests found</p>
        @else
        @foreach ($pendingBookings as $booking)
            <div class="booking">
                <p><strong>User ID:</strong> {{ $booking->user_id}}</p>
                <p><strong>Name:</strong> {{ $booking->name }}</p>
                <p><strong>Room Type:</strong> {{ $booking->room_type }}</p>
                <p><strong>Check In Date:</strong> {{ $booking->check_in_date }}</p>
                <p><strong>Check Out Date:</strong> {{ $booking->check_out_date }}</p>
                <p><strong>Status:</strong> {{ $booking->status }}</p>

                <form id="accept-form-{{ $booking->id }}" action="{{ route('bookings.accept', $booking->id) }}" method="POST" style="display: none;">
                    @csrf
                    <button type="submit" class="accept-btn">Accept</button>
                </form>

                <form id="reject-form-{{ $booking->id }}" action="{{ route('bookings.reject', $booking->id) }}" method="POST" style="display: none;">
                    @csrf
                    <button type="submit" class="reject-btn">Reject</button>
                </form>

                <button onclick="event.preventDefault(); acceptRequest({{ $booking->id }})" class="accept-btn">Accept</button>
                <button onclick="event.preventDefault(); rejectRequest({{ $booking->id }})" class="reject-btn">Reject</button>
            </div>
        @endforeach 
        @endif
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function acceptRequest(bookingId) {
            if (confirm("Are you sure you want to accept this request?")) {
                document.getElementById('accept-form-' + bookingId).submit();
                alert('Request Accepted Successfully');
            }
        }

        function rejectRequest(bookingId) {
            if (confirm("Are you sure you want to reject this request?")) {
                document.getElementById('reject-form-' + bookingId).submit();
                alert('Request Rejected Successfully');
            }
        }
    </script>
    @endsection
</body>
</html>