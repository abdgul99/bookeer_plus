<style>
    @media screen and (max-width: 1023px) and (min-width: 800px) {
        #navitems {
            background-color: white !important;
        }
    }
</style>
<div class="">
    <div class=" mt-10 lg:mt-0 hidden md:block w-full background " id="navitems">
        <nav class="grid justify-center md:block ">
            <div class="grid  md:grid-cols-3 max-w-5xl space-y-5 mx-auto items-center justify-between py-6">
                <div class="text-sm mx-auto font-semibold">出版社と執筆者のマッチングサービス</div>
                <div class="mx-auto "><a href="/"><img class="w-[285px]" src="{{ asset('assets/booker_logo.png') }}"
                            alt=""></a>
                </div>
                <div class="mx-auto">
                    <ul class="flex items-center gap-5">
                        <li class="hover:text-[F5821F] hover:cursor-pointer">
                            <a href="{{ route('faq') }}"><img class="w-[31px] mx-auto"
                                    src="{{ asset('assets/faq.png') }}" alt="">
                                <h4 class="text-[10px] text-center  mt-1" ss>Faq</h4>
                            </a>
                        </li>
                        @guest
                            <li class="hover:text-[F5821F] hover:cursor-pointer">
                                <a href="{{ route('register') }}"><img class="w-[31px] mx-auto"
                                        src="{{ asset('assets/nav_item_1.png') }}" alt="">
                                    <h4 class="text-[10px] text-center  mt-1" ss>Registers</h4>
                                </a>
                            </li>
                            <li class="hover:text-[F5821F] hover:cursor-pointer">
                                <a href="{{ route('login') }}"> <img class="w-[31px] mx-auto"
                                        src="{{ asset('assets/nav_item_4.png') }}" alt="">
                                    <h4 class="text-[10px] text-center mt-1">Login</h4>
                                </a>
                            </li>
                        @endguest
                        @auth
                            @if (Auth::user()->type == 'publisher')
                                <li class="hover:text-[F5821F] hover:cursor-pointer">
                                    <a href="{{ route('publisher_profile') }}"><img class="w-[31px] mx-auto"
                                            src="{{ asset('assets/nav_item_1.png') }}" alt="">
                                        <h4 class="text-[10px] text-center  mt-1" ss>Profile</h4>
                                    </a>
                                </li>
                            @endif
                            @if (Auth::user()->type == 'booker')
                                <li class="hover:text-[F5821F] hover:cursor-pointer">
                                    <a href="{{ route('booker_profile') }}"><img class="w-[31px] mx-auto"
                                            src="{{ asset('assets/nav_item_1.png') }}" alt="">
                                        <h4 class="text-[10px] text-center  mt-1" ss>Profile</h4>
                                    </a>
                                </li>
                            @endif


                            <li class="hover:text-[F5821F] hover:cursor-pointer">
                                <a href="{{ route('message_list') }}"> <img class="w-[31px] mx-auto"
                                        src="{{ asset('assets/nav_item_2.png') }}" alt="">
                                    <h4 class="text-[10px] text-center  mt-1" ss>Chat</h4>
                                </a>
                            </li>
                            {{-- auth user booker --}}
                            @if (Auth::user()->type == 'booker')
                                <li class="hover:text-[F5821F] hover:cursor-pointer">
                                    <a href="{{ route('faverout_publisher') }}"> <img class="w-[31px] mx-auto"
                                            src="{{ asset('assets/nav_item_3.png') }}" alt="">
                                        <h4 class="text-[10px] text-center mt-1" ss>Faverout</h4>
                                    </a>
                                </li>
                            @else
                                <li class="hover:text-[F5821F] hover:cursor-pointer">
                                    <a href="{{ route('faverout_booker') }}"> <img class="w-[31px] mx-auto"
                                            src="{{ asset('assets/nav_item_3.png') }}" alt="">
                                        <h4 class="text-[10px] text-center mt-1" ss>Faverout</h4>
                                    </a>
                                </li>
                            @endif
                            {{-- logout --}}
                            <li class="hover:text[F5821F] hover:cursor-pointer">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img class="w-[31px] mx-auto" src="{{ asset('assets/nav_item_4.png') }}"
                                        alt="">
                                    <h4 class="text-[10px] text-center mt-1">Logout</h4>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
            <p class="text-center font-semibold text-sm ">ようこそ ●●●●●●●さんマイページ</p>
        </nav>
        <!-- <img class="w-full absolute top-0 -z-10" src="{{ asset('assets/hero.png') }}" alt=""> -->
    </div>
</div>
<!-- mobile menu -->




<nav class="bg-white z-10 md:hidden border-gray-200 mobile_nav">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-[200px]" src="{{ asset('assets/logo1.png') }}" class="h-8" alt="Flowbite Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-white bg-orange-500 rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                        aria-current="page">Home</a>
                </li>
                @guest

                    <li>
                        <a href="{{ route('register') }}"
                            class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                            aria-current="page">Registers</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                            aria-current="page">Login</a>
                    </li>

                @endguest
                @auth
                    @if (Auth::user()->type == 'publisher')
                        <li>
                            <a href="{{ route('publisher_profile') }}"
                                class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                                aria-current="page">Profile</a>
                        </li>
                    @endif
                    @if (Auth::user()->type == 'booker')
                        <li>
                            <a href="{{ route('booker_profile') }}"
                                class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                                aria-current="page">Profile</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('message_list') }}"
                            class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                            aria-current="page">Chat</a>
                    </li>


                    {{-- auth user booker --}}
                    @if (Auth::user()->type == 'booker')
                        <li>
                            <a href="{{ route('faverout_publisher') }}"
                                class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                                aria-current="page">Favourit</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('faverout_booker') }}"
                                class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                                aria-current="page">Favourit</a>
                        </li>
                    @endif
                    {{-- logout --}}
                    <li class="hover:text[F5821F] hover:cursor-pointer">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block py-2 px-3  rounded md:bg-transparent md:text-orange-500 md:p-0 md:dark:text-orange-400"
                            aria-current="page">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </li>
                @endauth


            </ul>
        </div>
    </div>
</nav>
