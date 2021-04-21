<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $npMovies;
    public $genres;

    public function __construct($popularMovies, $npMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->npMovies = $npMovies;
        $this->genres = $genres;
    }

    public function popularMovies() {
        return collect($this->popularMovies)->map(function($popularMovie) {
            $genresFormatted = collect($popularMovie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($popularMovie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500'.$popularMovie['poster_path'],
                'vote_average' => $popularMovie['vote_average'] * 10 .'%',
                'release_date' => Carbon::parse($popularMovie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
            ]);
        });
    }

    public function npMovies() {
        return collect($this->npMovies)->map(function($npMovie) {
            $genresFormatted = collect($npMovie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($npMovie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500'.$npMovie['poster_path'],
                'vote_average' => $npMovie['vote_average'] * 10 .'%',
                'release_date' => Carbon::parse($npMovie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
            ]);
        });
    }

    public function genres() {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [
                $genre['id'] => $genre['name']
            ];
        });

    }
}
