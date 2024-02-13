@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 -z-10 " src="{{ asset('assets/search_bg.png') }}" alt="">
    <div class="max-w-4xl mx-auto bg-white mt-20 mb-10">
        <div class="flex mt-12 p-3 bg-[#F5821F] text-white justify-evenly">
            <p>
                お気に入りの出版社 一覧
            </p>
            <p>
                000社
            </p>
            <button class="bg-white p-2 px-4 text-black text-sm float-right">
                Change conditions
            </button>
        </div>

        <div>
            {{-- card start --}}
            <div class="shadow mt-5">
                <div class="border-2 border-l-black border-r-[#F5821F] border-b-[#F5821F] border-t-black">
                    <div class="flex flex-col lg:flex-row p-3 items-center ">
                        <div class="w-full lg:w-[28%] flex items-center mb-4">
                            <img class="mx-auto" src="{{ asset('assets/gentosha.png') }}" alt="">
                            <p class="text-center p-2 lg:hidden text-xl">株式会社　幻冬舎 (GENTOSHA INC.)</p>
                        </div>
                        <div class="w-full text-[10px]">
                            <p class="text-center border-b-2 p-2 border-black hidden lg:block">株式会社　幻冬舎 (GENTOSHA INC.)</p>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>

                        </div>
                    </div>
                    <button class="ms-auto p-3 px-5 flex items-center justify-between  w-full lg:w-[244px] bg-[#D9D9D9] ">
                        <img src="{{ asset('assets/txt.png') }}" alt="">
                        <span>出版社詳細</span>
                        <img src="{{ asset('assets/forward.png') }}" alt="">
                    </button>
                </div>
            </div>
            {{-- card end --}}

            {{-- card start --}}
            <div class="shadow mt-5">
                <div class="border-2 border-l-black border-r-[#F5821F] border-b-[#F5821F] border-t-black">
                    <div class="flex flex-col lg:flex-row p-3 items-center ">
                        <div class="w-full lg:w-[28%] flex items-center mb-4">
                            <img class="mx-auto" src="{{ asset('assets/gentosha.png') }}" alt="">
                            <p class="text-center p-2 lg:hidden text-xl">株式会社　幻冬舎 (GENTOSHA INC.)</p>
                        </div>
                        <div class="w-full text-[10px]">
                            <p class="text-center border-b-2 p-2 border-black hidden lg:block">株式会社　幻冬舎 (GENTOSHA INC.)</p>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>

                        </div>
                    </div>
                    <button class="ms-auto p-3 px-5 flex items-center justify-between  w-full lg:w-[244px] bg-[#D9D9D9] ">
                        <img src="{{ asset('assets/txt.png') }}" alt="">
                        <span>出版社詳細</span>
                        <img src="{{ asset('assets/forward.png') }}" alt="">
                    </button>
                </div>
            </div>
            {{-- card end --}}

            {{-- card start --}}
            <div class="shadow mt-5">
                <div class="border-2 border-l-black border-r-[#F5821F] border-b-[#F5821F] border-t-black">
                    <div class="flex flex-col lg:flex-row p-3 items-center ">
                        <div class="w-full lg:w-[28%] flex items-center mb-4">
                            <img class="mx-auto" src="{{ asset('assets/gentosha.png') }}" alt="">
                            <p class="text-center p-2 lg:hidden text-xl">株式会社　幻冬舎 (GENTOSHA INC.)</p>
                        </div>
                        <div class="w-full text-[10px]">
                            <p class="text-center border-b-2 p-2 border-black hidden lg:block">株式会社　幻冬舎 (GENTOSHA INC.)</p>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>
                            <div class="border-b-2 border-black flex items-center">
                                <h2 class="max-w-[220px] font-semibold p-2 bg-[#D9D9D9]">事業内容</h2>
                                <p class="p-2">書籍・雑誌の発行及び販売業務</p>
                            </div>

                        </div>
                    </div>
                    <button class="ms-auto p-3 px-5 flex items-center justify-between  w-full lg:w-[244px] bg-[#D9D9D9] ">
                        <img src="{{ asset('assets/txt.png') }}" alt="">
                        <span>出版社詳細</span>
                        <img src="{{ asset('assets/forward.png') }}" alt="">
                    </button>
                </div>
            </div>
            {{-- card end --}}
        </div>
    </div>
@endsection
