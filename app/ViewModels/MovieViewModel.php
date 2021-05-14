<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
    public $movieDetails;

    public function __construct($movieDetails)
    {
        $this->movieDetails = $movieDetails;
    }

    public function movieDetails() {
        return collect($this->movieDetails)->merge([
            'poster_path' => $this->movieDetails['poster_path']
                    ? 'https://image.tmdb.org/t/p/w500'.$this->movieDetails['poster_path']
                    : 'https://via.placeholder.com/500x750',
            'vote_average' => $this->movieDetails['vote_average'] * 10 .'%',
            'release_date' => Carbon::parse($this->movieDetails['release_date'])->format('M d, Y'),
            'genres' => collect($this->movieDetails['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->movieDetails['credits']['crew'])->take(2),
            'cast' => collect($this->movieDetails['credits']['cast'])->take(5),
            'images' => collect($this->movieDetails['images']['backdrops'])->take(9),
        ])->only([
            'poster_path', 'id', 'genres', 'title', 'vote_average', 'overview', 'release_date', 'credits', 'videos', 'images', 'crew', 'cast', 'images',
        ]);
    }
}
