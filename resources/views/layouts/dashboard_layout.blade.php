{{-- <script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> --}}


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        <div class="lg:flex items-center gap-8">
            <div class="w-full lg:w-[20%] p-4 shadow-2xl rounded-r-2xl lg:h-[100vh]  border-r">
                <div class="grid justify-center text-center">
                    <img class="mx-auto max-w-[200px]" src="{{ asset('assets/logo.png') }}" alt="">
                    <p class=" text-[#CA8EEE] font-serif text-sm mt-3">admin pannel</p>
                </div>
                <ul class="lg:p-1 text-sm lg:space-y-4 lg:mt-5 lg:block flex items-center justify-between p-4">
                    <li class="hover:text-[#CA8EEE]"><a href="home">Dashboard</a></li>
                    <li class="hover:text-[#CA8EEE]"><a href="booker_user">Booker User</a></li>
                    <li class="hover:text-[#CA8EEE]"><a href="publisher_user">Publisher User</a></li>
                    <li class="hover:text-[#CA8EEE]"><a href="account">Account</a></li>
                    <li class="hover:text-[#CA8EEE]">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
            <div class="lg:w-[80%]">
                @yield('content')
            </div>
        </div>


    </div>
</body>

</html>
