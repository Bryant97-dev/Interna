<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#000000" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="{{ url('assets/dashboard/assets/img/apple-icon.png') }}"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
        />
        <link
            rel="stylesheet"
            href="{{ url('assets/dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
        />

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        @livewire('navigation-dropdown')
        <div class="relative md:ml-64 bg-white">
            <nav class="absolute top-0 left-0 w-full z-10 bg-indigo-600 md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
                    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold">{{ $header }}</a>
                    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                        <a class="text-gray-600 block" href="#" onclick="openDropdown(event,'user-dropdown')">
                            <div class="items-center flex">
                            <span class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full">
                                <img alt="{{ Auth::user()->name }}" class="w-full rounded-full align-middle border-none shadow-lg" src="{{ Auth::user()->profile_photo_url }}"/>
                            </span>
                            </div>
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="user-dropdown">
                            <a href="{{ route('profile.show') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" :active="request()->routeIs('profile.show')">Profile</a>
                            <div class="h-0 my-2 border border-solid border-gray-200"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </div>
                    </ul>
                </div>
            </nav>
            {{ $slot }}
        </div>

    @stack('modals')

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        charset="utf-8"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            var popper = new Popper(element, document.getElementById(dropdownID), {
                placement: "bottom-end"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }
    </script>

    @livewireScripts
    </body>
</html>
