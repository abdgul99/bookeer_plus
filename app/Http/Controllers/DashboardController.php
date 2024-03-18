<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PublisherDetail;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'labels' => ['1', '2', '3', '4', '5', '6', '7'],
            'chart1' => [10, 0, 50, -10, 80, 20, 100],
            'chart2' => [10, 0, 50, -10, 80, 20, 100],
            'chart3' => [10, 0, 50, -10, 80, 20, 100],
            'chart4' => [10, 0, 50, -10, 80, 20, 100],
        ];
        return view('dashboard.dashboard')->with('data', $data);
    }

    public function bookerUsers()
    {
        $bookers = User::where('type', 'booker')->paginate(10);
        return view('dashboard.booker_user')->with('bookers', $bookers);
    }

    public function bookerUserStatus(Request $request)
    {
        $user = User::find($request->booker_id);
        if ($request->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->save();
        return redirect()->back();
    }

    public function publisherUsers()
    {
        $publishers = User::where('type', 'publisher')->paginate(10);
        return view('dashboard.publisher_user')->with('publishers', $publishers);
    }

    public function publisherUserStatus(Request $request)
    {
        $user = User::find($request->publisher_id);
        if ($request->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->save();
        return redirect()->back();
    }

    public function addPublisher()
    {
        return view('dashboard.account');
    }
    public function storePublisher(Request $request)
    {
        $request->validate([
            'sns' => 'required',
            'password' => 'required',
            'company_name' => 'required',
            'person_incharge' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'area' => 'required',
            'comment' => 'required',
        ]);

        // check for email
        $user = User::where('email', $request->email)->first();

        // if user exists
        if ($user) {
            return redirect()->back()->with('error', 'Email already exists');
        } else {
            $user = new User;
            $user->sns = $request->sns;
            $user->password = Hash::make($request->password);
            $user->name = $request->company_name;
            $user->email = $request->email;
            $user->area = $request->area;
            $user->comment = $request->comment;
            $user->type = 'publisher';
            $user->status = 1;
            $user->save();
            // get the last inserted id
            $user_id = $user->id;
            // find in publisher details
            $publisher = PublisherDetail::where('user_id', $user_id)->first();
            // if publisher details exists
            if ($publisher) {
                $publisher->phone_number = $request->phone_number;
                $publisher->person_incharge = $request->person_incharge;
                $publisher->company_name = $request->company_name;
                $publisher->save();
            } else {
                $publisher = new PublisherDetail;
                $publisher->user_id = $user_id;
                $publisher->phone_number = $request->phone_number;
                $publisher->person_incharge = $request->person_incharge;
                $publisher->company_name = $request->company_name;
                $publisher->save();
            }
            return redirect()->back()->with('success', 'Publisher added successfully');
        }
    }


    public function faqs()
    {
        $faqs = Faq::all();
        return view('dashboard.faqs')->with('faqs', $faqs);
    }

    public function createFaqs()
    {
        return view('dashboard.create_faqs');
    }

    public function storeFaqs(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->back()->with('success', 'FAQ added successfully');
    }

    public function editFaqs($id)
    {
        $faq = Faq::find($id);
        return view('dashboard.edit_faqs')->with('faq', $faq);
    }

    public function updateFaqs(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = Faq::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return redirect()->back()->with('success', 'FAQ updated successfully');
    }

    public function destroyFaqs(Request $request)
    {
        $faq = Faq::find($request->id);
        $faq->delete();
        return redirect()->back()->with('success', 'FAQ deleted successfully');
    }
}