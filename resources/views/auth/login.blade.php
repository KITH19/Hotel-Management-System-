
@extends('../nav')
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 50px;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .form-container:hover {
            opacity: 1;
            transform: translateY(0);
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-container input[type="text"]:focus,
        .form-container input[type="password"]:focus {
            border-color: #4CAF50;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            transition: transform 0.3s;
        }

        .form-container button:hover {
            background-color: black;
            transition: transform 0.3s;
        }

        .alert {
            background-color: #f44336;
            color: #ffffff;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .alert li {
            margin-bottom: 5px;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
    </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="form-container">
                        <form method="POST" action="{{ route('login') }}" id="login-form">
                            @csrf <!-- CSRF protection token -->

                            <div>
                                <label for="id">Username</label>
                                <input type="text" name="id" id="id" required>
                            </div>

                            <div>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary"><span>Login</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <div class="text-white mb-3 mb-md-0" >
                &copy; 2023 All rights reserved.
            </div>
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Animate the form container on page load
            $(".form-container").animate({ opacity: 1, translateY: 0 }, 500);

            // Animate the form submission
            $("#login-form").submit(function() {
                $(".form-container").fadeOut(500);
            });
        });
    </script>
</body>

</html>
