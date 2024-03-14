@extends('layouts.master')
@section('content')
    <img class="w-full absolute top-0 -z-10 brightness-75 hidden lg:block" src="{{ asset('assets/chat_bg.png') }}"
        alt="">
    <div class="px-8">
        <div class="max-w-4xl min-h-screen lg:min-h-[1200px] mx-auto bg-white flex text-[10px] my-10 lg:mt-40">
            <div class="w-[87px] bg-[#F58220] flex flex-col justify-between items-center">
                <div>
                    <img class="w-[30px] h-[30px] object-cover" src="{{ asset('assets/chatbox/messages-image.png') }}"
                        alt="">
                </div>
                <div class="flex flex-col gap-4 p-4">
                    <img class="w-[30px] h-[30px] object-cover" src="{{ asset('assets/chatbox/profile.png') }}"
                        alt="">
                    <img class="w-[30px] h-[30px] object-cover" src="{{ asset('assets/chatbox/message.png') }}"
                        alt="">
                    <img class="w-[30px] h-[30px] object-cover" src="{{ asset('assets/chatbox/offer.png') }}"
                        alt="">
                </div>
                <div class="flex flex-col gap-4 p-6">
                    <img class="w-[30px] h-[30px] object-cover" src="{{ asset('assets/chatbox/home.png') }}" alt="">
                    <img class="w-[30px] h-[30px] object-cover" src="{{ asset('assets/chatbox/list.png') }}" alt="">
                    <img class="w-[30px] h-[30px] object-cover" src="{{ asset('assets/chatbox/heart.png') }}"
                        alt="">
                </div>
            </div>
            <div class="w-full grid lg:grid-cols-2">
                <div class="">
                    <div class="p-5 border flex gap-5 items-center ">
                        <div class=""><img class="w-[250px]" src="{{ asset('assets/gentosha.png') }}" alt="">
                        </div>
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur minus ad aspernatur quas
                            voluptatem, impedit eaque magni facere provident voluptate odio dicta praesentium? Amet pariatur
                            dignissimos aliquid eos optio minus.</div>
                    </div>
                    <div class="p-5 border flex gap-5 items-center ">
                        <div class=""><img class="w-[250px]" src="{{ asset('assets/gentosha.png') }}" alt="">
                        </div>
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur minus ad aspernatur quas
                            voluptatem, impedit eaque magni facere provident voluptate odio dicta praesentium? Amet pariatur
                            dignissimos aliquid eos optio minus.</div>
                    </div>
                    <div class="p-5 border flex gap-5 items-center ">
                        <div class=""><img class="w-[250px]" src="{{ asset('assets/gentosha.png') }}" alt="">
                        </div>
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur minus ad aspernatur quas
                            voluptatem, impedit eaque magni facere provident voluptate odio dicta praesentium? Amet pariatur
                            dignissimos aliquid eos optio minus.</div>
                    </div>
                    <div class="p-5 border flex gap-5 items-center ">
                        <div class=""><img class="w-[250px]" src="{{ asset('assets/gentosha.png') }}" alt="">
                        </div>
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur minus ad aspernatur quas
                            voluptatem, impedit eaque magni facere provident voluptate odio dicta praesentium? Amet pariatur
                            dignissimos aliquid eos optio minus.</div>
                    </div>
                </div>
                <div class="bg-[#DCDDDE] hidden lg:block">
                    <div class="p-5">
                        <p class="w-full p-2 bg-[#9D9999] text-center text-white ">2023/6/15</p>
                    </div>
                    <div class="border p-5 m-5 bg-white rounded-2xl relative">
                        <img class="absolute -top-0 -left-4" src="{{ asset('assets/chat_side.png') }}" alt="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quaerat, ipsum cum reiciendis
                        dignissimos
                        vel quod laudantium at voluptatem veritatis, eum quos asperiores expedita excepturi quis ab ad
                        laboriosam necessitatibus!
                        <span class="absolute -bottom-5 right-1 text-[7px]">2023/6/15</span>
                    </div>
                    <div class="border p-5 m-5 bg-[#FECF8C] rounded-2xl relative">
                        <img class="absolute -top-0 -right-4" src="{{ asset('assets/ch2.png') }}" alt="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quaerat, ipsum cum reiciendis
                        dignissimos
                        vel quod laudantium at voluptatem veritatis, eum quos asperiores expedita excepturi quis ab ad
                        laboriosam necessitatibus!
                        <span class="absolute -bottom-5 right-1 text-[7px]">2023/6/15</span>
                    </div>
                    <div class="border p-5 m-5 bg-white rounded-2xl relative">
                        <img class="absolute -top-0 -left-4" src="{{ asset('assets/chat_side.png') }}" alt="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quaerat, ipsum cum reiciendis
                        dignissimos
                        vel quod laudantium at voluptatem veritatis, eum quos asperiores expedita excepturi quis ab ad
                        laboriosam necessitatibus!
                        <span class="absolute -bottom-5 right-1 text-[7px]">2023/6/15</span>
                    </div>
                    <div class="border p-5 m-5 bg-[#FECF8C] rounded-2xl relative">
                        <img class="absolute -top-0 -right-4" src="{{ asset('assets/ch2.png') }}" alt="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quaerat, ipsum cum reiciendis
                        dignissimos
                        vel quod laudantium at voluptatem veritatis, eum quos asperiores expedita excepturi quis ab ad
                        laboriosam necessitatibus!
                        <span class="absolute -bottom-5 right-1 text-[7px]">2023/6/15</span>
                    </div>
                    <div class="border p-5 m-5 bg-white rounded-2xl relative">
                        <img class="absolute -top-0 -left-4" src="{{ asset('assets/chat_side.png') }}" alt="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quaerat, ipsum cum reiciendis
                        dignissimos
                        vel quod laudantium at voluptatem veritatis, eum quos asperiores expedita excepturi quis ab ad
                        laboriosam necessitatibus!
                        <span class="absolute -bottom-5 right-1 text-[7px]">2023/6/15</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
