<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\PublisherDetail;
use App\Models\SupportArea;
use App\Models\User;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $recommeded_publishers = User::where('type', 'publisher')->where('status', 1)->inRandomOrder()->limit(6)->get();
        $recommeded_bookers = User::where('type', 'booker')->where('status', 1)->inRandomOrder()->limit(6)->get();
        $faqs = Faq::limit(3)->get();
        return view('containers.index')->with(['recommeded_publishers' => $recommeded_publishers, 'recommeded_bookers' => $recommeded_bookers, 'faqs' => $faqs]);
    }

    public function publisherProfile($id)
    {
        $user = User::find($id);
        $publisherDetail = PublisherDetail::where('user_id', $id)->first();
        return view('containers.publisher_details')->with(['user' => $user, 'publisherDetail' => $publisherDetail]);
    }

    public function bookerProfile($id)
    {
        $user = User::find($id);
        $genres = Genre::all();
        return view('containers.booker_profile_view')->with(['user' => $user, 'genres' => $genres]);
    }

    public function favoriteUnfavoritePublisher($id)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->favorite_publishers()->where('publisher_id', $id)->exists()) {
                $user->favorite_publishers()->detach($id);
                return back()->with('success', 'Publisher removed from favorite list.');
            } else {
                $user->favorite_publishers()->attach($id);
                return back()->with('success', 'Publisher added to favorite list.');
            }
        } else {
            return back()->with('error', 'You need to login first.');
        }
    }

    public function faveroutPublisher()
    {
        $userid = Auth::user()->id;
        $user = Auth::user();
        $favorite_rec = User::find($userid)->favorite_publishers()->get();
        //get publisher who make me favoutite
        $favorite_send = User::find($userid)->favorite_bookers()->get();
        $genres = Genre::all();
        $support_area = SupportArea::all();
        if ($user->type == 'publisher') {
            return view('containers.faverout_booker')->with(['favorite_rec' => $favorite_rec, 'genres' => $genres, 'support_area' => $support_area, 'favorite_send' => $favorite_send]);
        } else {
            return view('containers.faverout_publisher')->with(['favorite_rec' => $favorite_rec, 'genres' => $genres, 'support_area' => $support_area, 'favorite_send' => $favorite_send]);
        }
    }
}
