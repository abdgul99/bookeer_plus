@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 -z-10 max-h-[1100px] hidden lg:block" src="{{ asset('assets/search_bg.png') }}"
        alt="">
    <div class="lg:h-[80vh] grid items-center max-w-5xl mt-16 mx-auto lg:mb-60 px-8">
        <div class="max-w-3xl mx-auto w-full">
            <p class="m-5 text-[#12px]">出版社と執筆者のマッチングサービスTOP ▶︎ 会員登録</p>
            <button class="w-full p-3  text-white bg-[#F58220]">新規BOOKEER 登録</button>
            <p class="text-center text-sm space-x-2 my-3"><span>登録情報</span><span class="text-[#F58220]">を入力してください。</span>
            </p>

            <form action="" class="my-5 space-y-5">
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base" class="text-[13px] lg:text-base">お名前</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">ふりがな</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">メールアドレス</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">パスワード</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">年齢</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">性別</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <p class="text-center">利用規約とプライバシーポリシーに同意したうえで送信する</p>
                <div class="grid justify-center">
                    <button class="p-3 bg-[#F58220] rounded px-5 text-white">BOOKEER 登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection
