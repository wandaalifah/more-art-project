@extends('layouts.default')

@section('content')
    <div class="bg-[#EFF0F2] lg:mt-40 mt-28 lg:py-32 py-16 text-center w-full flex-col justify-center">
        <h1 class="lg:text-8xl text-4xl font-dmSerif mx-8">
            Hi, I'm Fathur.<br>
            An Art Director.
        </h1>
        <p class="font-normal lg:text-4xl text-md font-lora mt-12 mx-8">
            I'm passionate about crafting experiences that are<br>
            engaging, accessible, and user-centric.
        </p>
    </div>
    <div class="lg:mt-16 mt-10">
        <h1 class="lg:text-7xl text-5xl font-dmSerif lg:pb-8 text-center">
            Magnum Opus
        </h1>
        <div class="grid lg:gap-8 gap-4 grid-rows-2 m-10 lg:px-32">
            <div class="flex justify-center lg:gap-x-8 gap-x-4">
                <div class="relative group">
                    <img class="w-64 rounded-xl lg:rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90"
                        src="/image/Screenshot_9 (1).png" alt="SATU TUJU">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-xl lg:rounded-3xl transition-opacity duration-300 ease-in-out">
                        <span class="text-yellow-600 text-center font-dmSerif mx-8 lg:text-xl text-md">Mahalini X Rizky
                            Febian<br />Satu
                            Tuju</span>
                    </div>
                </div>
                <div class="relative group">
                    <img class="w-96 rounded-xl lg:rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90"
                        src="/image/Screenshot (225).png" alt="Aminlah Bersamaku">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-xl lg:rounded-3xl transition-opacity duration-300 ease-in-out">
                        <span class="text-yellow-600 text-center font-dmSerif mx-8 lg:text-xl text-md">Aminlah
                            Bersamaku</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center lg:gap-x-8 gap-x-4">
                <div class="relative group">
                    <img class="w-96 rounded-xl lg:rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90"
                        src="/image/Screenshot (209).png" alt="Garis Waktu">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-xl lg:rounded-3xl transition-opacity duration-300 ease-in-out">
                        <span class="text-yellow-600 text-center font-dmSerif mx-8 lg:text-xl text-md">Garis Waktu</span>
                    </div>
                </div>
                <div class="relative group">
                    <img class="w-64 rounded-xl lg:rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90"
                        src="/image/Screenshot (187).png" alt="Unpopular Kid">
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-xl lg:rounded-3xl transition-opacity duration-300 ease-in-out">
                        <span class="text-yellow-600 text-center font-dmSerif mx-8 lg:text-xl text-md">Unpopular
                            Kid Music Video</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center lg:mb-10">
                <div class="text-white-900 bg-black-900 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 font-lora">
                    Check Out
                    More Projects</div>
                <div>
                    <a href="{{ route('home.works') }}">
                        <button type="button"
                            class="text-white bg-yellow-600 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-200 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <p class="lg:text-7xl text-5xl font-dmSerif text-center">
        Services
    </p>
    <div class="lg:mx-16 lg:p-20 p-10 lg:flex justify-center items-center lg:gap-4">
        <div class="max-w-sm bg-white border bg-blue-900 text-white-900 border-gray-200 rounded-3xl shadow mx-auto mb-8">
            <img class="rounded-t-3xl max-h-60 overflow-hidden object-cover" src="/image/service1.jpg" alt="" />
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight font-lora">Service 1</h5>
                </a>
                <p class="mb-3 font-normal font-lora">Here are the biggest enterprise technology acquisitions of 2021 so
                    far, in
                    reverse chronological order.</p>
            </div>
        </div>
        <div class="max-w-sm bg-white border bg-blue-900 text-white-900 border-gray-200 rounded-3xl shadow mx-auto mb-8">
            <img class="rounded-t-3xl max-h-60 overflow-hidden" src="/image/service2.jpg" alt="" />
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight font-lora">Service 2</h5>
                </a>
                <p class="mb-3 font-normal  font-lora">Here are the biggest enterprise technology acquisitions of 2021
                    so far, in
                    reverse chronological order.</p>
            </div>
        </div>
        <div class="max-w-sm bg-white border bg-blue-900 text-white-900 border-gray-200 rounded-3xl shadow mx-auto mb-8">
            <img class="rounded-t-3xl max-h-60 overflow-hidden" src="/image/service3.jpg" alt="" />
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight font-lora">Service 3</h5>
                </a>
                <p class="mb-3 font-normal font-lora">Here are the biggest enterprise technology acquisitions of 2021 so
                    far, in reverse chronological order.</p>
            </div>
        </div>
    </div>
@endsection
