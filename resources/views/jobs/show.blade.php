<x-layout>
    <x-slot:heading>About Us</x-slot:heading>

    <h2 class="font-bold text-lg"> {{ $job->title }}</h2>
    <p>This jobs pays {{ $job->salary }} per year.</p>

    @can('check', $job)
        <x-button href="/jobs/{{$job->id}}/edit" class="mt-5">Edit</x-button>
    @endcan





</x-layout>
