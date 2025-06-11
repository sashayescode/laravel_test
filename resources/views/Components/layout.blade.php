@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <nav class="m-4">
        <ul class="flex justify-around w-1/3">
            <x-nav-link :links="['home', 'about', 'contact']" />
        </ul>
    </nav>
    <h1 class="text-2xl font-bold mb-6">Welcome to {{$page ?? 'No page'}}</h1>

    {{ $slot }}
</body>

</html>