import './bootstrap';
$(document).ready(function(){
    // Initialize Pusher
    var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}'
    });

    var channel = pusher.subscribe('chat');

    channel.bind('App\\Events\\MessageSent', function(data) {
        $('#chat').append($('<div>').text(data.message));
    });

    // Send message
    $('#send').click(function(){
        var message = $('#message').val();

        $.ajax({
            type: 'POST',
            url: '/send-message',
            data: {message: message},
            success: function(response){
                console.log(response);
            },
            error: function(xhr, status, error){
                console.error(error);
            }
        });
    });
});
