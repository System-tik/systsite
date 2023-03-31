<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{asset('imgs/icon.png')}}">

    <style>
        [x-cloak] { display: none !important; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{asset('build/assets/app-d572f0eb.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/filament-c00e5542.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

    @livewireStyles
    @livewireScripts
    @stack('scripts')

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    {{-- Installation Splide JS --}}
    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">
</head>

<body class="antialiased" onload="load()"  x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
      x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{'b eh': darkMode === true}" >
    <div class=" w-screen h-screen p-20 text-center flex justify-center items-center absolute bg-white top-0" id="L7" style="z-index: 2000">
        <img src="{{ asset('imgs/SYSTEMATIK2.gif') }}" alt="" srcset="" class="w-96">
    </div>
    <div id="app" style="overflow-y: auto; scroll-behavior: smooth;">
        <x-nav></x-nav>
        @yield('app')


    </div>
    @livewire('notifications')
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
    <script>
        let loader = document.getElementById("L7");
        function load(){
            loader.style.display = "none";
        }
        // Splide JS configuration et initialisation
        var splide = new Splide( '#spHeader', {

        });
        splide.mount();




    </script>
    <button
        class="xc wf xf ie ld vg sr gh tr g sa ta _a"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
        :class="{ 'uc' : scrollTop }"
    >
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>

    <!-- ====== Back To Top End ===== -->

    <script>
        //  Pricing Table
        const setup = () => {
            return {
                isNavOpen: false,

                billPlan: 'monthly',

                plans: [
                    {
                        name: 'Starter',
                        price: {
                            monthly: 29,
                            annually: 29 * 12 - 199,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Growth Plan',
                        price: {
                            monthly: 59,
                            annually: 59 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                    {
                        name: 'Business',
                        price: {
                            monthly: 139,
                            annually: 139 * 12 - 100,
                        },
                        features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                    },
                ],
            };
        };
    </script>
    <script defer src="{{asset('bundle.js')}}"></script>
</body>
</html>


