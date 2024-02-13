<div class="">
    <div class=" mt-10 lg:mt-0 hidden lg:block " id="navitems">
        <nav class="grid justify-center lg:block ">
            <div class="grid  lg:grid-cols-3 max-w-5xl space-y-5 mx-auto items-center justify-between py-6">
                <div class="text-sm mx-auto font-semibold">出版社と執筆者のマッチングサービス</div>
                <div class="mx-auto "><img class="w-[285px]" src="{{ asset('assets/booker_logo.png') }}" alt="">
                </div>
                <div class="mx-auto">
                    <ul class="flex items-center gap-5">
                        @if (auth())
                            <li class="hover:text-[F5821F] hover:cursor-pointer">
                                <a href="booker_profile"><img class="w-[31px] mx-auto"
                                        src="{{ asset('assets/nav_item_1.png') }}" alt="">
                                    <span class="text-[10px] text-center " ss>Profile</span></a>
                            </li>
                            <li class="hover:text-[F5821F] hover:cursor-pointer">
                                <a href="message_list"> <img class="w-[31px] mx-auto"
                                        src="{{ asset('assets/nav_item_2.png') }}" alt="">
                                    <span class="text-[10px] text-center " ss>Chat</span></a>
                            </li>
                            <li class="hover:text-[F5821F] hover:cursor-pointer">
                                <a href="faverout_publisher"> <img class="w-[31px] mx-auto"
                                        src="{{ asset('assets/nav_item_3.png') }}" alt="">
                                    <span class="text-[10px] text-center" ss>Faverout</span></a>
                            </li>
                            <li class="hover:text-[F5821F] hover:cursor-pointer">
                                <a href="{{ route('logout') }}"> <img class="w-[31px] mx-auto"
                                        src="{{ asset('assets/nav_item_4.png') }}" alt="">
                                    <span class="text-[10px] text-center" ss>Logout</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <p class="text-center font-semibold text-sm ">ようこそ ●●●●●●●さんマイページ</p>
        </nav>
        <!-- <img class="w-full absolute top-0 -z-10" src="{{ asset('assets/hero.png') }}" alt=""> -->
    </div>
</div>
<!-- mobile menu -->




<nav class="bg-white lg:hidden border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="w-[200px]" src="{{ asset('assets/logo1.png') }}" class="h-8" alt="Flowbite Logo" />
        </a>
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
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-white bg-orange-500 rounded md:bg-transparent md:text-orange-500 md:p-0 dark:text-white md:dark:text-orange-400"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="booker_profile"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Booker
                        Profile</a>
                </li>
                <li>
                    <a href="message_list"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">chat</a>
                </li>
                <li>
                    <a href="faverout_publisher"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">faverout
                        publisher</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
                </li>
                <li>
                    <a href="login"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                </li>
                <li>
                    <a href="rehister"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
