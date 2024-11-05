@extends('layouts.default')

@section('content')
    <div class="lg:mt-32 mt-28 mb-20 font-lora">
        <div class="text-center font-lora">
            <h1 class="lg:text-4xl text-2xl font-bold font-dmSerif mx-12 px-8">{{ $project->title }}</h1>
            <p class="mt-4 text-lg">{{ $project->category->name ?? '-' }}</p>
            <hr class="lg:w-96 w-44 border-2 mt-4 rounded-full border-blue-900 mx-auto">
        </div>

        <div class="lg:grid lg:grid-cols-2 lg:px-12 px-6">
            <div class="lg:ml-28 lg:p-12 p-8">
                <p>{{ $project->description ?? '-' }}</p>
            </div>
            <div class="lg:p-12 px-4 m-2">
                <div class="flex">
                    <div class="lg:mx-8 mx-4">
                        <p class="font-bold">Production House</p>
                        <p>{{ $project->ph ?? '-' }}</p>
                    </div>
                    <div class="lg:mx-8 mx-4">
                        <p class="font-bold">Client</p>
                        <p>{{ $project->client ?? '-' }}</p>
                    </div>
                </div>
                <div class="lg:mx-8 mx-4 mt-4">
                    <p class="font-bold">Agency</p>
                    <p>{{ $project->agency ?? '-' }}</p>
                </div>
            </div>
        </div>

        <div class="grid gap-4 px-8 lg:mx-24 lg:m-0 m-8">
            <div class="relative group mx-auto">
                <a href="{{ $project->videoUrl }}" target="_blank">
                    <img id="largeImage" class="h-auto max-w-full rounded-lg max-h-80"
                        src="{{ !empty($images) ? $images[0] : 'error, image fail to appear' }}" alt="activeImage">
                    <div
                        class="rounded-md invisible absolute inset-0 flex items-center justify-center group-hover:bg-yellow-600 group-hover:bg-opacity-80 group-hover:visible group-hover:opacity-100 transition-all duration-150 ease-in-out">
                        <svg fill="#EFF0F2"
                            class="w-24 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out"
                            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 260 180"
                            enable-background="new 0 0 260 180" xml:space="preserve">
                            <path d="M220,2H40C19.01,2,2,19.01,2,40v100c0,20.99,17.01,38,38,38h180c20.99,0,38-17.01,38-38V40C258,19.01,240.99,2,220,2z
                                M102,130V50l68,40L102,130z" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="flex gap-4 overflow-x-auto items-center mt-8 p-8 bg-gray-200 lg:rounded-3xl rounded-xl">
                @foreach ($images as $image)
                    <div class="flex-shrink-0 aspect-video w-48">
                        <img class="h-32 w-full object-cover cursor-pointer shadow-md rounded-md hover:brightness-50 hover:duration-300"
                            src="{{ $image }}" alt="image" onclick="changeImage('{{ $image }}')">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="bg-blue-900 lg:p-12 p-6 lg:my-16 md:my-16 my-4 lg:mx-32 md:mx-16 mx-6 lg:rounded-3xl rounded-xl lg:flex lg:flex-wrap md:flex md:flex-wrap grid grid-cols-2">
            @forelse ($crews as $crew)
                <div class="lg:me-14 md:me-8 me-4 lg:my-4 md:my-4 my-2">
                    <p class="text-yellow-600">{{ $crew->pivot->role }}</p>
                    <p class="text-white-900">{{ $crew->name }}</p>
                </div>
            @empty
                <div class="alert alert-danger">
                    Crew data is empty.
                </div>
            @endforelse
        </div>


        <script>
            function changeImage(src) {
                document.getElementById('largeImage').src = src;
            }
        </script>
    </div>
@endsection
