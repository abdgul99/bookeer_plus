<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Event;

class ChatsController extends Controller
{
    // app/Http/Controllers/ChatsController.php



    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('containers.message_list');
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages()
    {
        $messages = Chat::latest()->get();
        return response()->json($messages);
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    // public function sendMessage(Request $request)
    // {
    //     dd($request->all());
    //     $return_data['response_code'] = 0;

    //     $return_data['message'] = 'Something went wrong, Please try again later.';

    //     $rules = ['message' => 'required'];

    //     $messages = ['message.required' => 'Please enter message to communicate.'];

    //     $validator = Validator::make($request->all(), $rules, $messages);

    //     if ($validator->fails()) {

    //         $message = implode("", $validator->messages()->all());

    //         $return_data['message'] = $message;

    //         return $return_data;
    //     }

    //     try {

    //         $options = [

    //             'cluster' => env('PUSHER_APP_CLUSTER'),
    //             'useTLS' => true

    //         ];

    //         $pusher = new Pusher(

    //             env('PUSHER_APP_KEY'),
    //             env('PUSHER_APP_SECRET'),
    //             env('PUSHER_APP_ID'),
    //             $options
    //         );

    //         $response = $pusher->trigger('my-chat-channel', 'my-new-message-event', ['message' => $request->message]);

    //         if ($response) {

    //             $return_data['response_code'] = 1;

    //             $return_data['message'] = 'Success.';
    //         }
    //     } catch (\Exception $e) {

    //         $return_data['message'] = $e->getMessage();
    //     }

    //     return $return_data;
    // }

    public function sendMessage(Request $request)
    {
        $message = new Message();
        $message->user_id = Auth::id();
        $message->message = $request->message;
        $message->save();

        event(new MessageSent($message->message));

        return response()->json(['message' => 'Message sent successfully']);
    }
}