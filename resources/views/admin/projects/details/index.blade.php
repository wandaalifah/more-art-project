@extends('layouts.admin')

@section('content')
    <div class="bg-white-900 rounded-xl">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="p-4 my-4 rounded bg-red-600 text-white-900">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="text-center text-2xl mb-8 pt-8 font-dmSerif font-semibold">{{ $project->title }}</h1>
        <div class="grid grid-cols-2 px-12 pb-8 font-lora">
            <div>
                <div class="flex">
                    <div class="mx-8">
                        <p class="font-bold">Production House</p>
                        <p>{{ $project->ph ?? '-' }} </p>
                    </div>
                    <div class="mx-8">
                        <p class="font-bold">Agency</p>
                        <p class="{{ $project->agency ? '' : 'text-center' }}">{{ $project->agency ?? '-' }}</p>
                    </div>
                    <div class="mx-8">
                        <p class="font-bold">Client</p>
                        <p>{{ $project->client ?? '-' }}</p>
                    </div>
                </div>
                <div class="mx-8 mt-4">
                    <p class="font-bold">Video Link</p>
                    <a href="{{ $project->videoUrl }}"
                        class="text-blue-600 underline {{ $project->videoUrl ? '' : 'text-center' }}">
                        {{ $project->videoUrl ?? '-' }}
                    </a>
                </div>
            </div>
            <div>
                <p class="px-24">{{ $project->description }}</p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 my-8 rounded-xl">
        <h1 class="text-2xl text-center p-4 font-dmSerif font-semibold">Adjust the crews for your project here.</h1>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-gray-50 font-lora">
            <thead class="text-sm text-gray-700 uppercase font-bold">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3 flex justify-center">
                        <span>Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($crews as $crew)
                    <tr
                        class="bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 align-middle">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $crew->pivot->id }}
                        </th>
                        <td class="px-6 py-4 text-gray-900">
                            {{ $crew->name }}
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            {{ $crew->pivot->role }}
                        </td>
                        <td class="flex py-2 space-x-3 justify-center">
                            <a href="{{ route('projects.details.edit', [$project->id, $crew->pivot->id]) }}">
                                <button type="button"
                                    class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:focus:ring-yellow-900">
                                    Update
                                </button>
                            </a>

                            <a href="{{ route('projects.details.destroy', [$project->id, $crew->pivot->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button"
                                    class="text-white-900 bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Crew data is empty.
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="flex justify-between items-center mt-4 font-lora">
        <div class="bg-white-900 rounded-lg">
            {{ $crews->links() }}
        </div>
        <div class="items-center">
            <a href="{{ route('projects.details.create', $project->id) }}">
                <button type="button"
                    class="text-white-900 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-md px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Create
                </button>
            </a>
        </div>
    </div>
@endsection
