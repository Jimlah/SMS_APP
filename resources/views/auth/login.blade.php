<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <div>
            <label for="">Username</label><br>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="">Password</label><br>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
