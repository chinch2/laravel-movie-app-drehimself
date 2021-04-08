<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joe's Movie App</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1
                    focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-2">
                        <svg class="fill-current w-4 text-gray-500 ml-2" fill="#ffffff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 26 26"><path d="M 10 0.1875 C 4.578125 0.1875 0.1875 4.578125 0.1875 10 C 0.1875 15.421875 4.578125 19.8125 10 19.8125 C 12.289063 19.8125 14.394531 19.003906 16.0625 17.6875 L 16.9375 18.5625 C 16.570313 19.253906 16.699219 20.136719 17.28125 20.71875 L 21.875 25.34375 C 22.589844 26.058594 23.753906 26.058594 24.46875 25.34375 L 25.34375 24.46875 C 26.058594 23.753906 26.058594 22.589844 25.34375 21.875 L 20.71875 17.28125 C 20.132813 16.695313 19.253906 16.59375 18.5625 16.96875 L 17.6875 16.09375 C 19.011719 14.421875 19.8125 12.300781 19.8125 10 C 19.8125 4.578125 15.421875 0.1875 10 0.1875 Z M 10 2 C 14.417969 2 18 5.582031 18 10 C 18 14.417969 14.417969 18 10 18 C 5.582031 18 2 14.417969 2 10 C 2 5.582031 5.582031 2 10 2 Z M 4.9375 7.46875 C 4.421875 8.304688 4.125 9.289063 4.125 10.34375 C 4.125 13.371094 6.566406 15.8125 9.59375 15.8125 C 10.761719 15.8125 11.859375 15.433594 12.75 14.8125 C 12.511719 14.839844 12.246094 14.84375 12 14.84375 C 8.085938 14.84375 4.9375 11.695313 4.9375 7.78125 C 4.9375 7.675781 4.933594 7.574219 4.9375 7.46875 Z"/></svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
