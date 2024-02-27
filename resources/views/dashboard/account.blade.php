@extends('layouts.dashboard_layout')

@section('content')
    <div class="max-w-xl mx-auto grid h-full items-center p-8 lg:p-0">
        <form action="{{ route('new_publisher') }}" method="POST" class="space-y-5 w-full lg:w-96 mx-auto">
            @csrf
            <h2 class="text-center font-semibold text-2xl">Add Publisher Account </h2>
            {{-- display error and success --}}
            @if (session('error'))
                <div class="text-red-500 text-center">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="text-green-500 text-center">
                    {{ session('success') }}
                </div>
            @endif
            <div class="my-5">
                <input type="text" placeholder="ID" name="sns"
                    class="border-0 border-b-2 text-lg w-full text-black focus:outline-none focus:ring-0 focus:border-b-black">
                <input type="password" placeholder="パスワード" name="password"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="会社名" name="company_name"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="担当者名" name="person_incharge"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="電話番号" name="phone_number"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="email" placeholder="メールアドレス" name="email"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="住所" name="area"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
                <input type="text" placeholder="備考" name="comment"
                    class="border-0 border-b-2 focus:outline-none focus:ring-0 focus:border-b-black text-lg w-full text-black">
            </div>
            <div class="grid justify-center">
                <button type="submit" class="font-semi-bold text-white p-2 px-6 rounded  bg-[#CA8EEE]">Add</button>
            </div>
        </form>
    </div>
@endsection
