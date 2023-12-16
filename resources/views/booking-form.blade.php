
<html>
<head>
    <title>Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .navbar-brand {
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin:auto;
            background-color: #fff;
          
            padding: 30px;
            animation: fadeIn 1s ease-in;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="currentColor" height="1em" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M6 8l4 4 4-4H6z"/><path fill="none" d="M0 0h16v16H0z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            background-size: 12px 12px;
            padding-right: 30px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light">
<a href="/home">
  <span class="logo-name"><img src="/images/logo.png" height=50px width=80px alt="Your Logo" style="margin-right: 10px;"></span> </a>
   
    <a class="navbar-brand">Booking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/next-page">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/booking-form">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/edit">Edit</a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="container">
        <div class="form-container">
            <form method="POST" action="{{ route('booking') }}">
                @csrf
                <h2>Book a Room</h2>
                <!-- Add your form fields here -->
                <div class="form-group">
                    <label for="user_id">User ID:</label>
                    <input type="text" id="user_id" name="user_id" value="{{ $user->id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" readonly>
                </div>
                <div class="form-group">
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