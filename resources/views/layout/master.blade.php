<!DOCTYPE html>
<html>
<head>
    <title>Chatwork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{URL::asset('image/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    @yield('styles')
</head>
<body>

@include('layout.header')

    @yield('content')

@include('layout.footer')

    <script src="{{ URL::asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@yield('scripts')
</body>

</html>
