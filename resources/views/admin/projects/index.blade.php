@extends('layouts.admin')

@section('content')
    <div class="flex justify-center">
        <div class="container mt-5 px-10">
            <p class="text-center font-semibold text-2xl my-4 font-dmSerif">Projects</p>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg font-lora">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Title</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3">URL</th>
                            <th scope="col" class="px-6 py-3">Client</th>
                            <th scope="col" class="px-6 py-3">Agency</th>
                            <th scope="col" class="px-6 py-3">PH</th>
                            <th scope="col" class="px-6 py-3 flex justify-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr
                                class="bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 align-middle">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $project->id }}
                                </th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $project->title }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $project->category->name }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ Str::limit($project->description, 80) }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $project->videoUrl }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $project->client }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $project->agency ?? '-' }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $project->ph ?? '-' }}
                                </td>
                                <td class="flex py-2 space-x-3 justify-center m-4">
                                    <a href="{{ route('projects.details.index', $project->id) }}">
                                        <button type="button"
                                            class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">
                                            Detail
                                        </button>
                                    </a>
                                    <a href="{{ route('projects.photos.index', $project->id) }}">
                                        <button type="button"
                                            class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">
                                            Photos
                                        </button>
                                    </a>
                                    <a href="{{ route('projects.edit', $project->id) }}">
                                        <button type="button"
                                            class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">
                                            Update
                                        </button>
                                    </a>
                                    <a href="{{ route('projects.destroy', $project->id) }}">
                                        <button type="submit"
                                            class="text-white-900 bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">
                                            Delete
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <div class="alert alert-danger font-lora">
                                        Project data is empty.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="flex justify-between items-center mt-4 font-lora">
                <div class="bg-white-900  rounded-lg">
                    {{ $projects->links() }}
                </div>
                <div class="items-center">
                    <a href="{{ route('projects.create') }}">
                        <button type="button"
                            class="text-white-900 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-md px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Create
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@endpush
