@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 -z-10 " src="{{ asset('assets/search_bg.png') }}" alt="">
    <div class="max-w-4xl mx-auto p-8 lg:p-0 bg-white lg:mt-20 mb-10">
        <div class="flex mt-12 p-3 bg-[#F5821F] text-white justify-evenly">
            <p>
                お気に入りの出版社 一覧
            </p>
            <p>
                000社
            </p>
            {{-- <button class="bg-white p-2 px-4 text-black text-sm float-right">
                Change conditions
            </button> --}}
        </div>

        <div>
            @if($publishers)
                @foreach($publishers as $publisher)
                    {{-- card start --}}
                    <div class="shadow mt-5">
                        <div class="border-2 border-l-black border-r-[#F5821F] border-b-[#F5821F] border-t-black">
                            <div class="flex flex-col lg:flex-row p-3 items-center ">
                                <div class="w-full lg:w-[28%] flex items-center mb-4">
                                    @php
                                        if($publisher->profile_photo_path != null)
                                            $img = asset('assets/profile/'.$publisher->profile_photo_path);
                                        else
                                            $img = asset('assets/girl.png');
                                    @endphp
                                    <img class="mx-auto" src="{{ $img }}" alt="">
                                    <p class="text-center p-2 lg:hidden text-xl">{{ $publisher->publisherDetail->company_name ?? '' }}</p>
                                </div>
                                <div class="w-full text-[10px]">
                                    <p class="text-center border-b-2 p-2 border-black hidden lg:block">{{ $publisher->publisherDetail->company_name ?? '' }}</p>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Description of Business</h2>
                                        <p class="p-2"> {{ $publisher->publisherDetail->business_activities ?? '' }}</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Capital</h2>
                                        <p class="p-2">{{ $publisher->publisherDetail->capital ?? '' }}</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Area</h2>
                                        <p class="p-2">{{ $publisher->area ?? '' }}</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">Established</h2>
                                        <p class="p-2">{{ $publisher->publisherDetail->establishment_date ?? '' }}</p>
                                    </div>

                                </div>
                            </div>
                            <a href="{{ route('publisher_profile', $publisher->id) }}"
                                class="ms-auto p-3 px-5 flex items-center justify-between  w-full lg:w-[244px] bg-[#D9D9D9] ">
                                <img src="{{ asset('assets/txt.png') }}" alt="">
                                <span>出版社詳細</span>
                                <img src="{{ asset('assets/forward.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    {{-- card end --}}
                @endforeach
            @else
                <p class="text-center mt-5">No publishers found</p>
            @endif
        </div>
    </div>
@endsection
