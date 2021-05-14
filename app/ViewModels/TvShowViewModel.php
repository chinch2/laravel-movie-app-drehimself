<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvShowViewModel extends ViewModel
{
    public $showDetails;

    public function __construct($showDetails)
    {
        $this->showDetails = $showDetails;
    }

    public function showDetails() {
        return collect($this->showDetails)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500'.$this->showDetails['poster_path'],
            'vote_average' => $this->showDetails['vote_average'] * 10 .'%',
            'first_air_date' => Carbon::parse($this->showDetails['first_air_date'])->format('M d, Y'),
            'genres' => collect($this->showDetails['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->showDetails['credits']['crew'])->take(2),
            'cast' => collect($this->showDetails['credits']['cast'])->take(5),
            'images' => collect($this->showDetails['images']['backdrops'])->take(9),
        ])->only([
            'poster_path', 'id', 'genres', 'name', 'vote_average', 'overview', 'first_air_date', 'credits', 'videos', 'images', 'crew', 'cast', 'images', 'created_by',
        ]);
    }
}
