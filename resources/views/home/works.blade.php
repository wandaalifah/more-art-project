@extends('layouts.default')

@section('content')
    <div class="my-40">
        <div class="relative">
            <img src="{{ URL::asset('/image/works-landing.jpg') }}" alt="works-landing"
                class="w-full lg:h-[500px] h-[300px] object-cover">
            <div class="absolute inset-0 flex justify-center items-center bg-blue-900 bg-opacity-90">
                <h1 class="text-white-900 text-center lg:text-8xl text-6xl font-bold font-dmSerif">More and More Arts</h1>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 my-14 ml-14 mr-14">
            @forelse  ($projects as $project)
                <div class="relative group aspect-square mx-2 mt-4 shadow-md">
                    @if ($project->first_image_url)
                        <a href="">
                            <img src="{{ $project->first_image_url }}" alt="thumbnail-{{ $project->title }}"
                                class="object-cover w-full h-full">
                            <div
                                class="invisible absolute inset-0 flex items-center justify-center group-hover:bg-yellow-600 group-hover:bg-opacity-80 group-hover:visible group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                <h2
                                    class="text-blue-900 text-2xl font-bold font-lora opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    {{ $project->title }}</h2>
                            </div>
                        </a>
                    @else
                        <div class="h-full w-full bg-gray-300 flex items-center justify-center">
                            <p>No image available</p>
                        </div>
                    @endif
                </div>

            @empty
                <div class="alert alert-danger">
                    Project data is empty.
                </div>
            @endforelse
        </div>
    </div>
@endsection
