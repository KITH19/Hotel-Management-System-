
<html>
<head>

@extends('dashboard')
@section('booking')
    <title>Booking Form</title>
    <style>
       
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            padding: 20px;
            width: 400px;
            max-width: 100%;
            box-sizing: border-box; /* Added */
            margin-left:30%;
        }

        .form-container {
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box; /* Added */
        }
        select{
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background-color: #FF4B2B;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #E63C1E;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form method="POST" action="{{ route('abooking') }}">
                @csrf
                <h1>BOOK A ROOM</h1>
                <!-- Add your form fields here -->
                <div class="form-group">
                    <label for="user_id">User ID:</label>
                    <input type="text" id="user_id" name="user_id"  >
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" >
                </div>
                    <label for="room_type">Room Type:</label>
                    <select id="room_type" name="room_type" required>
                        <option value="">Select Room Type</option>
                        <option value="Classic">Classic</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Luxury">Luxury</option>
                    </select>
                <div class="form-group">
                    <label for="check_in_date">Check In Date:</label>
                    <input type="date" id="check_in_date" name="check_in_date" required>
                </div>
                <div class="form-group">
                    <label for="check_out_date">Check Out Date:</label>
                    <input type="date" id="check_out_date" name="check_out_date"  required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>
@endsection