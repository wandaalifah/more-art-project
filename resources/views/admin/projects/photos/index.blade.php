@extends('layouts.admin')


@section('content')
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
                <div class="grid grid-cols-3 gap-10">
                    @foreach ($media as $item)
                        <img class="h-3/4 mx-auto" src="{{ asset($item->url) }}" alt="">
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
