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
                <div class="absolute flex flex-col flex-1 h-full p-5 space-y-5 overflow-y-scroll">

                    {{-- Body  start --}}
                    <div class="grid grid-cols-4 gap-x-5">
                        <div
                            class="flex items-center justify-start col-span-1 p-5 space-x-5 bg-white rounded-md dark:bg-gray-900">
                            <span class="p-2 bg-blue-400 rounded-full ">
                                <svg class="w-10 h-10 text-white dark:text-gray-900" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span class="flex flex-col justify-center">
                                <span>12</span>
                                <span>Users</span>
                            </span>
                        </div>
                        <div
                            class="flex items-center justify-start col-span-1 p-5 space-x-5 bg-white rounded-md dark:bg-gray-900">
                            <span class="p-2 bg-green-400 rounded-full">
                                <svg class="w-10 h-10 text-white dark:text-gray-900" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span class="flex flex-col justify-center">
                                <span>12</span>
                                <span>Students</span>
                            </span>
                        </div>
                        <div
                            class="flex items-center justify-start col-span-1 p-5 space-x-5 bg-white rounded-md dark:bg-gray-900">
                            <span class="p-2 bg-indigo-400 rounded-full">
                                <svg class="w-10 h-10 text-white dark:text-gray-900" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span class="flex flex-col justify-center">
                                <span>12</span>
                                <span>Teachers</span>
                            </span>
                        </div>
                        <div
                            class="flex items-center justify-start col-span-1 p-5 space-x-5 bg-white rounded-md dark:bg-gray-900">
                            <span class="p-2 bg-purple-400 rounded-full">
                                <svg class="w-10 h-10 text-white dark:text-gray-900" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </span>
                            <span class="flex flex-col justify-center">
                                <span>12</span>
                                <span>Guardians</span>
                            </span>
                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="grid grid-cols-12">
                        <div class="p-5 bg-white rounded-md col-span-full dark:bg-gray-900">
                            <div class="flex justify-between mb-2">
                                <form action="" method="get" class="flex items-center px-1 bg-gray-100 rounded-md">
                                    <input type="search" name="q"
                                        class="p-1 text-black bg-transparent border-none outline-none"
                                        placeholder="Search">
                                    <button type="submit" class="bg-transparent border-none outline-none">
                                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </button>
                                </form>
                                <button
                                    class="flex items-center justify-center px-2 py-1 bg-purple-900 rounded-md hover:bg-purple-700">
                                    <span>
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                    </span>
                                    <span class="text-lg text-white">Add</span>
                                </button>
                            </div>
                            <table class="table w-full text-base font-normal border-collapse table-auto">
                                <thead class="font-semibold text-left">
                                    <tr>
                                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">ID</th>
                                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Firstname</th>
                                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Lastname</th>
                                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">State</th>
                                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">City</th>
                                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">1</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">2</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">3</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">4</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">5</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">6</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">7</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">8</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indiana</td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">Indianapolis
                                        </td>
                                        <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                            <span class="flex items-center justify-start space-x-2">
                                                <button class="p-1 bg-green-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-blue-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 bg-red-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="flex items-center justify-start py-2">
                                <button class="p-1 bg-purple-400 rounded-full">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <span class="p-1 rounded-full">1</span>
                                <button class="p-1 bg-purple-900 rounded-full">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- end Table --}}

                    <div class="grid grid-cols-1">
                        <div
                            class="flex items-center justify-center w-full p-5 bg-white rounded-md col-span-full dark:bg-gray-900">
                            <form action="" method="get" class="flex flex-col w-3/4 space-y-5">
                                <div class="flex flex-col w-full divide-y-2 divide-gray-500 divide-opacity-50">
                                    <span class="text-2xl font-bold ">
                                        Profile
                                    </span>
                                    <div class="w-full pt-3">
                                        <div class="grid grid-cols-2 gap-5 text-black dark:text-white ">
                                            <div class="flex justify-start w-full col-span-1 md:flex-col">
                                                <label for="firstname" class="text-sm font-bold ">First Name</label>
                                                <input type="text" name="firstname" id="firstname"
                                                    class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                                            </div>
                                            <div class="flex flex-col justify-start w-full col-span-1">
                                                <label for="lastname" class="text-sm font-bold">Last Name</label>
                                                <input type="text" name="lastname" id="lastname"
                                                    class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                                            </div>
                                            <div class="flex flex-col justify-start w-full col-span-1">
                                                <label for="middlename" class="text-sm font-bold">Middle Name</label>
                                                <input type="text" name="middlename" id="middlename"
                                                    class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-5 text-black dark:text-white ">
                                    <div class="flex justify-start w-full col-span-1 col-start-2 space-x-2">
                                        <button type="reset" class="flex-none p-2 bg-transparent border-2 border-purple-500">Reset</button>
                                        <button type="reset" class="flex-grow p-2 text-white bg-purple-900 hover:bg-opacity-50">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid eius pariatur
                        recusandae repellat debitis iste inventore, repudiandae, aspernatur
                        impedit tempora eum quia atque odio enim voluptatem in mollitia eos tempore?
                    </div>

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
