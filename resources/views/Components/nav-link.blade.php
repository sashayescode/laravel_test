@extends('layouts.app')
@php
    use Illuminate\Support\Facades\Route;
@endphp

@props(['type' => 'a', 'links'])

@foreach ($links as $link)
    <li @class([
        'hover:text-blue-400 hover:underline hover:underline-offset-2 text-decoration-400',
        'text-black' => Route::currentRouteName() === $link,
        'text-blue-500' => !(Route::currentRouteName() === $link),

    ])>
    @if ($type === 'a')
        <a href="{{ route($link) }}">{{ucfirst($link)}}</a>
    @elseif($type === 'button')
            <button type="button">{{ucfirst($link)}}</button>
        @endif
    </li>
@endforeach