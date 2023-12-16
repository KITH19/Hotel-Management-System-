<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking</title>
    <style>
        /* Global styles */
       header {
           
    background-color: #3b3b3d;
    color: #fff;
    display: flex;
    justify-content: space-between; /* Update justify-content */
    align-items: center; /* Center vertically */
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    font-size: 19px;
  

}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 20px 0;
    display: flex;
    justify-content: flex-end;
}

nav ul li {
    margin-left: 20px;
    position: relative;
}

nav ul li:last-child {
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ffcd00;
}

.logo {
    margin-left: 1%; /* Push the logo to the left-most side */
}

.logo img {
    max-width: 110px; /* Adjust this value as needed */
    height: auto;
    max-height: 110px;
}
        </style>
</head>
<body>
<header>
    <div class="logo">
            <a href="/home">
                <img src="/images/logo.png" alt="Logo">
            </a>
        </div>
     
        </nav>
    </header>