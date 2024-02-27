<?php
function getUserGenres($ids)
{
    $genres = \App\Models\Genre::whereIn('id', $ids)->get();
    $names = [];
    foreach ($genres as $genre) {
        $names[] = $genre->name;
    }
    return $names ?? [];
}
function getFavoritePublishers()
{
    $user = \Illuminate\Support\Facades\Auth::user();
    return $user->favorite_publishers()->pluck('publisher_id')->toArray();
}
