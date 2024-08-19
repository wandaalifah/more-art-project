@extends('layouts.default')

@section('content')


<div class="bg-[#EFF0F2] py-40 my-40 text-center">
    <h1 class="text-8xl font-dmSerif  ">
    Hi, I'm Fathur.<br>
    An Art Director.
    </h1>

    <p class="font-normal text-4xl font-dmSerif mt-12">
    I'm passionate about crafting experiences that are<br>
    engaging, accessible, and user-centric.
    </p>
</div>

<div class="m-10 px-32">
    <h1 class="text-7xl font-dmSerif p-8 text-center">
        Magnum Opus
    </h1>
    
    <div class="grid gap-y-8 gap-x-8 grid-rows-2 m-10 px-32">
        <div class="flex justify-center gap-x-8">
            <div class="relative group hover:scale-110 transition-transform duration-300 ease-in-out">
                <img class="w-64 rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90" src="/image/Screenshot_9 (1).png" alt="SATU TUJU">
                <div class="absolute inset-0 flex items-center justify-center text-yellow-600 bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-3xl transition-opacity duration-300 ease-in-out hover:font-bold">
                    <span class="text-white text-center">Mahalini X Rizky Febian<br/>Satu Tuju</span>
                </div>
            </div>
            <div class="relative group hover:scale-110 transition-transform duration-300 ease-in-out">
                <img class="w-96 rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90"  src="/image/Screenshot (225).png" alt="Aminlah Bersamaku">
                <div class="absolute inset-0 flex items-center justify-center text-yellow-600 bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-3xl transition-opacity duration-300 ease-in-out hover:font-bold">
                    <span class="text-white text-center">Aminlah Bersamaku</span>
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-x-8">
            <div class="relative group hover:scale-110 transition-transform duration-300 ease-in-out">
                <img class="w-96 rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90" src="/image/Screenshot (209).png" alt="Garis Waktu">
                <div class="absolute inset-0 flex items-center justify-center text-yellow-600 bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-3xl transition-opacity duration-300 ease-in-out hover:font-bold">
                    <span class="text-white text-center">Garis Waktu</span>
                </div>
            </div>
            <div class="relative group hover:scale-110 transition-transform duration-300 ease-in-out">
                <img class="w-64 rounded-3xl transition-transform duration-300 ease-in-out transform hover:bg-opacity-90" src="/image/Screenshot (187).png" alt="Unpopular Kid">
                <div class="absolute inset-0 flex items-center justify-center text-yellow-600 bg-blue-900 bg-opacity-75 opacity-0 group-hover:opacity-100 rounded-3xl transition-opacity duration-300 ease-in-out hover:font-bold">
                    <span class="text-white text-center">Art Director<br/>Unpopular Kid<br/>Music Video</span>
                </div>
            </div>
        </div>
        <div class="flex justify-end m-10">
            <div class="text-white-900 bg-black-900 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2">Check Out More Projects</div>
            <div class="">
                <button type="button" class="text-white bg-yellow-600 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-200 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>  
                </button>
            </div>
        </div>
    </div>
    

 
</div>

 <p class="text-7xl font-dmSerif p-8 text-center">
    Services
    </p>

<div class="mx-16 p-20">
   <div class="grid grid-cols-3 place-items-center">
        <div class="max-w-sm bg-white border bg-blue-900 text-white-900 border-gray-200 rounded-3xl shadow">
            <img class="rounded-t-3xl h-60 overflow-hidden" src="/image/service1.jpg" alt="" />
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Service 1</h5>
                </a>
                <p class="mb-3 font-normal">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border bg-blue-900 text-white-900 border-gray-200 rounded-3xl shadow">
            <img class="rounded-t-3xl h-60 overflow-hidden" src="/image/service2.jpg" alt="" />
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Service 2</h5>
                </a>
                <p class="mb-3 font-normal">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

        <div class="max-w-sm bg-white border bg-blue-900 text-white-900 border-gray-200 rounded-3xl shadow">
            <img class="rounded-t-3xl h-60 overflow-hidden" src="/image/service3.jpg" alt="" />
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Service 3</h5>
                </a>
                <p class="mb-3 font-normal">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>
    </div>
</div>

@endsection