<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    @livewireStyles
    <title>{{$title ?? ''}}</title>
</head>
<body>
    <x-navbar/>
    <div class="min-vh-100">
        {{$slot}}
    </div>
    @if (Request::routeIs('register')||Request::routeIs('login'))
    @else
    <x-footer/>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/2ff2af688a.js" crossorigin="anonymous"></script>

    {{-- swiper --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    @livewireScripts
</body>
</html>