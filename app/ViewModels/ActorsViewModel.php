<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $popularActors;

    public function __construct($popularActors)
    {
        $this->popularActors = $popularActors;
    }

    public function popularActors() {
        return collect($this->popularActors)->map(function($popularActor) {
            return collect($popularActor)->merge([
                'profile_path' => $popularActor['profile_path']
                ? 'https://image.tmdb.org/t/p/w235_and_h235_face'.$popularActor['profile_path']
                : 'https://ui-avatars.com/api/?size=235&name='.$popularActor['name'],
            ])->only([
                'name', 'id', 'profile_path', 'known_for',
            ]);
        })->dump();
    }
}
