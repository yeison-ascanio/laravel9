<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
    </meta>

    <title>{{ $title }}</title>

</head>

<body class="antialiased">
    <x-layouts.nav />
    @if ("session('stastus')")
    <div>
        {{ session("status") }}
    </div>
    @endif
    {{ $slot }}
</body>
</html>
