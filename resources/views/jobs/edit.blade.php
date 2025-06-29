<x-layout>
    <x-slot:heading>Edit job: {{$job->title}}</x-slot:heading>

    <form method="post" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900"><Title></Title></label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-0 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    value="{{$job->title}}"
                                    class="block min-w-0 grow py-1.5 pr-3 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Shift leader">
                            </div>
                        </div>
                    </div>
                </div>
                @error('title')
                <p class="text-red-500 text-sm font-semibold mt-1.5">{{ $message }}</p>
                @enderror

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-0 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input
                                    type="text"
                                    name="salary"
                                    id="salary"
                                    value="{{$job->salary}}"
                                    class="block min-w-0 grow py-1.5 pr-3 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="janesmith">
                            </div>
                        </div>
                    </div>
                </div>
                @error('salary')
                <p class="text-red-500 text-sm font-semibold mt-1.5">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <div class="flex justify-between">

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a
                    type="button"
                    href="/jobs/{{$job->id}}"
                    class="text-sm/6 font-semibold text-gray-900">Cancel
                </a>
                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update
                </button>
            </div>

            <div class="mt-6 flex items-center ">
                <button
                    class
                    ="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500
            focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    form="delete-form">
                    Delete
                </button>
            </div>

        </div>

    </form>
    <form method="post" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
