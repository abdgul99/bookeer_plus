@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="..."
        crossorigin="anonymous" />
    <style>
        .blackBgImg {
            background: url(../assets/hero1122.png);
            width: 100%;
            height: 580px;
            background-repeat: no-repeat;
            position: absolute;
            background-size: 100% 100%;
            top: 80px;
            background-position: 50%;
            z-index: -1;
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

        /
    </style>


    {{-- <img class="w-full absolute top-5 sm:top-0 lg:top-0 -z-10   2xl:h-[650px] object-cover"
        src="{{ asset('assets/hero_bg.png') }}" alt=""> --}}
    <div class="blackBgImg"></div>
    <div class="px-8 ">
        <div
            class="max-w-4xl  min-h-screen lg:min-h-[90vh] mx-auto bg-white flex text-[10px] my-10 lg:mt-40 border border-gray-200">
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
            <div class="w-full  lg:grid lg:grid-cols-2">
                <div class="h-0 hidden lg:block">
                    @if ($user)
                        <div class="p-5 border flex gap-5 items-center ">
                            @php
                                if ($user->profile_photo_path != null) {
                                    $img = asset('assets/profile/' . $user->profile_photo_path);
                                } else {
                                    $img = asset('assets/gentosha.png');
                                }
                            @endphp
                            <div class=""><img class="max-w-[60px]" src="{{ $img }}"
                                    alt="{{ $user->name }}">
                            </div>
                            <div><b>{{ $user->name }}</b><br>
                                {{ $user->comment ?? '' }}
                            </div>
                        </div>
                    @endif
                </div>
                <div
                    class="bg-[#DCDDDE]   lg:block  lg:mt-0 flex flex-col justify-between  h-full relative overflow-y-hidden">
                    <div class="overflow-y-scroll h-[80vh] p-3">
                        <div class="p-5 ">
                            {{-- <p class="w-full p-2 bg-[#9D9999] text-center text-white ">2023/6/15</p> --}}
                        </div>
                        <div id="oldChat">
                            @if ($messages->count() > 0)
                                @foreach ($messages as $message)
                                    @if ($message->message != '')
                                        @if ($message->from_user_id == Auth::user()->id)
                                            <div class="border p-5 m-5 bg-white rounded-2xl relative">
                                                <img class="absolute -top-0 -left-4"
                                                    src="{{ asset('assets/chat_side.png') }}" alt="">
                                                <span class="chatMessage">{{ $message->message }}</span>
                                                <span class="absolute -bottom-5 right-1 text-[7px]">
                                                    @php
                                                        //date format
                                                        $date = new DateTime($message->created_at);
                                                        // format dd/mm/yyyy
                                                        $date = $date->format('d/m/Y');

                                                    @endphp
                                                    {{ $date }}</span>
                                            </div>
                                        @else
                                            <div class="border p-5 m-5 bg-[#FECF8C] rounded-2xl relative">
                                                <img class="absolute -top-0 -right-4" src="{{ asset('assets/ch2.png') }}"
                                                    alt="">
                                                <span class="chatMessage">{{ $message->message }}</span>
                                                <span class="absolute -bottom-5 right-1 text-[7px]">
                                                    @php
                                                        //date format
                                                        $date = new DateTime($message->created_at);
                                                        // format dd/mm/yyyy
                                                        $date = $date->format('d/m/Y');

                                                    @endphp
                                                    {{ $date }}</span>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="w-full absolute bottom-0 w-full">
                        <div class="flex items-center gap-3 p-2 relative bottom-0 w-full">
                            <button id="send" class="btn btn-primary w-5"><i
                                    class="fas fa-images text-2xl"></i></button>
                            <textarea rows="1" type="text" id="message" class="w-full rounded-full text-[10px]"
                                style="line-height: 18px;height: 38px;"></textarea>
                            <button id="send" class="btn btn-primary w-5"><img src="{{ asset('assets/send.png') }}"
                                    alt=""></button>
                        </div>

                    </div>
                </div>
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

        var img = "{{ asset('assets/chat_side.png') }}";
        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}'
        });

        var channel = pusher.subscribe('chat');

        channel.bind('App\\Events\\MessageSent', function(data) {
            // $('#chat').append($('<div>').text(data.message));
            // $('#chat').append('<div class="border p-5 m-5 bg-white rounded-2xl relative"><img class="absolute -top-0 -left-4" src="'+img+'" alt="">'+data.message+'<span class="absolute -bottom-5 right-1 text-[7px]">'+data.created_at+'</span></div>');
        });

        // Send message
        $('#send').click(function() {
            var message = $('#message').val();
            //crsf token
            var _token = $('input[name="_token"]').val();
            // get id from url
            var url = window.location.href;
            var id = url.substring(url.lastIndexOf('/') + 1);
            $.ajax({
                type: 'POST',
                url: '/send-message',
                data: {
                    message: message,
                    _token: _token,
                    id: id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#message').val('');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
    // Fetch messages
    function fetchMessages() {

        var url = window.location.href;
        var id = url.substring(url.lastIndexOf('/') + 1);

        //get messages for this user
        $.get('/messages/' + id, function(chats) {
            // $('#chat').empty(); // Clear existing messages
            $.each(chats, function(index, chat) {
                // check if the message append not append again
                var oldChat = $('#oldChat').find('div').find('.chatMessage');
                //find messgae in old chat
                var chatmessagearray = [];
                $.each(oldChat, function(index, old) {
                    // push message to array but not duplicate
                    if (jQuery.inArray(old.innerText, chatmessagearray) === -1) {
                        // item NOT in Array
                        chatmessagearray.push(old.innerText);
                    }

                });
                if (jQuery.inArray(chat.message, chatmessagearray) === -1) {
                    // item NOT in Array
                    // date format in jquery
                    var date = new Date(chat.created_at);
                    var month = date.getMonth() + 1;
                    var day = date.getDate();
                    var year = date.getFullYear();
                    var combineDate = day + '/' + month + '/' + year;

                    if (chat.from_user_id == id) {
                        var img = '{{ asset('assets/ch2.png') }}';
                        $('#oldChat').append(
                            '<div class="border p-5 m-5 bg-[#FECF8C] rounded-2xl relative"><img class="absolute -top-0 -right-4" src="' +
                            img + '" alt=""><span class="chatMessage">' + chat.message +
                            '</span><span class="absolute -bottom-5 right-1 text-[7px]">' +
                            combineDate + '</span></div>');
                    } else {
                        var img = "{{ asset('assets/chat_side.png') }}";
                        $('#oldChat').append(
                            '<div class="border p-5 m-5 bg-white rounded-2xl relative"><img class="absolute -top-0 -left-4" src="' +
                            img + '" alt=""><span class="chatMessage">' + chat.message +
                            '</span><span class="absolute -bottom-5 right-1 text-[7px]">' +
                            combineDate + '</span></div>');
                    }
                }
                // if($('#chat').find('div').text() != chat.message){
                //     $('#chat').append('<div class="border p-5 m-5 bg-white rounded-2xl relative"><img class="absolute -top-0 -left-4" src="'+img+'" alt="">'+chat.message+'<span class="absolute -bottom-5 right-1 text-[7px]">'+chat.created_at+'</span></div>');
                // }
                // $('#chat').append('<div class="border p-5 m-5 bg-white rounded-2xl relative"><img class="absolute -top-0 -left-4" src="'+img+'" alt="">'+chat.message+'<span class="absolute -bottom-5 right-1 text-[7px]">'+chat.created_at+'</span></div>');
            });
        });
    }

    // Call fetchMessages initially to load messages
    fetchMessages();

    // Set interval to periodically fetch messages
    setInterval(fetchMessages, 5000); // Adjust the interval as needed
</script>
