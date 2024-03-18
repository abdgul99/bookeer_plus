<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
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
        $id = Auth::id();
        $messages = Message::where('user_id', $id)->get();
        $users = Message::where('from_user_id', $id)->get();
        return view('containers.message_list', compact('users', 'messages'));
        // return view('containers.message_list');
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages(Request $request)
    {
        $from = Auth::id();
        $to = $request->id;
        // where message not empty
        $messages = Message::where('from_user_id', $from)->where('user_id', $to)->where('message', '!=', '')->orWhere('from_user_id', $to)->where('user_id', $from)->where('message', '!=', '')->latest()->get();

        // $messages = Message::where('from_user_id', $from)->where('user_id', $to)->orWhere('from_user_id', $to)->where('user_id', $from)->where('message', '!=', '')->latest()->get();
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
        $message->from_user_id = Auth::id();
        $message->user_id = $request->id;
        $message->save();

        event(new MessageSent($message->message));

        return response()->json(['message' => 'Message sent successfully']);
    }

    public function sendDm(Request $request)
    {
        $id = $request->id;
        // check if message already exist
        $message = Message::where('from_user_id', Auth::id())->where('user_id', $id)->first();
        if ($message) {
            return redirect()->route('chat');
        }
        $message = new Message();
        $message->from_user_id = Auth::id();
        $message->message = '';
        $message->user_id = $id;
        $message->save();

        //redirect to message_list
        return redirect()->route('chat');
    }

    public function messageTo($id)
    {
        $message = Message::where('from_user_id', Auth::id())->where('user_id', $id)->where('message', '!=', '')->get();
        $user = User::find($id);
        return view('containers.chat')->with(['messages' => $message, 'user' => $user]);
    }
}