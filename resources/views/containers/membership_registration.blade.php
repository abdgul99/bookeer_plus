@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 h-[110vh] -z-10 max-h-[1100px] hidden lg:block"
        src="{{ asset('assets/search_bg.png') }}" alt="">

    <div class="lg:h-[80vh] grid items-center max-w-5xl mx-auto px-8">
        <div class="max-w-3xl mx-auto w-full">
            <p class="m-5 text-[12px]">出版社と執筆者のマッチングサービスTOP ▶︎ 会員登録</p>
            <button class="w-full p-3  text-white bg-[#F58220]">ログイン情報を入力してください。</button>

            <form action="" class="my-5 space-y-5">
                <div class="border-b-2 border-gray-300 lg:flex space-y-2 lg:space-y-0  ">
                    <div class="flex items-center gap-6 lg:justify-center font-semibold w-[250px] gap-5"><label
                            for="">ログイン
                            ID</label><span class="text-[#F58220]">必須</span></div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2 lg:space-y-0 ">
                    <div class="flex items-center gap-6 lg:justify-center font-semibold w-[250px] gap-5"><label
                            for="">ログイン
                            ID</label><span class="text-[#F58220]">必須</span></div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="grid justify-center">
                    <button class="p-3 bg-[#F58220] rounded px-5 text-white">ログイン</button>
                </div>
            </form>
        </div>
    </div>
@endsection
