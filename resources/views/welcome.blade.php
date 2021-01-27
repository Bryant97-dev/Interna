<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#000000" />

    <title>Interna</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link
        rel="stylesheet"
        href="{{ url('assets/landing/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    @livewireStyles
</head>
<body class="text-gray-800 antialiased">
<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white" href="{{ url('/') }}">Interna</a>
            <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
            @if (Route::has('login'))
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    @auth
                        <li class="flex items-center">
                            <a href="{{ url('/dashboard') }}" class="bg-blue-600 text-white active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" style="transition: all 0.15s ease 0s;">
                                <i class="fa fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                    @else
                        @if (Route::has('register'))
                            <li class="flex items-center">
                                <a href="{{ route('register') }}" class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" style="transition: all 0.15s ease 0s;">
                                    <i class="fas fa-user-plus"></i> Register
                                </a>
                            </li>
                        @endif
                        <li class="flex items-center">
                            <a href="{{ route('login') }}" class="bg-green-600 text-white active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" style="transition: all 0.15s ease 0s;">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                    @endauth
                </ul>
            @endif
        </div>
    </div>
</nav>
<main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'>
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            Mudahkan Pencatatan Magangmu
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <section class="relative pt-20 pb-48">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Our Team Members</h2>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-4/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="{{ url('assets/landing/assets/img/bryant.jpg') }}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;"/>
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Bryant Lee Tjandra</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Web Developer | Project Leader
                            </p>
                            <div class="mt-6">
                                <button onclick="window.location.href='https://www.instagram.com/elidrich_lee_/'" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="{{ url('assets/landing/assets/img/frans.jpg') }}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;"/>
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Franciscus Valentinus Ongkosianbhadra</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Full Stack Developer | Google Certified
                            </p>
                            <div class="mt-6">
                                <button onclick="window.location.href='https://www.instagram.com/franciscusvalentinus/'" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 lg:w-4/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="{{ url('assets/landing/assets/img/vier.jpg') }}" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;"/>
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Javier</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Web Developer | Android Developer
                            </p>
                            <div class="mt-6">
                                <button onclick="window.location.href='https://www.instagram.com/vireoo_/'" class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="relative bg-gray-300 pt-8 pb-6">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-semibold">Mudahkan Pencatatan Magangmu !</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-700">Jika ada pertanyaan, hubungi <a href="mailto:fvalentinus@student.ciputra.ac.id">fvalentinus@student.ciputra.ac.id</a></h5>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto"></div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Links</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://informatika.uc.ac.id/" target="_blank">Informatika UC</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.uc.ac.id/" target="_blank">Universitas Ciputra</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Copyright © 2021 Interna
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</html>
