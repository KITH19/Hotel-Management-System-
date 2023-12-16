@extends('dashboard')

<html>
<head>
@section('book')
    <title>Booking</title>
    
        
    <style>
         
     
       
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        thead th {
        }

        tbody tr:nth-child(even) {
           
        }
    </style>
</head>
<body>
   
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>User ID</th>
                <th>Room Type</th>
                <th>Check IN</th>
                <th>Check OUT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->user_id }}</td>
                <td>{{ $room->room_type }}</td>
                <td>{{ $room->check_in_date }}</td>
                <td>{{ $room->check_out_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>
