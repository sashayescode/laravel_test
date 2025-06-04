<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{

    public static function all()
    {
        return [
            ['id' => 1, 'title' => 'Software Engineer', 'location' => 'New York', 'salary' => '$50k - $70k'],
            ['id' => 2, 'title' => 'Web Developer', 'location' => 'Los Angeles', 'salary' => '$60k - $80k'],
            ['id' => 3, 'title' => 'Data Analyst', 'location' => 'Chicago', 'salary' => '$55k - $75k'],
        ];
    }

    public static function find($id)
    {
       return Arr::first(Job::all(), function ($job) use ($id){
        return $job['id'] == $id;
    });
    }
}