<x-layout :page="$name"></x-layout>

<ul>
    @foreach($jobs as $job)
        <li>
            <a href="jobs/{{$job['id']}}"><strong>{{$job['title']}}.</strong> Pays: {{$job['salary']}}</a>

        </li>
    @endforeach
</ul>