<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <x-slot:title>About</x-slot:title>
<div class="space-y-4">

    @foreach($jobs as $job)
        <a href="/jobs/{{ $job->id }}" class="block px-4 py-6 border border-gray-300 rounded-lg">
           <div class="font-bold text-blue-500 text-sm">{{$job->employer->name}}</div>
            <div>
            <strong>{{$job['title']}}:</strong> pays {{$job['salary']}} per year.
            </div>
        </a>
    @endforeach
        <div>{{$jobs->links()}}</div>
</div>
</x-layout>
