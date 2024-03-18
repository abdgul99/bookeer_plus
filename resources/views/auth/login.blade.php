@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 h-[110vh] -z-10 max-h-[1100px] hidden lg:block"
        src="{{ asset('assets/search_bg.png') }}" alt="">

    <div class="lg:h-[80vh] grid items-center max-w-5xl mx-auto px-8">
        <div class="max-w-3xl mx-auto w-full">
            <p class="m-5 text-[12px]">出版社と執筆者のマッチングサービスTOP ▶︎ 会員登録</p>
            <button class="w-full p-3  text-white bg-[#F58220]">ログイン情報を入力してください。</button>
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
            <form action="{{ route('login') }}" class="my-5 space-y-5" method="POST">
                @csrf
                <div class="border-b-2 border-gray-300 lg:flex space-y-2 lg:space-y-0  ">
                    <div class="flex items-center gap-8 lg:justify-center font-semibold w-[290px] pr-2 ">
                        <label for="">ログイン
                            ID
                        </label>
                        <span class="text-[#F58220]">必須</span>
                    </div>
                    <input type="email" id="email" class="p-3 w-full border-2 border-gray-300 border-b-0"
                        name="email" required value="{{ old('email') }}">
                </div>
                <div class="border-b-2 border-gray-300 lg:flex space-y-2 lg:space-y-0 ">
                    <div class="flex items-center gap-8 lg:justify-center font-semibold w-[290px] pr-2 "><label
                            for="">ログインパスワード
                            </label><span class="text-[#F58220]">必須</span></div>
                    <input type="password" name="password" class="p-3 w-full border-2 border-gray-300 border-b-0"
                        id="password">
                </div>
                <div class="grid justify-center">
                    <button type="submit" class="p-3 bg-[#F58220] rounded px-5 text-white">ログイン</button>
                </div>
            </form>
        </div>
    </div>
@endsection
