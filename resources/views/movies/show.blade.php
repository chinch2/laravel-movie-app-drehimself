@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src={{ $movieDetails['poster_path'] }} alt="backdrop" class="w-64 lg:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movieDetails['title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-red-500 w-4"version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.9 25.65" style="enable-background:new 0 0 26.9 25.65" xml:space="preserve"><style type="text/css">.st0{clip-path:url(#SVGID_2_);} .st1{fill:#FFD401;}</style><g><g><defs><path id="SVGID_1_" d="M14.1,0.43l3.44,8.05l8.72,0.78c0.39,0.03,0.67,0.37,0.64,0.76c-0.02,0.19-0.1,0.35-0.24,0.47l0,0 l-6.6,5.76l1.95,8.54c0.09,0.38-0.15,0.75-0.53,0.84c-0.19,0.04-0.39,0-0.54-0.1l-7.5-4.48l-7.52,4.5 c-0.33,0.2-0.76,0.09-0.96-0.24c-0.1-0.16-0.12-0.35-0.08-0.52h0l1.95-8.54l-6.6-5.76c-0.29-0.25-0.32-0.7-0.07-0.99 C0.3,9.35,0.48,9.28,0.66,9.27l8.7-0.78l3.44-8.06c0.15-0.36,0.56-0.52,0.92-0.37C13.9,0.13,14.03,0.27,14.1,0.43L14.1,0.43 L14.1,0.43z"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" style="overflow:visible"/></clipPath><g class="st0"><defs><rect id="SVGID_3_" x="-0.08" y="-0.1" width="27.01" height="25.85"/></defs><clipPath id="SVGID_4_"><use xlink:href="#SVGID_3_" style="overflow:visible"/></clipPath><g style="clip-path:url(#SVGID_4_)"><image style="overflow:visible" width="64" height="57" xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgEAlgCWAAD/7AARRHVja3kAAQAEAAAAHgAA/+4AIUFkb2JlAGTAAAAAAQMA EAMCAwYAAAJIAAACsAAAA4b/2wCEABALCwsMCxAMDBAXDw0PFxsUEBAUGx8XFxcXFx8eFxoaGhoX Hh4jJSclIx4vLzMzLy9AQEBAQEBAQEBAQEBAQEABEQ8PERMRFRISFRQRFBEUGhQWFhQaJhoaHBoa JjAjHh4eHiMwKy4nJycuKzU1MDA1NUBAP0BAQEBAQEBAQEBAQP/CABEIADwAQwMBIgACEQEDEQH/ xACiAAADAQEBAQAAAAAAAAAAAAAABAUCAQMGAQACAwEAAAAAAAAAAAAAAAAAAwQFBgIQAAIABQME AwAAAAAAAAAAAAARAQIDBAUTJBUSIzMlMhQ0EQABAQYGAQUAAAAAAAAAAAABABAgEXGhMrECEkJy AzEhUSITFBIAAgADBAgHAQAAAAAAAAAAAQIAEAMhMaEiUXGBkbHRMtIRYRJykjNzQv/aAAwDAQAC EQMRAAAA+68SfRyaBPIrKBPAoektl3NMDQREp1Cbmp+jJAbruANsptSOKwGsrkJlKXnLHRkgu0ZA 00m2/iyBqqudKto0FikOkNyQ6Ak51h66IGkrP//aAAgBAgABBQC/v7ijccreHK3hbZG6nrmUhu0I s4bkycN2hFnDcmRkljc6chpyFrJLC4P/2gAIAQMAAQUApUpJpNCmaFMnoyQlLeHbQirDtltDtIRW h2y2mjCl1ROqJVmjpn//2gAIAQEAAQUAr14UIcjIcjIcjIcjIcjIcjIUbyWtOZH4MYxjGWH6DJfB jGMYzH/oMp42MYxjMdHcmV8bGMYxmNjujL+NjGMYzGR3RmPExjGMZi/1l/8AV6PUnqT1J6k9SepL L6Guf//aAAgBAgIGPwBqdNgFAX+QbxHWPiI6x8RFNGcFXcA5RcZPqXhOj+iyfUvCdH9FkxNRFsWw +rR5Ax9tPc/bH209z9sUiKiHOtgDdsv/2gAIAQMCBj8ABIti7GLsYJAuEhtm3tMhtm/tMhlJvu8O cdDYc46Gw5w+VhlOjnL/2gAIAQEBBj8ABIJiYeisKsKsKsKsKsK0DKQYRizJMviRZkmcHxIsyTOD 4kWdczg+JFnXyOD44lnXyOD44lmT9MdMfjp91vqt9Vvqt9Vvqt9UPz6vsgfPiDP/2Q==" transform="matrix(0.48 0 0 -0.48 -1.1399 26.7469)"/></g></g></g><path class="st1" d="M14.1,0.43l3.44,8.05l8.72,0.78c0.39,0.03,0.67,0.37,0.64,0.76c-0.02,0.19-0.1,0.35-0.24,0.47l0,0l-1.18,1.03 c-3.21,1.11-7.42,1.78-12.03,1.78c-4.61,0-8.83-0.67-12.03-1.78l-1.18-1.03c-0.29-0.25-0.32-0.7-0.07-0.99 C0.3,9.35,0.48,9.28,0.66,9.27l8.7-0.78l3.44-8.06c0.15-0.36,0.56-0.52,0.92-0.37C13.9,0.13,14.03,0.27,14.1,0.43L14.1,0.43 L14.1,0.43z"/></g></svg>
                    <span class="ml-1">{{ $movieDetails['vote_average'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movieDetails['release_date'] }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        {{ $movieDetails['genres'] }}
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movieDetails['overview'] }}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach ($movieDetails['crew'] as $crewMember)
                            <div class="mr-8">
                                <div>{{ $crewMember['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $crewMember['job'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div x-data="{ isOpen: false }">
                    @if(count($movieDetails['videos']['results']) > 0)
                        <div class="mt-12">
                            <button @click="isOpen = true"
                            class="flex inline-flex items-center bg-red-500 text-gray-900 rounded font-semibold px-5
                            py-4 hover:bg-red-600 transition ease-in-out duration-150">
                                <svg class="w-6 fill-current" version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 128.000000 128.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                Created by potrace 1.16, written by Peter Selinger 2001-2019
                                </metadata>
                                <g transform="translate(0.000000,128.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M505 1264 c-244 -52 -438 -249 -489 -497 -20 -96 -20 -158 0 -254 52
                                -252 246 -446 496 -497 97 -20 159 -20 256 0 250 51 444 245 496 497 20 96 20
                                158 0 255 -71 347 -411 569 -759 496z m193 -401 c239 -162 267 -184 270 -219
                                2 -21 -4 -36 -20 -51 -26 -23 -360 -254 -395 -272 -26 -13 -67 0 -77 25 -9 23
                                -9 565 0 588 6 16 35 34 57 35 4 1 78 -47 165 -106z"/>
                                </g>
                                </svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                    @endif

                    <div style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show.transition.opacity="isOpen">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button
                                        @click="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $movieDetails['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end movie-info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movieDetails['cast'] as $castMember)
                    <div class="mt-8">
                        <a href="{{ route('actors.show', $castMember['id']) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w300'.$castMember['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('actors.show', $castMember['id']) }}" class="text-lg mt-2 hover:text-gray:300">{{ $castMember['name'] }}</a>
                            <div class="text-gray-400 text-sm">
                                {{ $castMember['character'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> <!-- end movie-cast -->

    <div class="movie-images border-b border-gray-800" x-data="{ isOpen: false, image: '' }">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($movieDetails['images'] as $image)
                    <div class="mt-8">
                        <a @click.prevent="isOpen = true, image='{{ 'https://image.tmdb.org/t/p/original'.$image['file_path'] }}'" href="#">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                @endforeach
            </div>

            <div style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show.transition.opacity="isOpen">
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button
                                @click="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="text-3xl leading-none hover:text-gray-300">&times;
                            </button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <img :src="image" alt="poster">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end movie-images -->
@endsection
