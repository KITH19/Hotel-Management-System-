<!-- edit-form.blade.php -->
<style>
.navbar {
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
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
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<nav class="navbar navbar-expand-md navbar-light">
<a href="/home">
  <span class="logo-name"><img src="/images/logo.png" height=50px width=80px alt="Your Logo" style="margin-right: 10px;"></span> </a>
   
    <a class="navbar-brand">Edit Profile</a>
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
<div class="container mt-4">
    <h2>Edit Profile</h2>
    <form action="{{ route('user.update') }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" readonly>
        </div>
        
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" value="{{ $user->city }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" value="{{ $user->dob ? ($user->dob instanceof \DateTime ? $user->dob->format('Y-m-d') : $user->dob) : '' }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" name="gender" value="{{ $user->gender }}" class="form-control">
        </div>
     
        
       
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
