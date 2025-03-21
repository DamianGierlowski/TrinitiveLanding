@include('cookie-consent::index')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trinirive</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased w-screen">
    <livewire:navigation />
    <livewire:hero-section />
    <livewire:about />
    <livewire:why-us />

{{--    <livewire:work />--}}
{{--    <livewire:testimonials />--}}
    <livewire:services />
    <livewire:footer />
    </body>
</html>
