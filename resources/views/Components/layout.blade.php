<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <x-nav-link :links="['home', 'about', 'contact']" />
    <h1>Welcome to {{$page?? 'No page'}}</h1>

    {{ $slot }}
</body>
</html>