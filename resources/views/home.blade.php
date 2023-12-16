<!DOCTYPE html>
<html style=" scroll-behavior: smooth;" >
<head>
    <title>Hotel Booking</title>
    <style >
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        /* Header styles */
        /* Header styles */
        header {
            font-family: 'Montserrat', sans-serif;
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
nav{
    font-family: 'Montserrat', sans-serif;
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
    font-size: 17.5px;
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

.nav-icon {
    width: 30px; /* Adjust the width to your desired size */
    height: 30px; /* Maintain aspect ratio */
}

        /* Hero section styles */
        #hero {
            color: #fff;
            padding: 300px 0;
            text-align: center;
            position: relative;
            margin-top: 60px;
        }

        .hero-slider {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: #ededed;
    transition: opacity 0.5s;
    padding: 20px; /* Add padding */
    border: 1px solid #ccc; /* Add border */
    box-sizing: border-box; /* Include padding and border in the element's total width/height */
}

        .hero-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-slider.active {
            opacity: 1;
        }

    .hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 25%;
    max-width: 600px;
    padding: 20px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    border-radius: 10px;
    transition: transform 0.3s; /* Add transition effect for smooth animation */
}

.hero-content:hover {
    transform: translate(-50%, -50%) scale(1.1); /* Apply a scale transform on hover */
}


        .hero-content h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Featured hotels section styles */
        #featured-hotels {
            padding: 50px 0;
            text-align: center;
        }

        .hotel-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hotel-item {
            width: 300px;
            margin: 10px;
            padding: 20px;
            background-color: #ededed;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .hotel-item img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .hotel-item h3 {
            margin-top: 10px;
        }

        .hotel-item p {
            margin-top: 10px;
        }

     
        .hotel-item {
            transition: transform 0.3s;
        }

        .hotel-item:hover {
            transform: scale(1.1);
        }

        #explore {
    padding: 50px 0;
    text-align: center;
}

.box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.box {
    width: 300px;
    margin: 10px;
    padding: 20px;
    background-color: #ededed;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.box img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
}

.box-content h3 {
    margin-top: 10px;
}

.box-content p {
    margin-top: 10px;
}

.box:hover {
    transform: scale(1.1);
}


#gallery {
            padding: 50px 0;
            text-align: center;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery-item {
            width: 200px;
            margin: 10px;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            vertical-align: middle;
        }

        .gallery-item:hover {
            transform: scale(1.1);
        }

        /* Contact section styles */
        #contact {
            padding: 50px 0;
            text-align: center;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .form-control:focus {
            border-color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
        }

/* Testimonials section styles */
#testimonials {
    padding: 50px 0;
    text-align: center;
}

.testimonial-list {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.testimonial-item {
    width: 300px;
    margin: 20px;
    padding: 20px;
    background-color: #ededed;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.testimonial-item img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.testimonial-item p {
    margin: 10px 0;
}

.author {
    font-style: italic;
    font-size: 14px;
}



        /* Footer styles */
        footer {

            color: #fff;
  }
  
  .container {
    max-width: 85%;
    
  }
  
  .row {
    display: flex;
    justify-content: space-between;
  }
  

  .col-sm-12 {
    width: 100%;
    margin-bottom: 30px;
  }
  

  ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  ul li {
    margin-bottom: 10px;
    font-size: 16px;
  }
  
  .social-icons {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
  }
  
  .copy-right {
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    font-size: 14px;
  }
  
    </style>
</head>
<body  >
    <header>
    <div class="logo">
            <a href="#">
                <img src="/images/logo.png" alt="Logo">
            </a>
        </div>
        <nav>
       
            <ul>
                <li style="margin-top: 6px;" ><a href="#">Home</a></li>
                <li style="margin-top: 6px;"><a href="#rooms">Rooms</a></li>
                <li style="margin-top: 6px;"><a href="#gall">Gallery</a></li>
                <li style="margin-top: 6px;"><a href="#cont">Contact</a></li>   
                <li><a href="/next-page"><img src="/images/user2.png" alt="Icon" class="nav-icon"> </a></li>            
            </ul>
        </nav>
       
    </header>
<br>
    <section id="hero">
        <div class="hero-slider active">
            <img src="/images/back1.jpg" alt="Slider 1">
        </div>
        <div class="hero-slider">
            <img src="/images/back2.jpg" alt="Slider 2">
        </div>
        <div class="hero-slider">
            <img src="/images/back3.jpg" alt="Slider 3">
        </div>

        <div class="hero-content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
            <h1>Way To Your Dream Hotel</h1>
            <p style="font-style: italic;">Book your dream room at the best price</p>
            <a href="/login" class="btn btn-primary">Explore Now</a>
        </div>
    </section>
    <br  id="rooms">
    <section id="featured-hotels">
        <h2>Featured Rooms</h2>
        <div class="hotel-list">
            <div class="hotel-item">
                <img src="/images/h6.jpg" alt="Classic">
                <div class="item-content">
                    <h3>Classic</h3>
                    <p>Provides Great and Exclusive Services</p>
                    <a href="/next-page" class="btn btn-secondary">Book Now</a>
                </div>
            </div>
            
            <div class="hotel-item">
                <img src="/images/h3.jpg" alt="Deluxe">
                <h3>Deluxe</h3>
                <p>Offers Upgraded Amenities and Comfort</p>
                <a href="/next-page" class="btn btn-secondary">Book Now</a>
            </div>
            <div class="hotel-item">
                <img src="/images/h7.jpg" alt="Luxury">
                <h3>Luxury</h3>
                <p>High Features and Superior Experience</p>
                <a href="/next-page" class="btn btn-secondary">Book Now</a>
            </div>
        </div>
    </section>

    <section id="explore">
        <h2>Explore With Us</h2>
        <div class="box-container">
            <div class="box">
                <img src="/images/hill.jpg" alt="Place 1">
                <div class="box-content">
                    <h3>Hill Stations</h3>
                    <p>Gaze at the mist rolling in over the hill-tops from your luxurious villa. Marvel at glorious sunsets that will take your breath away from a private deck.</p>
                </div>
            </div>
            <div class="box">
                <img src="/images/beach.jpg" alt="Place 2">
                <div class="box-content">
                    <h3>Beach Retreats</h3>
                    <p>Wake up to the sound of waves lapping lazily at the shore. Uncover serenity and marvel at the wealth of beauty within the glittering blue seas. Give in to the siren song of the sun, sand and surf with Beach Retreats</p>
                </div>
            </div>
            <div class="box">
                <img src="/images/royal.jpg" alt="Place 3">
                <div class="box-content">
                    <h3>Royal India</h3>
                    <p>Wander through the storied halls of a fairy tale palace, where dreams come to life. Retreat into your majestic suite, inspired by elegance.</p>
                </div>
            </div>
            <div class="box" >
                <img src="/images/urban.jpg" alt="Place 4">
                <div class="box-content">
                    <h3>Urban Gateways</h3>
                    <p id="gall">There is magic to be found in the energy of a bustling city. Where vibrant markets offer you everything you could imagine and centuries of history hide in the most unassuming places. Discover the world’s most spectacular urban hubs.</p>
                </div> 
            </div>
        </div>
    </section >


    <section id="gallery">
        <!-- Gallery section -->
        <h2>Photo Gallery</h2>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="/images/h7.jpg" alt="Image 1">
            </div>
            <div class="gallery-item">
                <img src="/images/h2.jpg" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="/images/h9.jpg" alt="Image 3">
            </div>
            <div class="gallery-item">
                <img src="/images/h4.jpg" alt="Image 4">
            </div>
            <div class="gallery-item">
                <img src="/images/h6.jpg" alt="Image 5">
            </div>
            <div class="gallery-item" id="cont">
                <img src="/images/h11.jpg" alt="Image 6" >
            </div>
        </div>
    </section>

    <section id="contact">
        <!-- Contact section -->
        <h2>Contact Us</h2>
        <div class="contact-form">
            <form>
                <input type="text" class="form-control" placeholder="Your Name">
                <input type="email" class="form-control" placeholder="Your Email">
                <textarea class="form-control" placeholder="Your Message"></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>
    
    <section id="testimonials">
    <h2>What Our Guests Say</h2>
    <div class="testimonial-list">
        <div class="testimonial-item">
            <img src="/images/test1.jpg" alt="Profile Image">
            <p>"Amazing experience! The hotel staff was friendly and the room was clean and comfortable."</p>
            <p class="author">- Peter Griffin</p>
        </div>
        <div class="testimonial-item">
            <img src="/images/test2.jpg" alt="Profile Image">
            <p>"I had a fantastic stay. The amenities provided were top-notch, and the view from my room was breathtaking."</p>
            <p class="author">- Hermione Granger</p>
        </div>
    </div>
</section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        
        
        
        $(document).ready(function() {
            // Submit the contact form using AJAX
            $('#contact-form').submit(function(e) {
                e.preventDefault(); // Prevent form submission
                var form = $(this);
                var url = form.attr('action');
                var formData = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    success: function(response) {
                        // Handle success response, e.g., display a success message
                        alert('Your message has been sent successfully!');
                        form[0].reset(); // Clear form inputs
                    },
                    error: function(xhr, status, error) {
                        // Handle error response, e.g., display an error message
                        alert('Error occurred. Please try again later.');
                    }
                });
            });

            // Hero section image slider
            let currentSlide = 0;
            const $slides = $('.hero-slider');

            function showSlide(slideIndex) {
                $slides.removeClass('active');
                $slides.eq(slideIndex).addClass('active');
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % $slides.length;
                showSlide(currentSlide);
            }

            // Change slide every 5 seconds
            setInterval(nextSlide, 5000);
        });
    </script>




    
@if(session('success'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            button: "OK",
        });
    </script>
@endif

<footer style="background-color: #3b3b3d">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
        <br><br><br>
        <img src="/images/logo.png" height="120px" width="300px" >
        </div>
		    <br><br>
        <div class="col-md-4 col-sm-12">
        <br><br><br>
          <ul>
            <li>Mohanlal Sukhadia University</li>
            <li>Udaipur (313001)</li>
            <li>Email: azureheights@gmail.com</li>
            <li>Contact: +91 12345 54321</li>
          </ul>
        </div>
        <div class="footer-icons">
            <br>
            <a href="https://Facebook.com"><img src="/images/f.png" alt="Facebook" style="width:40px;height:40px;"></a>
            <a href="https://Twitter.com"><img src="/images/t.png" alt="Twitter" style="width:40px;height:40px;"></a>
            <a href="https://Instagram.com"><img src="/images/i.png" alt="Instagram" style="width:40px;height:40px;"></a>
            <a href="https://Linkedin.com"><img src="/images/l.png" alt="Linkedin" style="width:40px;height:40px;"></a>
        </div></div></div>
    <div class="copy-right" style="border: #ffff">
    <p>&copy; 2023 Azure Heigts. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>
