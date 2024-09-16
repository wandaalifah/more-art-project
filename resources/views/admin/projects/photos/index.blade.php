@extends('layouts.admin')


@section('content')
    <a href="/admin/projects"
        class="text-white bg-blue-300 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        back
    </a>


    <div class="flex justify-center">
        <div class="container mt-5 px-10">
            <form class="bg-slate-400 border-2 border-slate-400 rounded-md px-1" method="POST" action=""
                enctype="multipart/form-data">
                @csrf
                <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">
                    Upload Image
                </label>


                <input
                    class="block w-full  mb-1 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file" name="photos[]" multiple>

                <div class="text-end">
                    <button type="submit"
                        class="text-white bg-slate-300 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Save Image
                    </button>
                </div>

            </form>
            <p class="text-center font-bold text-2xl my-4">Project Photos</p>

            <div class="">
                <div class="grid grid-cols-3 gap-10 ">
                    @foreach ($media as $item)
                        <div class="container relative">
                            <img class="h-4/5 mx-auto object-none object-center" src="{{ asset($item->url) }}"
                                alt="">
                            <form action="/admin/projects/{{ $project->id }}/photos/{{ $item->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="absolute top-1 right-3 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-1 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
