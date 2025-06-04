@extends('layouts.app')

<div class="flex flex-col">
    <h2 class="font-bold text-xl">{{$job['title']}}</h2>

    {{$job['salary']}}

    {{$job['location']}}
</div>