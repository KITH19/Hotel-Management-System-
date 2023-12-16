
@extends('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .login-container {
            background-color: #ffffff;
            margin-bottom:90px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 380px;
            text-align: center;
        }

        .login-container h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .login-input {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .login-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #0056b3;
        }
            .error-message {
            color: #ff0000;
            margin-top: 10px;
            }
        
            footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="{{ route('alogin') }}" method="post">
            @csrf <!-- Add CSRF token for Laravel -->
            <input class="login-input" type="text" name="id" placeholder="Username" required>
<input class="login-input" type="password" name="password" placeholder="Password" required>
            <button class="login-button" type="submit">Login</button>
        </form>
        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
    </div>

    <footer>
	<p>2023 All Rights Reserved
    
		</p>
</footer>
</body>
</html>