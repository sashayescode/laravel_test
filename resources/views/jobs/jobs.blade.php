<x-layout :page="$name"></x-layout>

<div>
    @foreach($jobs as $job)
        <div class="flex flex-col border-2 border-blue-200 rounded-xl p-4 m-2 *:block">
        <div class="text-blue-400"> {{$job->employer['name']}} </div>
            <a href="jobs/{{$job['id']}}"><strong>{{$job['title']}}.</strong> Pays: {{$job['salary']}}</a>

        </div>
    @endforeach
</div>

{{$jobs->links()}}