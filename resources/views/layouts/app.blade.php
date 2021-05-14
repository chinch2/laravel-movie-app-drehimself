<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joe's Movie App</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 192.756 192.756"><g fill-rule="evenodd" clip-rule="evenodd"><path fill="#fff" d="M0 0h192.756v192.756H0V0z"/><path d="M189.922 99.727c-5.332 3.213-14.084 6.461-29.221 7.16-6.941.322-43.426-3.801-66.406-7.338-17.52-2.695-36.346-3.469-42.986-3.385-17.135.219-39.456 4.363-48.475 16.029 5.332-3.213 14.084-6.461 29.22-7.16 6.942-.322 43.426 3.801 66.406 7.338 17.52 2.695 36.346 3.469 42.986 3.385 17.136-.219 39.456-4.363 48.476-16.029zM189.922 134.395c-5.332 3.213-14.084 6.461-29.221 7.16-6.941.322-43.426-3.801-66.406-7.338-17.52-2.695-36.346-3.469-42.986-3.385-17.135.219-39.456 4.363-48.475 16.031 5.332-3.215 14.084-6.461 29.22-7.162 6.942-.32 43.426 3.803 66.406 7.338 17.52 2.697 36.346 3.471 42.986 3.385 17.136-.217 39.456-4.362 48.476-16.029z" fill="#33348e"/><path d="M189.922 117.061c-5.332 3.213-14.084 6.461-29.221 7.16-6.941.322-43.426-3.801-66.406-7.338-17.52-2.695-36.346-3.469-42.986-3.385-17.135.219-39.456 4.363-48.475 16.029 5.332-3.213 14.084-6.459 29.22-7.16 6.942-.322 43.426 3.801 66.406 7.338 17.52 2.697 36.346 3.469 42.986 3.385 17.136-.219 39.456-4.363 48.476-16.029z" fill="#33348e"/><path d="M152.775 102.465c-13.793-1.049-40.344-4.205-58.48-6.996-17.52-2.696-36.346-3.47-42.986-3.385-5.053.064-10.557.47-16.039 1.311 3.904-28.771 28.676-51.067 58.489-51.067 32.513 0 59.029 26.517 59.029 59.029.001.37-.007.743-.013 1.108z" fill="#cc2229"/></g></svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @livewireScripts
    @yield('scripts')
</body>
</html>
