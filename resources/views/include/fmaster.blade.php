<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University| @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mynav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">
</head>
<body>
@include('include.navber')

@yield('fbody')

@include('include.footer')

