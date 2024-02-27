<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublisherDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $recommeded_publishers = User::where('type', 'publisher')->where('status', 1)->inRandomOrder()->limit(5)->get();
        return view('containers.index')->with('recommeded_publishers', $recommeded_publishers);
    }

    public function publisherProfile($id)
    {
        $user = User::find($id);
        $publisherDetail = PublisherDetail::where('user_id', $id)->first();
        return view('containers.publisher_details')->with(['user' => $user, 'publisherDetail' => $publisherDetail]);
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
        $favorite_publishers = User::find($userid)->favorite_publishers()->get();
        return view('containers.faverout_publisher')->with('favorite_publishers', $favorite_publishers);
    }
}
