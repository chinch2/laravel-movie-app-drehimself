@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-red-500 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularActors as $popularActor)
                    <div class="actor mt-8">
                        <a href="#">
                            <img src={{ $popularActor['profile_path'] }}
                            alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg hover:text-gray-300">{{ $popularActor['name'] }}</a>
                            <div class="text-sm truncate text-gray-400">Iron Man, Avengers, Avengers: Infinity War</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
