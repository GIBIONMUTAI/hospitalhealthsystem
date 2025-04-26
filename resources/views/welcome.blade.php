<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Health System</title>
    <style>
        body {
            font-family: Figtree, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: lightblue;
            color: #333;
        }

        .top-right {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        .top-right a {
            font-semibold;
            color: #555;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            margin-left: 10px;
        }

        .top-right a:hover {
            background-color:rgb(151, 187, 226);
            color: white;
            border-color:rgb(163, 202, 243);
        }

        .container {
            background-color: #f0f8ff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 3.0em;
            color: #007bff;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="top-right">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="container">
            <h1>Olenguruone Hospital Health System</h1>
            <P>Register to get started.</P>
        </div>
    </div>
</body>
</html>
