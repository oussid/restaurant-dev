<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        {{-- fontawesome --}}
        <script src="https://kit.fontawesome.com/ea7913d8a3.js" crossorigin="anonymous"></script>
        {{-- swiper  --}}
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        @livewireStyles
        <title>{{$config->name}}</title>
<style>
        :root {

            --primary:{{ $config->primary_color }};
            --secondary:{{ $config->secondary_color}};
            --secondary-hover:none;
        }
        </style>
    </head>
    <body>
        @yield('content')
        {{-- swiper --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="js/swiper.js"></script>
        @livewireScripts
    </body>
</html>
