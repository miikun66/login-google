<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel App') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/images/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('storage/images/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/images/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="Miikun" />
    <link rel="manifest" href="{{ asset('storage/images/site.webmanifest') }}" />
    <script src="https://kit.fontawesome.com/039284ea12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body oncontextmenu="return false"; class="bg-zinc-700 text-gray-900 select-none">

    <x-header />


    <div class="bg-zinc-700 md:mt-24 mt-16">
        {{ $slot }}
    </div>

    <x-footer />

</body>

</html>
