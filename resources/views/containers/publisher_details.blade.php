@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-10 lg:top-0 -z-10 brightness-75" src="{{ asset('assets/chat_bg.png') }}" alt="">
    <div class="max-w-5xl mx-auto mt-40 bg-white mb-10">
        <p class="p-3 text-center border-b-4 border-[#F5821F]">GENTOSHA INC.</p>
        <div>
            <div class="flex items-center gap-5 p-10">
                <img class="w-full max-w-[100px] lg:max-w-[177px]" src="{{ asset('assets/gentosh.png') }}" alt="">
                <div class=" lg:p-5 space-y-3">
                    <p class="text-xs lg:text-lg">
                        Nice to meet you. We are 00 Publishing, located in Chuo-ku, Tokyo.
                        Our company celebrates its 50th anniversary this year.
                        We are a newcomer in the publishing industry, but we have a lot of experience in self-publishing!
                        Please feel free to contact us! Please click the button you are interested in!
                    </p>
                    <button class="w-full p-3 border-2 border-black hidden lg:block">Our specialty genres: Mystery,
                        Suspense,
                        Psycho-Thriller,
                        etc.</button>
                    <div class="lg:grid lg:grid-cols-2 mt-2 hidden">
                        <div
                            class=" border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#D9D9D9] flex justify-between items-center font-semibold">
                            <span>編集サポート</span><span class="bg-white p-1 px-6">有り</span>
                        </div>
                        <div
                            class="border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#FAA74A] flex justify-between items-center font-semibold">
                            <span>編集サポート</span><span class="bg-white p-1 px-6">有り</span>
                        </div>
                    </div>
                    <p class="lg:flex gap-5 hidden">
                        <span>︎Cost: from 500,000 yen</span>
                        <span>Circulation: from 100 copies</span>
                    </p>
                </div>

            </div>
            <button class="w-full p-3 border-y-2 border-black">Our specialty genres: Mystery, Suspense,
                Psycho-Thriller,
                etc.</button>
            <div class="grid gap-3 lg:grid-cols-2 mt-2 px-8">
                <div
                    class=" border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#D9D9D9] flex justify-between items-center font-semibold">
                    <span>編集サポート</span><span class="bg-white p-1 px-6">有り</span>
                </div>
                <div
                    class="border-l-8 border-black text-[10px] p-1 px-4 border-l-3 bg-[#FAA74A] flex justify-between items-center font-semibold">
                    <span>編集サポート</span><span class="bg-white p-1 px-6">有り</span>
                </div>
            </div>
            <p class="flex gap-5 px-10 my-2 text-xs">
                <span>︎Cost: from 500,000 yen</span>
                <span>Circulation: from 100 copies</span>
            </p>
            <div class="px-10">
                <div class="w-full text-[10px]">
                    <div class="border-b-2 border-black flex items-center">
                        <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">事業内容</h2>
                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                    </div>
                    <div class="border-b-2 border-black flex items-center">
                        <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">事業内容</h2>
                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                    </div>
                    <div class="border-b-2 border-black flex items-center">
                        <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">事業内容</h2>
                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                    </div>
                    <div class="border-b-2 border-black flex items-center">
                        <h2 class="max-w-[220px] font-semibold p-2 bg-gray-100">事業内容</h2>
                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                    </div>
                </div>
                <div class="flex gap-5 justify-between items-center border-b-2 border-black py-4 text-xs">
                    <div class="bg-gray-100">
                        <h2>History of the Company</h2>
                    </div>
                    <div>
                        <ul class="space-y-2 ">
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                            <li>March 25, 1994</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-2">
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                            <li>Entered the book business with 6 books, first printing of 335,000 copies.</li>
                        </ul>
                    </div>

                </div>
                <div class="w-full text-[10px]">
                    <div class="border-b-2 border-black flex items-center">
                        <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                        <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                    </div>
                </div>
                <div class="lg:flex items-center mt-5">
                    <a href="message_list" class="p-4 text-white bg-black w-full text-center">Send DM</a>
                    {{-- <button class="">Send DM</button> --}}
                    <button class="p-4 text-white bg-[#F5821F] w-full">Favorite Publishers</button>
                </div>
            </div>
        </div>
    </div>
@endsection
