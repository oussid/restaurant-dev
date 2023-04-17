<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="{{asset('css/main.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        {{-- fontawesome --}}
        <script src="https://kit.fontawesome.com/ea7913d8a3.js" crossorigin="anonymous"></script>
        @livewireStyles
        <title>Restaurant</title>
    </head>
    <body>
        <div class="admin-container">
            <div class="admin-left-side">
                <x-admin-sidebar/>
            </div>
            <div class="admin-main-side">
                <div class="admin-main-side-nav">
                    <x-admin-nav/>
                </div>
                <div class="admin-main-side-body">
                    @yield('content')
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
