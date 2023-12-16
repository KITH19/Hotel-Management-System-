@extends('dashboard')
<!DOCTYPE html>
<html>
<head>
    @section('room')
    <title>Rooms</title>
    <style>

        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
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

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
        
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Room Number</th>
                <th>Room Type</th>
                <th>Floor</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->room_no }}</td>
                <td>{{ $room->room_type }}</td>
                <td>{{ $room->floor }}</td>
                <td>{{ $room->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>
