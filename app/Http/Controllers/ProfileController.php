<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PublisherDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function bookerProfiler()
    {
        // get login user id
        $user_id = Auth::user()->id;
        // get user data
        $user = User::find($user_id);
        $genres = Genre::all();
        return view('containers.booker_profile')->with(['user' => $user, 'genres' => $genres]);
    }

    public function updateGenre(Request $request)
    {
        $request->validate([
            'genre' => 'required',
        ]);


        $user = Auth::user();
        $user->genres = $request->genre;
        $user->save();

        return back()
            ->with('success', 'You have successfully update genre.')
            ->with('genre', $request->genre);
    }

    public function updateImage(Request $request)
    {
        $request->validate([
            'profile_photo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . $request->profile_photo_path->extension();

        $request->profile_photo_path->move(public_path('assets/profile/'), $imageName);

        $user = Auth::user();
        $user->profile_photo_path = $imageName;
        $user->save();

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }

    public function updateSns(Request $request)
    {
        $request->validate([
            'sns' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->sns = $request->sns;
        $user->save();

        return back()
            ->with('success', 'You have successfully update sns.')
            ->with('sns', $request->sns);
    }

    public function updateName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return back()
            ->with('success', 'You have successfully update name.')
            ->with('name', $request->name);
    }

    public function updateComment(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->comment = $request->comment;
        $user->save();

        return back()
            ->with('success', 'You have successfully update comment.')
            ->with('comment', $request->comment);
    }

    public function updateAge(Request $request)
    {
        $request->validate([
            'age' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->age = $request->age;
        $user->save();

        return back()
            ->with('success', 'You have successfully update age.')
            ->with('age', $request->age);
    }

    public function updateJob(Request $request)
    {
        $request->validate([
            'job' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->job = $request->job;
        $user->save();

        return back()
            ->with('success', 'You have successfully update job.')
            ->with('job', $request->job);
    }

    public function updateWebsite(Request $request)
    {
        $request->validate([
            'website' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->website = $request->website;
        $user->save();

        return back()
            ->with('success', 'You have successfully update website.')
            ->with('website', $request->website);
    }

    public function updateArea(Request $request)
    {
        $request->validate([
            'area' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->area = $request->area;
        $user->save();

        return back()
            ->with('success', 'You have successfully update area.')
            ->with('area', $request->area);
    }


    public function updateGender(Request $request)
    {
        $request->validate([
            'gender' => 'required|string|max:255',
        ]);
        $user = Auth::user();
        $user->gender = $request->gender;
        $user->save();
        return back()
            ->with('success', 'You have successfully update gender.');
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }



    public function publisherProfile()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $publisher = PublisherDetail::where('user_id', $user_id)->first();
        $genres = Genre::all();
        $genresIDs = (isset($user->genres)) ? json_decode($user->genres) : [];
        $genresName = [];
        foreach ($genresIDs as $genreID) {
            $genre = Genre::find($genreID);
            array_push($genresName, $genre->name);
        }

        return view('containers.publisher.publisher_profile')->with(['user' => $user, 'publisher' => $publisher, 'genres' => $genres, 'genresName' => $genresName]);
    }

    public function updateEditorial(Request $request)
    {
        $request->validate([
            'editorial_support' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->editorial_support = $request->editorial_support;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->editorial_support = $request->editorial_support;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update editorial.')
            ->with('editorial', $request->editorial);
    }

    public function updatePublication(Request $request)
    {
        $request->validate([
            'publication_support' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->publication_support = $request->publication_support;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->publication_support = $request->publication_support;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update publication.')
            ->with('publication', $request->publication);
    }

    public function updateCost(Request $request)
    {
        $request->validate([
            'cost' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->cost = $request->cost;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->cost = $request->cost;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update cost.')
            ->with('cost', $request->cost);
    }

    public function updateCirculation(Request $request)
    {
        $request->validate([
            'circulation' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->circulation = $request->circulation;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->circulation = $request->circulation;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update circulation.')
            ->with('circulation', $request->circulation);
    }

    public function updateBusiness(Request $request)
    {
        $request->validate([
            'business_activities' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->business_activities = $request->business_activities;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->business_activities = $request->business_activities;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update business.')
            ->with('business', $request->business);
    }

    public function updateCapital(Request $request)
    {
        $request->validate([
            'capital' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->capital = $request->capital;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->capital = $request->capital;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update capital.')
            ->with('capital', $request->capital);
    }

    public function updateEstablished(Request $request)
    {
        $request->validate([
            'establishment_date' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->establishment_date = $request->establishment_date;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->establishment_date = $request->establishment_date;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update established.')
            ->with('established', $request->established);
    }

    public function updateRepresentative(Request $request)
    {
        $request->validate([
            'representative' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->representative = $request->representative;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->representative = $request->representative;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update representative.')
            ->with('representative', $request->representative);
    }

    public function updateHistory(Request $request)
    {
        $request->validate([
            'company_history' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->company_history = $request->company_history;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->company_history = $request->company_history;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update history.')
            ->with('history', $request->history);
    }

    public function updateMagazine(Request $request)
    {
        $request->validate([
            'representative_magazine' => 'required',
        ]);

        $user = Auth::user();
        $publisher = PublisherDetail::where('user_id', $user->id)->first();
        if ($publisher) {
            $publisher->representative_magazine = $request->representative_magazine;
            $publisher->save();
        } else {
            $publisher = new PublisherDetail;
            $publisher->user_id = $user->id;
            $publisher->representative_magazine = $request->representative_magazine;
            $publisher->save();
        }

        return back()
            ->with('success', 'You have successfully update magazine.')
            ->with('magazine', $request->magazine);
    }


    public function publisherSearch()
    {
        $genres = Genre::all();
        return view('containers.publisher.publisher_search')->with('genres', $genres);
    }


    public function searchBookerResult(Request $request)
    {
        $request->validate([
            'age' => 'required',
            'genres' => 'required',
            'area' => 'required'
        ]);

        $genres = $request->genres;

        $age = $request->age;
        $area = $request->area;

        // Define the minimum number of genre matches required
        $minGenreMatches = 1;
        $bookers = User::where('type', 'booker')
            ->where('status', 1)
            ->whereNotIn('type', ['publisher'])
            ->where(function ($query) use ($genres, $minGenreMatches) {
                $query->where(function ($query) use ($genres, $minGenreMatches) {
                    foreach ($genres as $g) {
                        $query->orWhereJsonContains('genres', $g);
                    }
                })->havingRaw('COUNT(*) < ?', [$minGenreMatches]);
            })
            ->get();
        return view('containers.publisher.searchResult')->with('bookers', $bookers);
    }
}
