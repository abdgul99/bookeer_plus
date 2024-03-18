@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-10 lg:top-0 -z-10 brightness-75" src="{{ asset('assets/hero_bg.png') }}" alt="">
    <div class="px-4 min-h-[200vh]">
        <div class="max-w-3xl mt-40 mx-auto ">
            <div class="flex font-bold text-xs lg:text-xl">
                <button class="p-4 w-full bg-[#F5821F] text-white" onclick="recive()">お気に入りの出版社</button>
                <button class="p-4 w-full bg-white " onclick="send_f()">あなたに注目している出版社 </button>
            </div>
            <div class="" id="recive_content">
                <div class="w-full bg-[#F5821F] flex items-center justify-end mt-12">
                    <div class="flex p-3 text-white items-center justify-between text-sm w-full lg:w-2/3">
                        <p>
                            お気に入りの出版社 一覧
                        </p>
                        <p class="text-2xl">
                            000社
                        </p>
                        <button class="bg-white p-2 px-4 text-black text-sm">
                            お気に入り
                        </button>
                    </div>
                </div>

                <div class="bg-white">
                    <img class="mx-auto py-8 w-80 lg:w-auto" src="{{ asset('assets/btn.png') }}" alt="">
                    <div class="p-6">
                        @foreach ($favorite_publishers as $favorite_publisher)
                            @include('components/faverout_publisher_card')
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="hidden bg-white" id="send_content">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum amet obcaecati veniam autem earum ex sed
                exercitationem dignissimos, molestias est tempora eveniet quidem, reprehenderit voluptatem in magni sapiente
                repudiandae alias?
                <div class="" id="recive_content">
                    <div class="w-full bg-[#F5821F] flex items-center justify-end mt-12">
                        <div class="flex p-3 text-white items-center justify-between text-sm w-full lg:w-2/3">
                            <p>
                                お気に入りの出版社 一覧
                            </p>
                            <p class="text-2xl">
                                000社
                            </p>
                            <button class="bg-white p-2 px-4 text-black text-sm">
                                お気に入り
                            </button>
                        </div>
                    </div>

                    <div class="bg-white">
                        <img class="mx-auto py-8 w-80 lg:w-auto" src="{{ asset('assets/btn.png') }}" alt="">
                        <div class="p-6">
                            @foreach ($favorite_publishers as $favorite_publisher)
                                @include('components/faverout_publisher_card')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function recive() {
        const recive_content = document.getElementById("recive_content");
        recive_content.classList.remove('hidden');
        const send_content = document.getElementById("send_content");
        send_content.classList.add('hidden');
    }

    function send_f() {
        const recive_content = document.getElementById("recive_content");
        recive_content.classList.add('hidden');
        const send_content = document.getElementById("send_content");
        send_content.classList.remove('hidden');
    }
</script>
