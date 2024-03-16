@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-10 lg:top-0 -z-10 brightness-75" src="{{ asset('assets/hero_bg.png') }}" alt="">
    <div class="px-4">
        <div class="max-w-3xl mt-40 mx-auto min-w-[120vh]">
            <p
                class="border border-2 border-black border-b-[#F5821F] border-r-[#F5821F] w-full text-center font-semibold text-lg bg-white p-2">
                List Of Booker</p>
            <div class="flex justify-center">
                <img class="my-5 mx-auto" src="{{ asset('assets/btn.png') }}" alt="">
            </div>

            <div>
                {{-- <img class="mx-auto py-8 w-80 lg:w-auto" src="{{ asset('assets/btn.png') }}" alt=""> --}}
                <div class="p-6 ">
                    @if (isset($bookers) && count($bookers) > 0)
                        @foreach ($bookers as $key => $booker)
                            <div class="shadow mt-5 bg-white">
                                <div class="border-2 border-l-black border-r-[#F5821F] border-t-black">
                                    <div class="flex flex-col lg:flex-row p-3 items-center ">
                                        <div class="w-full lg:w-[36%] items-center mb-4">
                                            @php
                                                if ($booker->profile_photo_path != null) {
                                                    $img = asset('assets/profile/' . $booker->profile_photo_path);
                                                } else {
                                                    $img = asset('assets/girl.png');
                                                }
                                            @endphp
                                            <img class="mx-auto" src="{{ $img }}" alt="">
                                            <p class=" p-2 text-center text-sm">{{ $booker->name }}</p>
                                        </div>
                                        <div class="w-full text-[10px]">
                                            <p class=" border-b-2 p-2 border-black hidden lg:block">
                                                {{ $booker->comment ?? '' }}</p>
                                            <div class="border-b-2 border-black flex items-center">
                                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Age</h2>
                                                <p class="p-2">
                                                    {{ $booker->age ?? '' }}
                                                </p>
                                            </div>
                                            <div class="border-b-2 border-black flex items-center">
                                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Gender
                                                </h2>
                                                <p class="p-2">{{ $booker->gender ?? '' }}</p>
                                            </div>
                                            <div class="border-b-2 border-black flex items-center">
                                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Business
                                                </h2>
                                                <p class="p-2">{{ $booker->occupation ?? '' }}</p>
                                            </div>
                                            <div class="border-b-2 border-black flex items-center">
                                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Area</h2>
                                                <p class="p-2">{{ $booker->area ?? '' }}</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 text-[9px] ">
                                        <a href="{{ route('booker.details', $booker->id) }}"
                                            class="p-3 px-5  flex items-center justify-between border-b-2 w-full bg-[#D9D9D9]  hover:bg-[#eee5e5]">
                                            <img class="w-[16px]" src="{{ asset('assets/txt.png') }}" alt="">
                                            <p>Go to BOOKEER details</p>
                                            <img class="w-[6px]" src="{{ asset('assets/forward.png') }}" alt="">
                                        </a>
                                        <a href="{{ route('favorite_unfavorite_booker', $booker->id) }}"
                                            class="p-3  px-5 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b]">
                                            <p>Favorite BOOKEER</p>
                                            <img class="w-[16px]" src="{{ asset('assets/vector.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
