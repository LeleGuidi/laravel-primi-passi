<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @include('header.blade.php') --}}
    <header>
        <a href="{{ URL::route('home') }}">Home</a>
        <a href="{{ URL::route('service') }}">Service</a>
        <a href="{{ URL::route('contact') }}">Contact</a>
    </header> 
    <h1>
        CIAO LARAVEL
    </h1>
</body>
</html>
