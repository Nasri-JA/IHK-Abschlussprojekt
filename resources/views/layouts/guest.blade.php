<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body style="
        background-image: url('{{ asset('img/frankfurt-skyline.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    ">
        <div class="h-100 d-flex justify-content-center align-items-center">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
