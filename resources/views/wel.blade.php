<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("img/scl22s2.jpg");
           
           

        }
        .h1{
            text-align: center;
            margin-top: 50px;
            font-size: 40px;
            
        }
        
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>


            @endauth
            &nbsp; &nbsp; &nbsp;
            <a href="#" class="text-sm text-gray-700 dark:text-gray-500 underline">About</a>
        </div>
        
        @endif
        
    </div>

    <div class="container d1">
        <div class="row justify-content-center">
            <h1 class="h1 display-1">School Management System</h1>
        </div>
    </div>


</body>

</html>