@extends('layouts.master')
@section('content')
<img class="w-full absolute top-5 sm:top-0 lg:top-0 -z-10   2xl:h-[650px] object-cover"
    src="{{ asset('assets/hero.png') }}" alt="">
<div class="max-w-5xl  mx-auto text-2xl font-semibold mt-20 lg:mt-40 lg:bg-gray-100 border relative p-6 lg:p-0 mb-40 ">
    <div class="max-w-sm grid items-center mx-auto text-center">
        <h2 class="border-b-2 border-white lg:border-black text-white lg:text-black mt-2"><span>Publisher </span><span
                class="text-[#F58220]">Profile</span></h2>
    </div>

    <div class="lg:flex">
        <div class="lg:w-[30%] p-6 ">
            <div class="shadow-2xl w-[179px] lg:w-full mx-auto bg-white">
                <div class="relative">
                    <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                    <label for="" class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Icon</label>
                </div>
                <img class="mx-auto pt-8" src="{{ asset('assets/girl.png') }}" alt="">
                <div class="flex justify-center mt-5 pb-6">
                    <button class="mx-auto  text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75">edit</button>
                </div>
            </div>

            <div class="shadow-2xl mt-12 w-[179px] lg:w-full mx-auto bg-white">
                <div class="relative">
                    <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                    <label for="" class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Name</label>
                </div>
                <p class="text-center font-bold text-xl my-5"> BOOKEER A</p>
                <div class="flex justify-center mt-5 pb-6">
                    <button class="mx-auto  text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75">edit</button>
                </div>
            </div>
            <div>

            </div>
        </div>
        <div class="lg:w-[70%] px-8 ">
            <div class="shadow-2xl mt-12 bg-white">
                <div class="relative">
                    <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                    <label for="" class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Comment</label>
                </div>
                <p class="text-center  text-xl my-5">Nice to meet you. My name is 00 and I run a company of 20 people in
                    Tokyo.
                    To commemorate the 10th anniversary of my company, I would like to create a book that describes my
                    itinerary to date!</p>
                <div class="flex justify-center mt-5 pb-6">
                    <button class="mx-auto  text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75">edit</button>
                </div>
            </div>


            <div>
                <div class="relative mt-8 mb-3">
                    <!-- <img src="{{ asset('assets/rectangle.png') }}" alt=""> -->
                    <div>
                        <label for="" class="bg-black text-white py-2 ps-8 pe-12 text-sm [clip-path:polygon(0_0,75%_0,100%_100%,0%_100%)]
                        ">Basic
                            Information</label>
                    </div>
                    <div class="shadow-2xl  border p-4 bg-white">
                        <ul class=" text-[14px] mt-2">
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Genres</span>
                                <span>Mystery, Suspense, Psycho-Thriller, etc.</span> <span
                                    class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Editing
                                    support</span>
                                <span>YES</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Publication
                                    Support</span>
                                <span>YES</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>cost</span>
                                <span>From 500,000 yen</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center">
                                <span>circulation</span>
                                <span>100 copies or more</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>capital
                                    stock</span>
                                <span>100 million yen</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>capital
                                    stock</span>
                                <span>100 million yen</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>area</span>
                                <span>4-9-7 Sendagaya, Shibuya-ku, Tokyo 151-0051, Japan</span> <span
                                    class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center">
                                <span>Establishment</span>
                                <span>November 12, 1993</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center">
                                <span>representative</span>
                                <span>Toru Mishiro</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>History of the
                                    Company
                                </span>
                                <span>November 12, 1993
                                    Gentosha Inc. established with capital of 10 million yen (18-7 Sanei-cho,
                                    Shinjuku-ku, Tokyo)
                                    March 25, 1994
                                    Entered the book business with the first 335,000 copies of six books.
                                    April 10, 1997
                                    Entered the paperback book business with 62 paperbacks with a first printing of 3.5
                                    million copies
                                    October 2001
                                    Established Gentosha Comics Co.
                                    January 2003
                                    Registered with the Japan Securities Dealers Association (currently Osaka Securities
                                    Exchange).
                                    September 2004
                                    Established Gentosha Renaissance Co.
                                    June 2005
                                    Launched "Papyrus," a culture magazine.
                                    June 2005
                                    Established Gentosha Media Consulting Co.
                                    February 2006
                                    Launched men's lifestyle magazine "Goethe
                                    November 2006
                                    Entered the new book field with 17 new books and a first printing of 380,000 copies
                                    July 2008
                                    Started Gentosha Education Inc.
                                    March 2009
                                    Launched Ginger, a women's fashion magazine.
                                    March 2011
                                    Delisted from the Osaka Securities Exchange following the completion of MBO
                                    April 2012
                                    Established Gentosha Sogo Zaisan Consulting Inc.
                                    January 2015
                                    Gentosha Corporation merged with Gentosha Education Inc.</span> <span
                                    class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                            <li class="grid grid-cols-3 border-b-2 border-black p-1 items-center"><span>Representative
                                    magazines</span>
                                <span>Papyrus, Goethe, Ginger, etc.</span> <span class="flex justify-end"><button
                                        class="w-[120px] text-[11px] bg-[#D9D9D9] px-4 hover:brightness-75 ">edit</button></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection