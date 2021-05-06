<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS APP</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="flex flex-col items-center justify-center w-full h-screen px-5 space-y-3">
        <form action="{{ route('login.store') }}" method="post" class="flex flex-col p-5 space-y-2 rounded-md shadow-md lg:w-1/4 sm:w-3/4">
            <span class="text-lg font-bold">Login</span>
            <hr class="w-full bg-purple-900 bg-opacity-50">
            @csrf
            <div class="flex flex-col">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="h-10 px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="h-10 px-2 py-1">
            </div>
            <div class="flex flex-row-reverse items-center justify-end gap-x-2">
                <label for="remember_token">Remember Me</label>
                <input type="checkbox" name="remember_token" id="remember_token" class="" value="true"/>
            </div>
            <button type="submit" class="w-full h-10 px-2 py-1 text-lg font-semibold text-white bg-purple-900">Login</button>
            <p>Forget Password? <a href="" class="text-purple-900 hover:text-purple-700">click here</a></p>
        </form>
    </div>
</body>
</html>
