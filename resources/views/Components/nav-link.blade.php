@extends('layouts.app')


<nav class="m-4">
    <ul class="flex justify-around w-1/3">
        @foreach ($links as $link)
        <li class="text-black hover:text-blue-400 hover:underline hover:underline-offset-2 text-decoration-400"><a href="{{ route($link) }}">{{ucfirst($link)}}</a></li>
        @endforeach
    </ul>
</nav>