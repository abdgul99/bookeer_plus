<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;
use Validator;

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
        return Message::with('user')->get();
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
        $return_data['response_code'] = 0;
        $return_data['message'] = 'Something went wrong. Please try again later.';

        // Assuming your AJAX sends JSON data, decode it
        $requestData = json_decode($request->getContent(), true);

        // Ensure the 'message' key exists in the received data
        if (!isset($requestData['message'])) {
            $return_data['message'] = 'Message not provided.';
            return response()->json($return_data, 422); // 422 Unprocessable Entity status code
        }

        // Validate the 'message' field
        $validator = Validator::make($requestData, [
            'message' => 'required'
        ], [
            'message.required' => 'Please enter a message to communicate.'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            $return_data['message'] = implode("\n", $validator->messages()->all());
            return response()->json($return_data, 422); // 422 Unprocessable Entity status code
        }

        try {
            $options = [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true
            ];

            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                $options
            );

            $response = $pusher->trigger('chat', 'my-new-message-event', ['message' => $requestData['message']]);

            if ($response) {
                $return_data['response_code'] = 1;
                $return_data['message'] = 'Success.';
            }
        } catch (\Exception $e) {
            $return_data['message'] = $e->getMessage();
        }

        return response()->json($return_data);
    }
}