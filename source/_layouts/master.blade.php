<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    @include('_partials.analytics')
</head>
<body class="min-w-screen min-h-screen text-white  relative">
<header class="absolute top-0 flex justify-between w-full p-10 pb-0 z-50">
    <div class="flex">
        <a href="/">
            <!-- logo -->
        </a>
    </div>
    @include('_partials.navigation')
</header>
<main class="w-4/5 lg:w-3/5 mx-auto @yield('offset') ">
    @yield('body')
</main>
@include('_partials.footer')
</body>
</html>
