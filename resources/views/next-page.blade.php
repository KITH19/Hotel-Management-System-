<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .container {
      padding: 40px 0;
    }

    .profile-card {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .cover-photo img {
      width: 100%;
      height: 50vh; /* Adjust the height as needed */
      object-fit: cover;
    }

    .profile-info {
      display: flex;
      align-items: flex-start;
      margin-top: 20px;
    }

    .profile-image img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 20px;
    }

    .profile-details {
      flex-grow: 1;
    }

    .user-details p {
      margin-bottom: 10px;
    }

    /* Animation styles */
    .fade-in {
      animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    .slide-in-left {
      animation: slideInLeft 1s ease-in;
    }

    @keyframes slideInLeft {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
      
    }
    .nav-item form {
    display: inline-block;
}

.nav-item button[type="submit"] {
    background-color: #e74c3c; /* Red color */
    color: #ffffff; /* White text color */
    border: none;
    padding: 8px 8px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.nav-item button[type="submit"]:hover {
    background-color: #c0392b; /* Darker red color on hover */
}

/* Styling for the icon */
.nav-item button[type="submit"] i {
    margin-right: 8px;
}
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light">
  <a href="/home">
  <span class="logo-name"><img src="/images/logo.png" height=50px width=80px alt="Your Logo" style="margin-right: 10px;"></span> </a>
    <a class="navbar-brand">My Profile</a> 
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
       
        <li class="nav-item" style="margin-left:10px;">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">
            <i class="fas fa-sign-out-alt"></i>
        </button>
    </form>
</li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="profile-card fade-in">
      <div class="cover-photo">
        <img src="/images/back1.jpg" alt="Cover Photo">
      </div>
      <div class="profile-info">
        <div class="profile-image slide-in-left">
          <img src="/images/icon.png" alt="Profile Image">
        </div>
        <div class="profile-details">
          <h1>Welcome, {{ auth()->user()->name }}</h1>
        
          <div class="user-details">
            <div class="row">
              <div class="col-md-6">
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
              </div>
              <div class="col-md-6">
                <p><strong>Phone:</strong> {{ auth()->user()->mobile }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p><strong>City:</strong> {{auth()->user()->city }}</p>
              </div>
              <div class="col-md-6">
                <p><strong>Date of Birth:</strong> {{auth()->user()->dob }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p><strong>Gender:</strong> {{ auth()->user()->gender }}</p>
              </div>
              <!-- Add more details here if needed -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @if($errors->has('booking_error'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Error",
            text: 'Booking already exists',
            icon: "error",
            button: "OK",
        });
        </script>
        @endif
    </div>

  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
</body>

</html>