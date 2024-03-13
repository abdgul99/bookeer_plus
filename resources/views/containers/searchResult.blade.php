@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-10 lg:top-0 -z-10 brightness-75" src="{{ asset('assets/profile_bg.png') }}" alt="">
    <div class="px-4">
        <div class="max-w-3xl mt-40 mx-auto">
            <p
                class="border border-2 border-black border-b-[#F5821F] border-r-[#F5821F] w-full text-center font-semibold text-lg bg-white p-2">
                List Of Booker</p>
            <div class="flex justify-center">
                <img class="my-5 mx-auto" src="{{ asset('assets/btn.png') }}" alt="">
            </div>

            <div>
                {{-- <img class="mx-auto py-8 w-80 lg:w-auto" src="{{ asset('assets/btn.png') }}" alt=""> --}}
                <div class="p-6 ">
                    {{--  --}}
                    <div class="shadow mt-5 bg-white">
                        <div class="border-2 border-l-black border-r-[#F5821F] border-t-black">
                            <div class="flex flex-col lg:flex-row p-3 items-center ">
                                <div class="w-full lg:w-[36%] flex items-center mb-4">
                                    <img class="mx-auto" src="{{ asset('assets/gentosha.png') }}" alt="">
                                    <p class=" p-2 lg:hidden text-sm">Nice to meet you. My name is 00 and I run a
                                        company of 20 people in Tokyo.
                                        To commemorate our company's 10th anniversary, I would like to write a book about
                                        our history.
                                        I would like to make a book about my company's history!</p>
                                </div>
                                <div class="w-full text-[10px]">
                                    <p class=" border-b-2 p-2 border-black hidden lg:block">Nice to meet you. My
                                        name is 00 and I run a company of 20 people in Tokyo.
                                        To commemorate our company's 10th anniversary, I would like to write a book about
                                        our history.
                                        I would like to make a book about my company's history!</p>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Age</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Gender</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Business</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Area</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-cols-2 text-sm ">
                                <button
                                    class="p-3 px-5  flex items-center justify-between border-b-2 w-full bg-[#D9D9D9]  hover:bg-[#eee5e5]">
                                    <img src="{{ asset('assets/txt.png') }}" alt="">
                                    <span>Go to BOOKEER details</span>
                                    <img src="{{ asset('assets/forward.png') }}" alt="">
                                </button>
                                <button class="p-3  px-5 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b]">
                                    <span>Favorite BOOKEER</span>
                                    <img src="{{ asset('assets/vector.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>

                    {{--  --}}
                    {{--  --}}
                    <div class="shadow mt-5 bg-white">
                        <div class="border-2 border-l-black border-r-[#F5821F] border-t-black">
                            <div class="flex flex-col lg:flex-row p-3 items-center ">
                                <div class="w-full lg:w-[36%] flex items-center mb-4">
                                    <img class="mx-auto" src="{{ asset('assets/gentosha.png') }}" alt="">
                                    <p class=" p-2 lg:hidden text-sm">Nice to meet you. My name is 00 and I run a
                                        company of 20 people in Tokyo.
                                        To commemorate our company's 10th anniversary, I would like to write a book about
                                        our history.
                                        I would like to make a book about my company's history!</p>
                                </div>
                                <div class="w-full text-[10px]">
                                    <p class=" border-b-2 p-2 border-black hidden lg:block">Nice to meet you. My
                                        name is 00 and I run a company of 20 people in Tokyo.
                                        To commemorate our company's 10th anniversary, I would like to write a book about
                                        our history.
                                        I would like to make a book about my company's history!</p>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Age</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Gender</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Business</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Area</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-cols-2 text-sm ">
                                <button
                                    class="p-3 px-5  flex items-center justify-between border-b-2 w-full bg-[#D9D9D9]  hover:bg-[#eee5e5]">
                                    <img src="{{ asset('assets/txt.png') }}" alt="">
                                    <span>Go to BOOKEER details</span>
                                    <img src="{{ asset('assets/forward.png') }}" alt="">
                                </button>
                                <button class="p-3  px-5 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b]">
                                    <span>Favorite BOOKEER</span>
                                    <img src="{{ asset('assets/vector.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>

                    {{--  --}}
                    {{--  --}}
                    <div class="shadow mt-5 bg-white">
                        <div class="border-2 border-l-black border-r-[#F5821F] border-t-black">
                            <div class="flex flex-col lg:flex-row p-3 items-center ">
                                <div class="w-full lg:w-[36%] flex items-center mb-4">
                                    <img class="mx-auto" src="{{ asset('assets/gentosha.png') }}" alt="">
                                    <p class=" p-2 lg:hidden text-sm">Nice to meet you. My name is 00 and I run a
                                        company of 20 people in Tokyo.
                                        To commemorate our company's 10th anniversary, I would like to write a book about
                                        our history.
                                        I would like to make a book about my company's history!</p>
                                </div>
                                <div class="w-full text-[10px]">
                                    <p class=" border-b-2 p-2 border-black hidden lg:block">Nice to meet you. My
                                        name is 00 and I run a company of 20 people in Tokyo.
                                        To commemorate our company's 10th anniversary, I would like to write a book about
                                        our history.
                                        I would like to make a book about my company's history!</p>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Age</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Gender</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Business</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>
                                    <div class="border-b-2 border-black flex items-center">
                                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9] w-[100px]">Area</h2>
                                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                                    </div>

                                </div>
                            </div>
                            <div class="grid grid-cols-2 text-sm ">
                                <button
                                    class="p-3 px-5  flex items-center justify-between border-b-2 w-full bg-[#D9D9D9]  hover:bg-[#eee5e5]">
                                    <img src="{{ asset('assets/txt.png') }}" alt="">
                                    <span>Go to BOOKEER details</span>
                                    <img src="{{ asset('assets/forward.png') }}" alt="">
                                </button>
                                <button
                                    class="p-3  px-5 flex justify-between bg-[#F5821F] items-center hover:bg-[#ff8e2b]">
                                    <span>Favorite BOOKEER</span>
                                    <img src="{{ asset('assets/vector.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>

                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
