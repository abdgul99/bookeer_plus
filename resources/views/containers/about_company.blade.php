@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 -z-10 brightness-75" src="{{ asset('assets/company.png') }}" alt="">
    <div class="max-w-3xl mx-auto lg:mb-10 mt-28 bg-white p-4 lg:p-0  text-xs lg:text-base">
        <h2 class="text-[24px]  shadow text-center border-b-4 border-b-[#F58220] p-2">Company Profile</h2>
        <div>
            <ul class="text-[15px] p-7">
                <li class="flex items-center p-1 px-2 border-b-2 border-black "><span class="w-[200px] text-[F58220]">Company
                        Name</span><span>Uni-8
                        Corporation</span>
                </li>
                <li class="flex items-center p-1 px-2 border-b-2 border-black "><span class="w-[200px] text-[F58220]">Board
                        of
                        Directors</span><span>Uni-8
                        Corporation</span>
                </li>
                <li class="flex items-center p-1 px-2 border-b-2 border-black "><span
                        class="w-[200px] text-[F58220]">Establishment</span><span>Uni-8
                        Corporation</span>
                </li>
                <li class="flex items-center p-1 px-2 border-b-2 border-black "><span
                        class="w-[200px] text-[F58220]">Paid-in
                        Capital</span><span>1 million yen</span>
                </li>
                <li class="flex items-center p-1 px-2 border-b-2 border-black "><span
                        class="w-[200px] text-[F58220]">Business
                        Activities</span><span>Providing services using the Internet
                        ・Creator matching service
                        ・Digital chip service</span>
                </li>
                <li class="flex items-center p-1 px-2 border-b-2 border-black "><span
                        class="w-[200px] text-[F58220]">Location</span><span>Nihonbashi Mizuno Bldg. 7F, 1-11-12 Nihonbashi
                        Muromachi, Chuo-ku, Tokyo, Japan</span>
                </li>
                <img class="mx-auto my-7" src="{{ asset('assets/uni82.png') }}" alt="">
            </ul>
        </div>

    </div>
@endsection
