<!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Required meta tags always come first -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Olympic</title>
            <link rel="icon" href="{{asset('img/fav.png')}}" type="image/x-icon"/>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-reboot.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-grid.css')}}">
            <!-- Main Styles CSS -->
            <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
        </head>

        <body>
            <div id="app">
                <vue-header></vue-header>