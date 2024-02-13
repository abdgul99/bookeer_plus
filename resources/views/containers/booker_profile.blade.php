@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 -z-10" src="{{ asset('assets/profile_bg.png') }}" alt="">
    <div class="max-w-5xl  mx-auto text-2xl font-semibold mt-20 lg:mt-40 lg:bg-gray-100 border relative p-6 lg:p-0 mb-40 ">
        <div class="max-w-sm grid items-center mx-auto text-center">
            <h2 class="border-b-2 border-black"><span>BOOKER </span><span class="text-[#F58220]">Profile</span></h2>
        </div>

        <div class="lg:flex">
            <div class="lg:w-[30%] p-6 ">
                <div class="shadow-2xl w-[179px] lg:w-full mx-auto bg-white">
                    <div class="relative">
                        <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                        <label for=""
                            class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Icon</label>
                    </div>
                    <img class="mx-auto pt-8" src="{{ asset('assets/girl.png') }}" alt="">
                    <div class="flex justify-center mt-5 pb-6">
                        <button class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button>
                    </div>
                </div>

                <div class="shadow-2xl mt-12 w-[179px] lg:w-full mx-auto bg-white">
                    <div class="relative">
                        <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                        <label for=""
                            class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Name</label>
                    </div>
                    <p class="text-center font-bold text-xl my-5"> BOOKEER A</p>
                    <div class="flex justify-center mt-5 pb-6">
                        <button class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button>
                    </div>
                </div>
                <div>

                </div>
            </div>
            <div class="lg:w-[70%] px-8 ">
                <div class="shadow-2xl mt-12 bg-white">
                    <div class="relative">
                        <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                        <label for=""
                            class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Comment</label>
                    </div>
                    <p class="text-center  text-xl my-5">Nice to meet you. My name is 00 and I run a company of 20 people in
                        Tokyo.
                        To commemorate the 10th anniversary of my company, I would like to create a book that describes my
                        itinerary to date!</p>
                    <div class="flex justify-center mt-5 pb-6">
                        <button class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button>
                    </div>
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
                                    <span>35 years old</span> <span class="flex justify-end"><button
                                            class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 ">edit</button></span>
                                </li>
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Age</span>
                                    <span>35 years old</span> <span class="flex justify-end"><button
                                            class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 ">edit</button></span>
                                </li>
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Age</span>
                                    <span>35 years old</span> <span class="flex justify-end"><button
                                            class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 ">edit</button></span>
                                </li>
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Age</span>
                                    <span>35 years old</span> <span class="flex justify-end"><button
                                            class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 ">edit</button></span>
                                </li>
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Age</span>
                                    <span>35 years old</span> <span class="flex justify-end"><button
                                            class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 ">edit</button></span>
                                </li>
                                <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Age</span>
                                    <span>35 years old</span> <span class="flex justify-end"><button
                                            class="w-[120px] text-[13px] bg-[#D9D9D9] px-5 ">edit</button></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative mt-8">
                    <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                    <div>
                        <label for=""
                            class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Genre</label>
                    </div>
                    <div class="shadow-2xl  border p-4 bg-white">
                        <ul class=" text-[13px] mt-2 grid grid-cols-3 ">
                            <div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class="flex items-center gap-4">
                                    <input type="checkbox"><label for="">Novels</label>
                                </div>
                                <div class=" mt-5 pb-6">
                                    <button class="mx-auto  text-[13px] bg-[#D9D9D9] px-5 ">edit</button>
                                </div>

                            </div>
                        </ul>
                    </div>
                    <button
                        class="p-3 px-5 float-right mt-12 text-[18px] text-white flex items-center justify-between border-b-2 w-full bg-[#F5821F] lg:w-[482px] border-b-[F5821F] translate-x-8">
                        <img src="{{ asset('assets/txt.png') }}" alt="">
                        <span>Favorite Publishers</span>
                        <img src="{{ asset('assets/vector.png') }}" alt="">
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
