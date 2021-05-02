<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="overflow-y-hidden bg-gray-100 dark:bg-gray-700">
    <div class="flex flex-col h-screen">
        <div
            class="flex items-center justify-between flex-none px-5 py-2 text-sm text-gray-400 bg-white dark:bg-gray-900">
            <div>Logo</div>
            <div class="flex items-center space-x-2">
                <button id="switchTheme" class="border-none">
                    <span id="sun" class="">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </span>
                    <span id="moon" class="hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                            </path>
                        </svg>
                    </span>
                </button>
                <button>
                    <svg class="w-6 h-6 text-white dark:text-gray-900" fill="#808080" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                        </path>
                    </svg>
                </button>
                <button class="h-auto rounded-full">
                    <img src="{{ asset('test/user.jpg') }}" alt="Abdullahi" class="w-6 h-6 rounded-full">
                </button>
                <div class="">
                    <button class="flex items-center space-x-1">
                        <span>Abdullahi JImoh</span>
                        <span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7">
                                </path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-auto">
            <div class="flex flex-col justify-between flex-none px-5 py-5 text-gray-400 bg-white dark:bg-gray-900">
                <div class="flex flex-col space-y-2 divide-y divide-gray-400 divide-opacity-50">
                    <div class="flex flex-col items-center justify-center space-y-0.5">
                        <img class="rounded-full h-14 w-14" src="{{ asset('test/user.jpg') }}" alt="">
                        <span class="text-xs font-medium"> Admin </span>
                    </div>
                    <ul class="py-3 text-sm font-semibold">
                        <li class="my-2">
                            <a href=""
                                class="flex justify-start space-x-3 active:text-purple-900 hover:text-purple-900">
                                <span>
                                    <svg class="w-4 h-4 text-gray-400 active:text-purple-900" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>
                                    </svg>
                                </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="my-2">
                            <a href=""
                                class="flex justify-start space-x-3 active:text-purple-900 hover:text-purple-900">
                                <span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                </span>
                                <span>Users</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <a href="#"
                    class="flex items-center justify-start space-x-3 text-sm font-semibold active:text-purple-900 hover:text-purple-900">
                    <span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                    </span>
                    <span>Logout</span>
                </a>
            </div>
            <div class="relative flex flex-grow dark:text-white">
                <div class="absolute flex flex-col flex-1 w-full h-full p-5 space-y-5 overflow-y-scroll">

                   @yield('body')
                </div>

            </div>
        </div>
    </div>
    <script>
        document.getElementById('switchTheme').addEventListener('click', function() {
            let htmlClasses = document.querySelector('html').classList;
            let sun = document.getElementById('sun');
            let moon = document.getElementById('moon');
            if (localStorage.theme == 'dark') {
                htmlClasses.remove('dark');
                localStorage.removeItem('theme')
            } else {
                htmlClasses.add('dark');
                localStorage.theme = 'dark';
            }
        });
        if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark')
        } else if (localStorage.theme === 'dark') {
            document.querySelector('html').classList.add('dark')
        }

    </script>
</body>

</html>
