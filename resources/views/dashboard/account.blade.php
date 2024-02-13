@extends('layouts.dashboard_layout')

@section('content')
    <div class="max-w-xl mx-auto grid h-full items-center p-8 lg:p-0">
        <form action="">
            <h2 class="text-center font-semibold text-2xl">Add Publisher Account </h2>
            <div class="my-5">
                <input type="text" placeholder="ID"
                    class="border-0 border-b-2 text-lg w-full text-black focus:outline-none focus:ring-0 focus:border-b-black">
                <input type="text" placeholder="パスワード"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="会社名"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="担当者名"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="電話番号"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="メールアドレス"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="住所"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="備考"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
            </div>
            <div class="grid justify-center">
                <button class=" font-semi-bold text-white p-2 px-6 rounded  bg-[#CA8EEE]">Add</button>
            </div>
        </form>
    </div>
@endsection
