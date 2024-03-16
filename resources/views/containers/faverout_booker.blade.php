@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-10 lg:top-0 -z-10 brightness-75" src="{{ asset('assets/profile_bg.png') }}" alt="">
    <div class="px-4 min-h-[80vh] lg:min-h-[300vh]">
        <div class="max-w-3xl mt-40 mx-auto">
            <div class="flex font-bold text-xs lg:text-xl">
                <button class="p-4 w-full bg-[#F5821F] text-white">お気に入りの出版社</button>
                <button class="p-4 w-full bg-white ">あなたに注目している出版社</button>
            </div>
            <div class="w-full bg-[#F5821F] flex items-center justify-end mt-12">
                <div class="flex p-3 text-white items-center justify-between text-sm w-full lg:w-2/3">
                    <p>
                        お気に入りの出版社 一覧
                    </p>
                    <p class="text-2xl">
                        000社
                    </p>
                    <button class="bg-white p-2 px-4 text-black text-sm">
                        お気に入り
                    </button>
                </div>
            </div>

            <div>
                {{-- <img class="mx-auto py-8 w-80 lg:w-auto" src="{{ asset('assets/btn.png') }}" alt=""> --}}
                <div class="p-6 ">
                    @foreach ($favorite_publishers as $booker)
                        <div class="shadow mt-5 bg-white">
                            <div class="border-2 border-l-black border-r-[#F5821F] border-t-black">
                                <div class="flex flex-col lg:flex-row p-3 items-center ">
                                    <div class="w-full lg:w-[36%]  text-center">
                                        @php
                                            if ($booker->profile_photo_path != null) {
                                                $img = asset('assets/profile/' . $booker->profile_photo_path);
                                            } else {
                                                $img = asset('assets/girl.png');
                                            }
                                        @endphp
                                        <img class="mx-auto" src="{{ $img }}" alt="">
                                        <p class=" p-2 lg:hidden text-sm">{{ $booker->name }}</p>
                                    </div>
                                    <div class="w-full text-[10px]">
                                        @if ($booker->comment)
                                            <p class=" border-b-2 p-2 border-black hidden lg:block">
                                                {{ $booker->comment ?? '' }}
                                        @endif
                                        </p>
                                        <div class="border-b-2 border-black flex items-center">
                                            <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Age</h2>
                                            <p class="p-2">{{ $booker->age ?? '' }}</p>
                                        </div>
                                        <div class="border-b-2 border-black flex items-center">
                                            <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Gender</h2>
                                            <p class="p-2">{{ $booker->gender ?? '' }}</p>
                                        </div>
                                        <div class="border-b-2 border-black flex items-center">
                                            <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Business</h2>
                                            <p class="p-2">{{ $booker->occupation ?? '' }}</p>
                                        </div>
                                        <div class="border-b-2 border-black flex items-center">
                                            <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Area</h2>
                                            <p class="p-2">{{ $booker->area ?? '' }}</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="grid grid-cols-2 text-[9px] lg:text-[13px] ">
                                    <a href="{{ route('booker.details', $booker->id) }}"
                                        class="p-3 px-5  flex items-center justify-between border-b-2 w-full bg-[#D9D9D9]  hover:bg-[#eee5e5]">
                                        <img class="w-[15px] lg:w-[20px] " src="{{ asset('assets/txt.png') }}"
                                            alt="">
                                        <h3 class="">Go to BOOKEER details</h3>
                                        <img class="w-[5px]" src="{{ asset('assets/forward.png') }}" alt="">
                                    </a>
                                    <a href="{{ route('favorite_unfavorite_booker', $booker->id) }}"
                                        class="p-3  px-5 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b]">
                                        <span>Favorite BOOKEER</span>
                                        <img class="w-[15px] lg:w-[20px] " src="{{ asset('assets/vector.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
