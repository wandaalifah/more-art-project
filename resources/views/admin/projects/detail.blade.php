@extends('layouts.admin')

@section('content')
    <div class="bg-white-900 rounded-xl">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="p-4 my-4 rounded bg-red-600 text-white-900">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="text-center text-2xl mb-8 pt-8">Project Name</h1>
        <div class="grid grid-cols-2 px-12">
            <div>
                <div class="flex">
                    <div class="mx-8">
                        <p class="font-bold">Production House</p>
                        <p>PH of Project</p>
                    </div>
                    <div class="mx-8">
                        <p class="font-bold">Agency</p>
                        <p>Agency of Project</p>
                    </div>
                    <div class="mx-8">
                        <p class="font-bold">Client</p>
                        <p>Client of Project</p>
                    </div>
                </div>
                <div class="mx-8 mt-4">
                    <p class="font-bold">Video Link</p>
                    <p>linkcontoh123.com</p>
                </div>
            </div>
            <div>
                <p class="px-24">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </div>
@endsection
