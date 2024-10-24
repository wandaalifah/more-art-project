@extends('layouts.default')

@section('content')
    <div class="my-40">
        <div class="">
            <a href="" class="">
                <img src="{{ URL::asset('/image/works-landing.jpg') }}" alt="works-landing"
                    class="w-full lg:h-[500px] h-[300px] object-cover">
            </a>
        </div>

        <div class="m-12 text-center">
            <h1 class="text-4xl font-bold">{{ $project->title }}</h1>
            <p class="mt-4 text-lg">{{ $project->category->name }}</p>
            <hr class="w-96 border-2 mt-4 rounded-full border-blue-900 mx-auto">
        </div>

        <div class="grid grid-cols-2 px-12">
            <div>
                <p class="px-24">{{ $project->description }}</p>
            </div>
            <div>
                <div class="flex">
                    <div class="mx-8">
                        <p class="font-bold">Production House</p>
                        <p>{{ $project->ph }}</p>
                    </div>
                    <div class="mx-8">
                        <p class="font-bold">Client</p>
                        <p>{{ $project->client }}</p>
                    </div>
                </div>
                <div class="mx-8 mt-4">
                    <p class="font-bold">Agency</p>
                    <p>{{ $project->agency }}</p>
                </div>
            </div>
        </div>

        <div class="bg-blue-900 p-12 m-24 rounded-3xl flex flex-wrap">
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
            <div class="me-14 my-4">
                <p class="text-yellow-600">Director</p>
                <p class="text-white-900">Mahmud Efendi</p>
            </div>
        </div>

        <div class="flex justify-center">
            <img class="max-h-80" src="{{ URL::asset('/image/works-landing.jpg') }}" alt="">
        </div>
    </div>
@endsection
