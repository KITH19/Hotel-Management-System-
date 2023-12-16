<!-- accepted-requests.blade.php -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/menuitem.css') }}">

@extends('dashboard')
@section('accept')

<style>
    .form-container {
        margin-bottom: 20px;
    }

    .booking-container {
        background-color: #f8f8f8;
        padding: 20px;
        margin-bottom: 20px;
    }

    .booking-container p {
        margin: 0;
        padding: 5px 0;
    }
</style>

<div class="form-container">
    <form action="{{ route('bookings.index') }}" method="GET">
        <label for="time-period">Select Time Period:</label>
        <select name="time_period" id="time-period" onchange="this.form.submit()">
            <option value="today" {{ $timePeriod === 'today' ? 'selected' : '' }}>Today</option>
            <option value="yesterday" {{ $timePeriod === 'yesterday' ? 'selected' : '' }}>Yesterday</option>
            <option value="week" {{ $timePeriod === 'week' ? 'selected' : '' }}>Week</option>
            <option value="month" {{ $timePeriod === 'month' ? 'selected' : '' }}>Month</option>
            <option value="all" {{ $timePeriod === 'all' ? 'selected' : '' }}>All</option>
        </select>
    </form>
</div>

@foreach ($acceptedBookings as $booking)
    <div class="booking-container">
                <p><strong>Name:</strong> {{ $booking->name }}</p>
                <p><strong>User ID:</strong> {{ $booking->user_id}}</p>
                <p><strong>Room_type:</strong> {{ $booking->room_type }}</p>
                <p><strong>Check In Date:</strong> {{ $booking->check_in_date }}</p>
                <p><strong>Check Out Date:</strong> {{ $booking->check_out_date }}</p>
                <p><strong>Status:</strong> {{ $booking->status }}</p>
    </div>
@endforeach
@endsection