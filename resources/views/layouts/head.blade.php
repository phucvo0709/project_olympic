<!DOCTYPE html>
    <html lang="en">
            <head>
                <!-- Required meta tags always come first -->
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <link rel="icon" href="{{asset('img/fav.png')}}" type="image/x-icon"/>
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-reboot.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap.css')}}">
                <link rel="stylesheet" type="text/css" href="{{asset('Bootstrap/dist/css/bootstrap-grid.css')}}">
                <!-- Main Styles CSS -->
                <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
                <!-- Main Font -->
                <script>
                    WebFont.load({
                        google: {
                            families: ['Roboto:300,400,500,700:latin']
                        }
                    });
                </script>
                <div id="app">
                    <vue-head></vue-head>
            </head>
