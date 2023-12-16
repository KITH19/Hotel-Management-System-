@extends('dashboard')

@section('dis')
    <style>
        .booking-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .booking-table th, .booking-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .booking-table th {
            background-color: #f2f2f2;
        }

        .booking-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .booking-table tr:hover {
            background-color: #e0e0e0;
        }
    </style>

    <h1>Booking Display</h1>
    <table class="booking-table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Room Type</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->user_id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->room_type }}</td>
                    <td>{{ $booking->check_in_date }}</td>
                    <td>{{ $booking->check_out_date}}</td>
                    <td>{{ $booking->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
