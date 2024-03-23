@extends('layouts.master')
@section('content')
    <style>
        .blackBgImg {
            background: url(../assets/hero_bg.png);
            width: 100%;
            height: 580px;
            background-repeat: no-repeat;
            position: absolute;
            background-size: 100% 100%;
            top: -199px;
            background-position: 50%;
            z-index: -1;
        }


        .bgGrayDiv {
            position: relative;
            top: 0px;
            z-index: 0;
        }

        /*
                                                            .bgOrangeImage {
                                                                background: url(assets/orange_bg.png);
                                                                width: 100%;
                                                                height: 890px;
                                                                background-repeat: no-repeat;
                                                                background-size: 100% 100%;
                                                                position: absolute;
                                                                top: -220px;
                                                                z-index: -1;
                                                            } */

        @media screen and (max-width: 767px) {
            .blackBgImg {
                height: 380px;
                top: -176px;
            }

            .bgOrangeImage {
                height: 380px;
                top: -130px;
            }
        }
    </style>
    <div class="blackBgImg"></div>
    <div class="lg:min-h-[220vh] mx-4">
        {{-- <img class="w-full absolute top-5 sm:top-0 lg:top-0 -z-10   2xl:h-[650px] object-cover"
            src="{{ asset('assets/chat_bg.png') }}" alt=""> --}}
        <div class="max-w-5xl mx-auto mt-40 bg-white mb-10 pb-5 ">
            <p class="p-3 text-center border-b-4 border-[#F5821F]">{{ $user->name ?? '' }}</p>
            <div>
                <div class="flex items-center gap-5 p-10">
                    @php
                        if ($user->profile_photo_path != null) {
                            $img = asset('assets/profile/' . $user->profile_photo_path);
                        } else {
                            $img = asset('assets/girl.png');
                        }
                    @endphp
                    <img class="w-full max-w-[100px] lg:max-w-[177px]" src="{{ $img }}" alt="">
                    <div class=" lg:p-5 space-y-3 w-full">
                        <p class="text-xs lg:text-lg">
                            {{ $user->comment ?? '' }}
                        </p>
                        @php
                            if (!empty($user->genres)) {
                                $genres = json_decode($user->genres);
                            } else {
                                $genres = [];
                            }
                            $genres = getUserGenres($genres);
                        @endphp
                        <button class="w-full p-3 border-2 border-black hidden lg:block">Our specialty genres:
                            @foreach ($genres as $name)
                                {{-- add comma  after name but not after last --}}
                                @if (!$loop->last)
                                    {{ $name }},
                                @else
                                    {{ $name }}
                                @endif
                            @endforeach
                        </button>
                        <div class="lg:grid lg:grid-cols-2 mt-2 hidden">
                            <div
                                class=" border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#D9D9D9] flex justify-between items-center font-semibold">
                                <span>編集サポート</span><span class="bg-white p-1 px-6">
                                    @if (isset($user->publisherDetail->editorial_support) && $user->publisherDetail->editorial_support == 1)
                                        有り
                                    @else
                                        無し
                                    @endif
                                </span>
                            </div>
                            <div
                                class="border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#FAA74A] flex justify-between items-center font-semibold">
                                <span>編集サポート</span><span class="bg-white p-1 px-6">
                                    @if (isset($user->publisherDetail->publication_support) && $user->publisherDetail->publication_support == 1)
                                        有り
                                    @else
                                        無し
                                    @endif
                                </span>
                            </div>
                        </div>
                        <p class="lg:flex gap-5 hidden">
                            <span>︎Cost: from {{ $user->publisherDetail->cost ?? '' }} yen</span>
                            <span>Circulation: from {{ $user->publisherDetail->circulation ?? '' }} copies</span>
                        </p>
                    </div>

                </div>
                <button class="w-full p-3 border-y-2 border-black">Our specialty genres:
                    @foreach ($genres as $name)
                        {{-- add comma  after name but not after last --}}
                        @if (!$loop->last)
                            {{ $name }},
                        @else
                            {{ $name }}
                        @endif
                    @endforeach
                </button>
                <div class="grid gap-3 lg:grid-cols-2 mt-2 px-8">
                    <div
                        class=" border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#D9D9D9] flex justify-between items-center font-semibold">
                        <span>編集サポート</span><span class="bg-white p-1 px-6">
                            @if (isset($user->publisherDetail->editorial_support) && $user->publisherDetail->editorial_support == 1)
                                有り
                            @else
                                無し
                            @endif
                        </span>
                    </div>
                    <div
                        class="border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#FAA74A] flex justify-between items-center font-semibold">
                        <span>編集サポート</span><span class="bg-white p-1 px-6">
                            @if (isset($user->publisherDetail->publication_support) && $user->publisherDetail->publication_support == 1)
                                有り
                            @else
                                無し
                            @endif
                        </span>
                    </div>
                </div>
                <p class="flex gap-5 px-10 my-2 text-xs">
                    <span>︎Cost: from {{ $user->publisherDetail->cost ?? '' }} yen</span>
                    <span>Circulation: from {{ $user->publisherDetail->circulation ?? '' }} copies</span>
                </p>
                <div class="px-10">
                    <div class="w-full text-[10px]">
                        <div class="border-b-2 border-black flex items-center">
                            <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">事業活動</h2>
                            <p class="p-2">
                                {{ $user->publisherDetail->business_activities ?? '' }}
                            </p>
                        </div>
                        <div class="border-b-2 border-black flex items-center">
                            <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">資本</h2>
                            <p class="p-2">
                                {{ $user->publisherDetail->capital ?? '' }}
                            </p>
                        </div>
                        <div class="border-b-2 border-black flex items-center">
                            <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">
                                エリア</h2>
                            <p class="p-2">
                                {{ $user->area ?? '' }}
                            </p>
                        </div>
                        <div class="border-b-2 border-black flex items-center">
                            <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">設立年月日</h2>
                            <p class="p-2">
                                {{ $user->publisherDetail->establishment_date ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-5 justify-between items-center border-b-2 border-black py-4 text-xs">
                        <div class="bg-gray-100">
                            <h2>History of the Company</h2>
                        </div>
                        {{-- nbr2ln --}}
                        @if (isset($user->publisherDetail->company_history))
                            {!! nl2br($user->publisherDetail->company_history) ?? '' !!}
                        @endif

                    </div>
                    <div class="w-full text-[10px]">
                        <div class="border-b-2 border-black flex items-center">
                            <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">代表 雑誌</h2>
                            <p class="p-2">
                                {{ $user->publisherDetail->representative_magazine ?? '' }}
                            </p>
                        </div>
                    </div>
                    <div class="lg:flex items-center mt-5">
                        <a href="{{ route('send_dm', ['id' => $user->id]) }}"
                            class="p-4 flex justify-between bg-black items-center text-white  w-full">Send
                            DM</a>
                        {{-- if current url have id --}}
                        @if (request()->route()->parameters['id'] && Auth::check() == true && Auth::user()->type == 'booker')
                            <a href="{{ route('favorite_unfavorite_publisher', ['id' => request()->route()->parameters['id']]) }}"
                                class="p-4 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b] w-full">
                                <span>Favorite Publishers</span>
                                {{-- show heart to right if entry in favorite table --}}
                                {{-- undefiend variable favorite_publishers --}}
                                @php
                                    $favorite_publishers = getFavoritePublishers();
                                @endphp
                                @if (in_array(request()->route()->parameters['id'], $favorite_publishers))
                                    <img class="w-5 inline" src="{{ asset('assets/vector.png') }}" alt="">
                                @endif
                            </a>
                        @endif
                        {{-- <a href="{{ route('favorite_unfavorite_publisher') }}" class="p-4 text-white bg-[#F5821F] w-full hover:bg-[#ff8e2b]">Favorite Publishers</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
