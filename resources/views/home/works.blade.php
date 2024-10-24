@extends('layouts.default')

@section('content')
    <div class="lg:mt-40 mt-28">
        <div class="relative">
            <img src="{{ URL::asset('/image/works-landing.jpg') }}" alt="works-landing"
                class="w-full lg:h-[500px] h-[300px] object-cover">
            <div class="absolute inset-0 flex justify-center items-center bg-blue-900 bg-opacity-90">
                <h1 class="text-white-900 text-center lg:text-8xl text-6xl font-bold font-dmSerif">More and More Arts</h1>
            </div>
        </div>

        <div class="font-semibold font-lora">
            <form method="GET" action="{{ route('home.works') }}">
                <div
                    class="flex flex-wrap justify-center gap-4 lg:mx-80 mx-24 mt-12 text-sm lg:text-md {{ request('category') == '' ? 'text-black-900' : 'text-gray-400' }}">
                    <button type="submit" name="category" value="">
                        All Categories
                    </button>
                    @foreach ($categories as $category)
                        <span class="lg:mx-2 text-gray-400">|</span>
                        <button type="submit" name="category" value="{{ $category->id }}"
                            class="{{ request('category') == $category->id ? 'text-black-900' : 'text-gray-400' }}">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>
            </form>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 my-14 ml-14 mr-14">
            @forelse  ($projects as $project)
                <div class="relative group aspect-square mx-2 mt-4 shadow-md">
                    @if ($project->first_image_url)
                        <a href="{{ route('home.works.detail', $project->id) }}">
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
                <div class="alert alert-danger text-center">
                    Project data is empty.
                </div>
            @endforelse
        </div>
    </div>
@endsection
