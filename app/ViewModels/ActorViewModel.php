<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
    public $actorDetails;
    public $actorSocial;
    public $actorCredits;

    public function __construct($actorDetails, $actorSocial, $actorCredits)
    {
        $this->actorDetails = $actorDetails;
        $this->actorSocial = $actorSocial;
        $this->actorCredits = $actorCredits;
    }

    public function actorDetails() {
        return collect($this->actorDetails)->merge([
            'birthday' => Carbon::parse($this->actorDetails['birthday'])->format('M d, Y'),
            'age' => Carbon::parse($this->actorDetails['birthday'])->age,
            'profile_path' => $this->actorDetails['profile_path']
                ? 'https://image.tmdb.org/t/p/w300/'.$this->actorDetails['profile_path']
                : 'https://via.placeholder.com/300x450',
        ]);
    }

    public function actorSocial() {
        return collect($this->actorSocial)->merge([
            'facebook' => $this->actorSocial['facebook_id']
                ? 'https://facebook.com/'.$this->actorSocial['facebook_id']
                : null,
            'instagram' => $this->actorSocial['instagram_id']
                ? 'https://instagram.com/'.$this->actorSocial['instagram_id']
                : null,
            'twitter' => $this->actorSocial['twitter_id']
                ? 'https://twitter.com/'.$this->actorSocial['twitter_id']
                : null,
        ]);
    }

    public function actorCredits() {
        $castMovies = collect($this->actorCredits)->get('cast');

        return collect($castMovies)->sortByDesc('popularity')->take(5)->map(function($movie) {
            if (isset($movie['title'])) {
                $title = $movie['title'];
            } elseif (isset($movie['name'])) {
                $title = $movie['name'];
            } else {
                $title = 'Untitled';
            }

            return collect($movie)->merge([
                'poster_path' => $movie['poster_path']
                    ? 'https://image.tmdb.org/t/p/w185'.$movie['poster_path']
                    : 'https://via.placeholder.com/185x278',
                'title' => $title,
                'linkToPage' => $movie['media_type'] === 'movie' ? route('movies.show', $movie['id']) : route('tv.show', $movie['id']),
            ]);
        });
    }

    public function actorCreditsList() {
        $castMovies = collect($this->actorCredits)->get('cast');

        return collect($castMovies)->map(function($movie) {
            if(isset($movie['release_date'])) {
                $releaseDate = $movie['release_date'];
            } elseif (isset($movie['first_air_date'])) {
                $releaseDate = $movie['first_air_date'];
            } else {
                $releaseDate = '';
            }

            if(isset($movie['title'])) {
                $title = $movie['title'];
            } elseif (isset($movie['name'])) {
                $title = $movie['name'];
            } else {
                $title = 'Untitled';
            }

            return collect($movie)->merge([
                'release_date' => $releaseDate,
                'release_year' => isset($releaseDate) ? Carbon::parse($releaseDate)->format('Y') : 'Future',
                'title' => $title,
                'character' => isset($movie['character']) ? $movie['character'] : '',
            ]);
        })->sortByDesc('release_date');
    }
}
