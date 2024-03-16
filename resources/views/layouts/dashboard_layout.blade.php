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
            <div class="w-full lg:w-[20%] p-4 shadow-2xl rounded-r-2xl lg:h-[100vh]  border-r hidden lg:block">
                <div class="grid justify-center text-center">
                    <img class="mx-auto max-w-[200px]" src="{{ asset('assets/logo.png') }}" alt="">
                    <p class=" text-[#CA8EEE] font-serif text-sm mt-3">admin pannel</p>
                </div>
                <ul class="lg:p-1 text-sm lg:space-y-4 lg:mt-5 lg:block flex items-center justify-between p-4">
                    <li class="hover:text-[#CA8EEE]"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="hover:text-[#CA8EEE]"><a href="{{ route('booker_user') }}">Booker User</a></li>
                    <li class="hover:text-[#CA8EEE]"><a href="{{ route('publisher_user') }}">Publisher User</a></li>
                    <li class="hover:text-[#CA8EEE]"><a href="{{ route('faqs') }}">Faqs</a></li>
                    <li class="hover:text-[#CA8EEE]"><a href="{{ route('account') }}">Account</a></li>
                    <li class="hover:text-[#CA8EEE]">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
            {{--  --}}


            <nav class="bg-white border-gray-200 dark:bg-gray-900 lg:hidden">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <div class="grid justify-center text-center">
                        <a href="/"><img class="mx-auto max-w-[100px]" src="{{ asset('assets/logo.png') }}"
                                alt=""></a>
                        {{-- <p class=" text-[#CA8EEE] font-serif text-sm mt-3">admin pannel</p> --}}
                    </div>
                    <button data-collapse-toggle="navbar-default" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul
                            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li class="hover:text-[#CA8EEE]"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="hover:text-[#CA8EEE]"><a href="{{ route('booker_user') }}">Booker User</a></li>
                            <li class="hover:text-[#CA8EEE]"><a href="{{ route('publisher_user') }}">Publisher User</a>
                            </li>
                            <li class="hover:text-[#CA8EEE]"><a href="{{ route('faqs') }}">Faqs</a></li>
                            <li class="hover:text-[#CA8EEE]"><a href="{{ route('account') }}">Account</a></li>
                            <li class="hover:text-[#CA8EEE]">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="lg:w-[80%]">
                @yield('content')
            </div>
        </div>


    </div>
</body>

</html>
