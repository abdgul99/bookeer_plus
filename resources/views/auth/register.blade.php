@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 -z-10 max-h-[1100px] hidden lg:block" src="{{ asset('assets/search_bg.png') }}"
        alt="">
    <div class="lg:h-[80vh] grid items-center max-w-5xl mt-16  mx-auto lg:mb-[400px] px-8">
        <div class="max-w-3xl mx-auto w-full">
            <p class="m-5 text-[#12px]">出版社と執筆者のマッチングサービスTOP ▶︎ 会員登録</p>
            <button class="w-full p-3  text-white bg-[#F58220]">新規BOOKEER 登録</button>
            <p class="text-center text-sm space-x-2 my-3"><span>登録情報</span><span class="text-[#F58220]">を入力してください。</span>
            </p>
            {{-- display errors --}}
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg onclick="this.parentElement.remove()" class="fill-current h-6 w-6 text-red-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1 1 0 0 1-1.497 1.316l-3.351-3.85-3.351 3.85a1 1 0 1 1-1.497-1.316l3.85-4.427-3.85-4.427a1 1 0 0 1 1.497-1.316l3.351 3.85 3.351-3.85a1 1 0 0 1 1.497 1.316l-3.85 4.427 3.85 4.427z" />
                        </svg>
                    </span>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="my-5 space-y-5">
                @csrf
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base" class="text-[13px] lg:text-base">お名前</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" name="name" value="{{ old('name') }}" class="p-3 w-full border-2 border-gray-300 border-b-0" required>
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">ふりがな</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" name="furigana" id="furigana" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">メールアドレス</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="email" name="email" id="email" required class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">パスワード</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="password" name="password" id="password" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>

                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">パスワード</label>
                        <span class="text-[#F58220]">確認する 必須</span>
                    </div>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">年齢</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="text" name="age" id="age" class="p-3 w-full border-2 border-gray-300 border-b-0">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2">
                    <div class="flex items-center gap-2 font-semibold w-[250px] lg:justify-between px-2">
                        <label for="" class="text-[13px] lg:text-base">性別</label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <select class="p-3 w-full border-2 border-gray-300 border-b-0" name="gender">
                        <option value="">選択してください</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <p class="text-center">利用規約とプライバシーポリシーに同意したうえで送信する</p>
                <div class="grid justify-center">
                    <button type="submit" class="p-3 bg-[#F58220] rounded px-5 text-white">BOOKEER 登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection
