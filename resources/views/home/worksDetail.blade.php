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
            <h1 class="text-4xl font-bold">Project Title</h1>
            <p class="mt-4 text-lg">Project Category</p>
            <hr class="w-96 border-2 mt-4 rounded-full border-blue-900 mx-auto">
        </div>

        <div class="grid grid-cols-2 px-12">
            <div>
                <p class="px-24">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div>
                <div class="flex">
                    <div class="mx-8">
                        <p class="font-bold">Production House</p>
                        <p>PH of Project</p>
                    </div>
                    <div class="mx-8">
                        <p class="font-bold">Production House</p>
                        <p>PH of Project</p>
                    </div>
                </div>
                <div class="mx-8 mt-4">
                    <p class="font-bold">Agency</p>
                    <p>Agency of Project</p>
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
