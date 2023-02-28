<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <style>[x-cloak] { display: none !important; }</style>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{asset('build/assets/app-d572f0eb.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/filament-c00e5542.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{asset('build/assets/app-548baeb6.js')}}"></script>
    @livewireStyles
    @livewireScripts
    @stack('scripts')

    {{-- Installation Splide JS --}}
    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">
</head>

<body class="antialiased" onload="load()">
    <div class=" w-screen h-screen p-20 text-center flex justify-center items-center" id="L7">
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 100 100" overflow="visible" fill="#1c71d8"><defs>     <rect id="inline" x="15" y="40" width="10" height="20" rx="2" ry="2"></rect></defs> <use xlink:href="#inline" x="0"><animate attributeName="opacity" values="0;1;0" dur="1s" begin="0s" repeatCount="indefinite"></animate> <animateTransform attributeName="transform" type="translate" additive="sum" dur="1s" begin="0s" repeatCount="indefinite" from="0 0" to="10"></animateTransform>   </use><use xlink:href="#inline" x="20"><animate attributeName="opacity" values="0;1;0" dur="1s" begin="0.25s" repeatCount="indefinite"></animate> <animateTransform attributeName="transform" type="translate" additive="sum" dur="1s" begin="0.25s" repeatCount="indefinite" from="0 0" to="10"></animateTransform>   </use><use xlink:href="#inline" x="40"><animate attributeName="opacity" values="0;1;0" dur="1s" begin="0.5s" repeatCount="indefinite"></animate> <animateTransform attributeName="transform" type="translate" additive="sum" dur="1s" begin="0.5s" repeatCount="indefinite" from="0 0" to="10"></animateTransform>   </use><use xlink:href="#inline" x="60"><animate attributeName="opacity" values="0;1;0" dur="1s" begin="0.75s" repeatCount="indefinite"></animate> <animateTransform attributeName="transform" type="translate" additive="sum" dur="1s" begin="0.75s" repeatCount="indefinite" from="0 0" to="10"></animateTransform>   </use> </svg>
    </div>
    <div id="app">
        <x-nav></x-nav>
        <livewire:section.header />
        <livewire:section.s-about />
        <livewire:section.s-service />
        <livewire:section.s-real />
        <livewire:section.s-footer />
    </div>
@livewire('notifications')
<script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
<script>
    let loader = document.getElementById("L7");
    function load(){
        loader.style.display = "none";
    }
    // Splide JS configuration et initialisation
    var splide = new Splide( '.splide' );
    splide.mount(); 

    
</script>
</body>
</html>


