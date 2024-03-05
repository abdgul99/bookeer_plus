@extends('layouts.master')
@section('content')
    <img class="absolute top-[700px] lg:top-[940px] -z-10 w-full" src="{{ asset('assets/orange_bg.png') }}" alt="">
    <img class="w-full absolute top-5 lg:top-0 -z-10" src="{{ asset('assets/hero_bg.png') }}" alt="">
    <div class="max-w-4xl mx-auto  lg:mt-34 px-8">
        <div class="">
            @include('components/slider/slider')
        </div>
        <div class="mt-4 lg:mt-10">
            <div class="bg-[#F5821F] px-8 py-2 lg:p-8">
                <div
                    class="p-1 lg:p-4 hover:brightness-75 bg-white mx-auto max-w-[150px] lg:max-w-[583px] w-full rounded-md lg:rounded-2xl">
                    <button class="flex items-center px-4 w-full">
                        @if(Auth::check() && Auth::user()->type == 'booker')
                        <img class="w-4 lg:w-[36px]" src="{{ asset('assets/txt_black.png') }}" alt="">
                            <a href="search"
                                class="text-[11px] lg:text-[24px] text-start flex-1 flex items-center justify-center ">Find
                                a publisher</a>
                                @elseif(Auth::check() && Auth::user()->type == 'publisher')
                                <img class="w-4 lg:w-[36px]" src="{{ asset('assets/txt_black.png') }}" alt="">
                                    <a href="publisher_search"
                                        class="text-[11px] lg:text-[24px] text-start flex-1 flex items-center justify-center ">Find
                                        a booker</a>
                        @endif
                        @guest
                        <img class="w-4 lg:w-[36px]" src="{{ asset('assets/txt_black.png') }}" alt="">
                        <a href="search"
                            class="text-[11px] lg:text-[24px] text-start flex-1 flex items-center justify-center ">Find
                            a publisher</a>
                        @endguest
                        </button>
                </div>
            </div>
            <div class="p-8 bg-white shadow">
                @guest
                <p class="text-center p-3 font-semibold">Recommended Publishers</p>
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-7 gap-y-10 items-center ">
                    @foreach ($recommeded_publishers as $publisher)
                        <div class="mx-auto">
                            <a href="{{ url('publisher_profile/'.$publisher->id) }}">
                                @php
                                    if($publisher->profile_photo_path != null)
                                        $img = asset('assets/profile/'.$publisher->profile_photo_path);
                                    else
                                        $img = asset('assets/girl.png');
                                @endphp
                                <img class="max-w-[90px] lg:max-w-[163px]"
                                    src="{{$img }}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
                @endguest
                @if(Auth::check() && Auth::user()->type == 'booker')
                    <p class="text-center p-3 font-semibold">Recommended Publishers</p>
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-7 gap-y-10 items-center ">
                        @foreach ($recommeded_publishers as $publisher)
                            <div class="mx-auto">
                                <a href="{{ url('publisher_profile/'.$publisher->id) }}">
                                    @php
                                        if($publisher->profile_photo_path != null)
                                            $img = asset('assets/profile/'.$publisher->profile_photo_path);
                                        else
                                            $img = asset('assets/girl.png');
                                    @endphp
                                    <img class="max-w-[90px] lg:max-w-[163px]"
                                        src="{{$img }}" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(Auth::check() && Auth::user()->type == 'publisher')
                    <p
                        class="lg:max-w-[452px] w-full text-[11px] lg:text-[24px] mx-auto p-4 mb-5 text-center border-2 border-l-black border-t-black border-r-[#F5821F] border-b-[#F5821F]">
                        Recommended Booker</p>
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-7 gap-y-10 items-center ">
                        @foreach ($recommeded_bookers as $booker)
                            <div class="mx-auto">
                                <a href="{{ url('booker_details/'.$booker->id) }}">
                                    @php
                                        if ($booker->profile_photo_path == null) {
                                            $image = 'assets/girl.png';
                                        }else{
                                        $image = asset('assets/profile/'.$booker->profile_photo_path);

                                        }
                                    @endphp
                                    <img class="max-w-[90px] lg:max-w-[163px]"
                                        src="{{ $image }}" alt="">
                                </a>
                            </div>
                        @endforeach

                    </div>
                @endif
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
                @if(count($faqs) > 0)
                    @foreach ($faqs as $faq)
                        <h2 id="accordion-flush-heading-{{ $faq->id }}">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-{{ $faq->id }}" aria-expanded="false"
                                aria-controls="accordion-flush-body-{{ $faq->id }}">
                                <span>{{ $faq->question }}</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-{{ $faq->id }}" class="hidden" aria-labelledby="accordion-flush-heading-{{ $faq->id }}">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $faq->answer }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>

    </div>
@endsection
