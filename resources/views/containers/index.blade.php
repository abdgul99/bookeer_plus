@extends('layouts.master')
@section('content')
    <img class="absolute top-[760px] lg:top-[940px] -z-10 w-full" src="{{ asset('assets/orange_bg.png') }}" alt="">
    <img class="w-full absolute top-0 -z-10" src="{{ asset('assets/hero_bg.png') }}" alt="">
    <div class="max-w-4xl mx-auto  lg:mt-34 px-8">
        <div class="">
            @include('components/slider/slider')
        </div>
        <div class="mt-4 lg:mt-10">
            <div class="bg-[#F5821F] px-8 py-2 lg:p-8">
                <div class="p-1 lg:p-4 bg-white mx-auto max-w-[150px] lg:max-w-[583px] w-full rounded-md lg:rounded-2xl">
                    <button class="flex items-center px-4 w-full ">
                        <img class="w-4 lg:w-[36px]" src="{{ asset('assets/txt_black.png') }}" alt="">
                        <span class="text-[11px] lg:text-[24px] text-start flex-1 flex items-center justify-center">Find
                            a publisher</span>
                        </buton>
                </div>
            </div>
            <div class="p-8 bg-white shadow">
                <p
                    class="lg:max-w-[452px] w-full text-[11px] lg:text-[24px] mx-auto p-4 mb-5 text-center border-2 border-l-black border-t-black border-r-[#F5821F] border-b-[#F5821F]">
                    Recommended Publishers</p>
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-7 gap-y-10 items-center ">
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-1.png') }}" alt=""></div>
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-2.png') }}" alt=""></div>
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-3.png') }}" alt=""></div>
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-4.png') }}" alt=""></div>
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-5.png') }}" alt=""></div>
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-6.png') }}" alt=""></div>
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-7.png') }}" alt=""></div>
                    <div class="mx-auto"><img class="max-w-[90px] lg:max-w-[163px]"
                            src="{{ asset('assets/recommended-publishers/publisher-8.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto mt-14 lg:mt-40 px-8">
        <div>
            <img src="{{ asset('assets/slider.png') }}" alt="">
        </div>
        <div class="mt-10 lg:mt-32 bg-white p-4">
            <p class="text-center p-3 font-semibold">Questions about our services</p>
            <div id="accordion-flush" data-accordion="collapse"
                data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                        aria-controls="accordion-flush-body-1">
                        <span>Is there a fee for the service?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                            components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.
                        </p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                href="/docs/getting-started/introduction/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                            developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                        <span>Is there a fee for the service?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                            using
                            the Figma software so everything you see in the library has a design equivalent in our Figma
                            file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on
                            the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                        aria-controls="accordion-flush-body-3">
                        <span>Is there a fee for the service?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                            from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                            Another difference is that Flowbite relies on smaller and standalone components, whereas
                            Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                            Flowbite,
                            Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the
                            best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                            <li><a href="https://flowbite.com/pro/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
