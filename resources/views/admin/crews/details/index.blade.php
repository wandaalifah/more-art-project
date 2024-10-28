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

        <h1 class="text-center text-2xl mb-8 py-8 font-dmSerif font-semibold">{{ $crew->name }}</h1>
    </div>

    <div class="bg-gray-50 my-8 rounded-xl">
        <h1 class="text-2xl text-center p-4 font-dmSerif font-semibold">Adjust the projects for your crew here.</h1>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-gray-50 font-lora">
            <thead class="text-sm text-gray-700 uppercase font-bold">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Project</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3 flex justify-center">
                        <span>Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr
                        class="bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 align-middle">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $project->pivot->id }}
                        </th>
                        <td class="px-6 py-4 text-gray-900">
                            {{ $project->title }}
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            {{ $project->pivot->role }}
                        </td>
                        <td class="flex py-2 space-x-3 justify-center">
                            <a href="{{ route('crews.details.edit', [$crew->id, $project->pivot->id]) }}">
                                <button type="button"
                                    class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:focus:ring-yellow-900">
                                    Update
                                </button>
                            </a>

                            <a href="{{ route('crews.details.destroy', [$crew->id, $project->pivot->id]) }}">
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
            {{ $projects->links() }}
        </div>
        <div class="items-center">
            <a href="{{ route('crews.details.create', $crew->id) }}">
                <button type="button"
                    class="text-white-900 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-md px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Assign Crew
                </button>
            </a>
        </div>
    </div>
@endsection
