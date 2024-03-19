@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-10 lg:top-0 -z-10" src="{{ asset('assets/profile_bg.png') }}" alt="">
    <div class="p-4 lg:p-0">
        <div
            class="max-w-5xl  mx-auto text-2xl font-semibold mt-20 lg:mt-40 bg-white lg:bg-gray-100 border relative p-6 lg:p-0 mb-40 min-h-[200px] ">
            <div class="max-w-sm grid items-center mx-auto text-center">
                <h2 class="border-b-2 border-white lg:border-black  pt-3"><span>BOOKER </span><span
                        class="text-[#F58220]">Profile</span></h2>
            </div>
            @if (Session::has('message'))
                {{ Session::get('message') }}
            @endif


            <div class="lg:flex">
                <div class="lg:w-[30%] p-6 ">
                    <div class="shadow-2xl w-[179px] lg:w-full mx-auto bg-white min-h-[220px]">
                        <div class="relative">
                            <label for=""
                                class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                    ">Icon</label>
                        </div>
                        @if ($user->profile_photo_path != null)
                            <img class="mx-auto pt-8" src="{{ asset('assets/profile/' . $user->profile_photo_path) }}"
                                alt="">
                        @elseif($user->gender == 'female' && $user->profile_photo_path == null)
                            <img class="mx-auto pt-8" src="{{ asset('assets/girl.png') }}">
                        @else
                            <img class="mx-auto pt-8" src="{{ asset('assets/nav_item_1.png') }}" alt="">
                        @endif
                    </div>

                    <div class="shadow-2xl mt-12 w-[179px] lg:w-full mx-auto bg-white  min-h-[220px]">
                        <div class="relative">
                            <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                            <label for=""
                                class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                    ">Name</label>
                        </div>
                        <p class="text-center font-bold text-xl my-5"> {{ $user->name ?? '' }}</p>

                    </div>
                    <div>

                    </div>
                </div>
                <div class="lg:w-[70%] px-8 ">
                    <div class="shadow-2xl mt-12 bg-white min-h-[220px]">
                        <div class="relative">
                            <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                            <label for=""
                                class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                    ">Comment</label>
                        </div>
                        <p class="text-center font-bold text-xl my-5"> {{ $user->comment ?? '' }}</p>

                    </div>


                    <div>
                        <div class="relative mt-8">
                            <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                            <div>
                                <label for=""
                                    class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                    ">Basic
                                    Information</label>
                            </div>
                            <div class="shadow-2xl  border p-4 bg-white">
                                <ul class=" text-[16px] mt-2">
                                    <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Age</span>
                                        <span>{{ $user->age ?? '' }}</span>
                                    </li>
                                    <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center">
                                        <span>Gender</span>
                                        <span>{{ $user->gender ?? '' }}</span>
                                    </li>
                                    <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Job</span>
                                        <span>{{ $user->job ?? '' }}</span>
                                    </li>
                                    <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center">
                                        <span>Location</span>
                                        <span>{{ $user->area ?? '' }}</span>
                                    </li>
                                    <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Blog</span>
                                        <span>{{ $user->website ?? '' }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="w-full lg:grid grid-cols-2">
                <a href="{{ route('send_dm', ['id' => request()->route()->parameters['id']]) }}"
                    class="w-full p-3 px-5 float-left mt-12 text-[18px] text-white flex items-center justify-between border-b-2 w-full bg-[#F5821F] lg:w-[482px] border-b-[F5821F] ">Send
                    Message</a>
                <a href="{{ route('favorite_unfavorite_booker', ['id' => request()->route()->parameters['id']]) }}"
                    class="p-3 px-5 lg:float-right lg:mt-12 text-[18px] text-dark flex items-center justify-between border-b-2 w-full bg-[#FFFFFF] lg:w-[482px] border-b-[F5821F]  w-full">
                    <img src="{{ asset('assets/txt.png') }}" alt="">
                    <span>Favorite</span>
                    @php
                        $favorite_publishers = getFavoritePublishers();
                    @endphp
                    @if (in_array(request()->route()->parameters['id'], $favorite_publishers))
                        <img class="w-5 inline" src="{{ asset('assets/vector.png') }}" style="background:black;">
                    @else
                        <img class="w-5 inline" src="">
                    @endif
                </a>
            </div>
        </div>
    </div>
@endsection
