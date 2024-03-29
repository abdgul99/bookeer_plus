@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="..."
        crossorigin="anonymous" />
    <style>
        .blackBgImg {
            background: url(assets/hero1122.png);
            width: 100%;
            height: 580px;
            background-repeat: no-repeat;
            position: absolute;
            background-size: 100% 100%;
            top: 80px;
            background-position: 50%;
            z-index: -1;
        }

        .bgGrayDiv {
            position: relative;
            top: 0px;
            z-index: 0;
        }



        @media screen and (max-width: 767px) {
            .blackBgImg {
                height: 380px;
                top: 76px;
            }

            .bgOrangeImage {
                height: 380px;
                top: -130px;
            }
        }

        left: 50%;
        transform: translate(-50%, -50%);
        */
    </style>
    {{-- <img class="w-full absolute top-5 sm:top-0 lg:top-0 -z-10   2xl:h-[650px] object-cover"
        src="{{ asset('assets/hero_bg.png') }}" alt=""> --}}
    <div class="blackBgImg"></div>
    <div class="px-8 ">
        <div class="max-w-4xl min-h-[90vh] w-full mx-auto bg-white flex text-[10px] my-10 lg:mt-40">
            <div class="w-[87px] bg-[#F58220] flex flex-col justify-between items-center">
                <div>
                    <i class="fab fa-rocketchat text-2xl text-white"></i>
                </div>
                <div class="flex flex-col gap-4 p-4">
                    <i class="fas fa-user text-2xl text-white"></i>
                    <i class="fas fa-sms text-2xl text-white"></i>
                    <i class="fas fa-envelope-open-text text-2xl text-white"></i>
                </div>
                <div class="flex flex-col gap-4 p-6">
                    <i class="fas fa-home text-2xl text-white"></i>
                    <i class="fas fa-pager text-2xl text-white"></i>
                    <i class="fas fa-heart text-2xl text-white"></i>
                </div>
            </div>
            <div class="w-full grid lg:grid-cols-2">
                <div class="">
                    @if ($users->count() > 0)
                        @foreach ($users as $muser)
                            <a href="{{ route('message_to', $muser->id) }}">
                                <div class="p-5 border flex gap-5 items-center ">
                                    @php
                                        $user = App\Models\User::find($muser->id);
                                        if ($user->profile_photo_path != null) {
                                            $img = asset('assets/profile/' . $user->profile_photo_path);
                                        } else {
                                            $img = asset('assets/gentosha.png');
                                        }
                                    @endphp
                                    <div class=""><img class="max-w-[60px]" class="" src="{{ $img }}"
                                            alt="{{ $user->name }}">
                                    </div>
                                    <div><b>{{ $user->name }}</b><br>
                                        {{ $user->comment ?? '' }}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
                <div class="bg-[#DCDDDE] hidden lg:block">
                    <div class="p-5">
                        {{-- <p class="w-full p-2 bg-[#9D9999] text-center text-white ">2023/6/15</p> --}}
                    </div>
                    <div id="chat"></div>

                    {{-- <div class="border p-5 m-5 bg-white rounded-2xl relative">
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
                    </div> --}}
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- pusher is not defined --}}
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize Pusher
        console.log('ready');


        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}'
        });

        var channel = pusher.subscribe('chat');

        channel.bind('App\\Events\\MessageSent', function(data) {
            $('#chat').append($('<div>').text(data.message));
        });

        // Send message
        $('#send').click(function() {
            var message = $('#message').val();
            //crsf token
            var _token = $('input[name="_token"]').val();

            $.ajax({
                type: 'POST',
                url: '/send-message',
                data: {
                    message: message
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
    // Fetch messages
    function fetchMessages() {
        $.get('/messages', function(messages) {
            $('#chat').empty(); // Clear existing messages
            $.each(messages, function(index, message) {
                $('#chat').append('<div class="received-message">' + message.message + '</div>');
            });
        });
    }

    // Call fetchMessages initially to load messages
    fetchMessages();

    // Set interval to periodically fetch messages
    setInterval(fetchMessages, 5000); // Adjust the interval as needed
</script>
