@extends('layouts.master')
@section('content')
    <style>
        .blackBgImg {
            background: url(assets/hero1122.png);
            width: 100%;
            height: 580px;
            background-repeat: no-repeat;
            position: absolute;
            background-size: 100% 100%;
            top: 50px;
            background-position: 50%;
            z-index: -1;
        }



        @media screen and (max-width: 767px) {
            .blackBgImg {
                height: 380px;
                top: 70px;
            }


        }
    </style>
    {{-- <img class="w-full absolute top-5 sm:top-0 lg:top-0 -z-10   2xl:h-[650px] object-cover"
        src="{{ asset('assets/hero_bg.png') }}" alt=""> --}}
    <div class="blackBgImg"></div>
    <div class="px-4 lg:min-h-[150vh] ">
        <div class="max-w-3xl mt-40 mx-auto ">
            <div class="flex font-bold text-xs lg:text-xl">
                <button class="p-4 w-full bg-[#F5821F] text-white recFav" onclick="recive()">Recieved Favourite</button>
                <button class="p-4 w-full sndFav bg-white" onclick="send_f()">Send Favourite</button>
            </div>
            <div class="">

                @include('components.model')

                <button class="w-1/3 float-end my-3 p-3  text-white bg-[#F58220]" data-modal-target="default-modal"
                    data-modal-toggle="default-modal" type="button">narrow</button>
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
                    {{-- <img class="mx-auto py-8 w-80 lg:w-auto" src="{{ asset('assets/btn.png') }}" alt=""> --}}
                    <div class="grid grid-cols-4 items-center text-center justify-center max-w-2xl mx-auto py-3">
                        <div class="p-2 bg-gray-200">test</div>
                        <div class="p-2 bg-gray-400">test</div>
                        <div class="p-2 bg-orange-500">test</div>
                    </div>
                    <div class="p-6">
                        @foreach ($favorite_rec as $favorite_publisher)
                            @include('components/faverout_publisher_card')
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="hidden" id="send_content">
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
                            @foreach ($favorite_send as $favorite_publisher)
                                @include('components/faverout_publisher_card')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- jquery cdn --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- jquery cdn --}}
<script>
    var background = '';

    function recive() {
        const recive_content = document.getElementById("recive_content");
        recive_content.classList.remove('hidden');
        const send_content = document.getElementById("send_content");
        send_content.classList.add('hidden');
        $('.recFav').addClass('bg-[#F5821F]');
        $('.recFav').removeClass('bg-white');
        $('.sndFav').removeClass('bg-[#F5821F]');
        $('.sndFav').addClass('bg-white');



    }

    function send_f() {
        const recive_content = document.getElementById("recive_content");
        recive_content.classList.add('hidden');
        const send_content = document.getElementById("send_content");
        send_content.classList.remove('hidden');
        $('.sndFav').removeClass('bg-white');
        $('.sndFav').addClass('bg-[#F5821F]');
        $('.recFav').removeClass('bg-[#F5821F]');
        $('.recFav').removeClass('text-white');
        $('.recFav').addClass('bg-white');
        $('.recFav').addClass('text-black');

    }
</script>
