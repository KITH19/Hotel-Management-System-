

@extends('dashboard')
@section('reject')

<form action="{{ route('bookings.rejectedRequests') }}" method="GET">
    <select name="time_period" onchange="this.form.submit()" style="margin-bottom: 10px;">
        <option value="today" {{ $timePeriod === 'today' ? 'selected' : '' }}>Today</option>
        <option value="yesterday" {{ $timePeriod === 'yesterday' ? 'selected' : '' }}>Yesterday</option>
        <option value="week" {{ $timePeriod === 'week' ? 'selected' : '' }}>Week</option>
        <option value="month" {{ $timePeriod === 'month' ? 'selected' : '' }}>Month</option>
        <option value="all" {{ $timePeriod === 'all' ? 'selected' : '' }}>All</option>
    </select>
</form>

@foreach ($rejectedBookings as $booking)
    <div style="background-color: #f8f8f8; padding: 10px; margin-bottom: 10px;">
    <p><strong>User ID:</strong> {{ $booking->user_id}}</p>
                <p><strong>Name:</strong> {{ $booking->name }}</p>
                <p><strong>Room_type:</strong> {{ $booking->room_type }}</p>
                <p><strong>Check In Date:</strong> {{ $booking->check_in_date }}</p>
                <p><strong>Check Out Date:</strong> {{ $booking->check_out_date }}</p>
                <p><strong>Status:</strong> {{ $booking->status }}</p>
    </div>
@endforeach
@endsection