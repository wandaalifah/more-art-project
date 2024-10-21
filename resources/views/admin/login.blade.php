@extends('layouts.admin')

@section('content')
    <div class="lg:mx-80 mx-10">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="p-4 my-4 rounded bg-red-600 text-white-900">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="post" class="">
            @csrf
            <div class="w-full bg-white-900 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
                <div class="flex justify-center my-6">
                    <a href="{{ url('/') }}">
                        <svg class="w-[45px] h-[45px] text-red-600 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <h5 class="text-xl font-bold text-gray-90 px-12 text-center">Log In</h5>
                <div class="mx-8">
                    <label for="username" class="block mb-2 text-lg font-medium text-gray-900 my-4">Username</label>
                    <input type="text" id="username" name="username" value=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mx-8">
                    <label for="password" class="block mb-2 text-lg font-medium text-gray-900 my-4">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <button type="button" onclick="togglePasswordVisibility('password')"
                            class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-600">
                            <svg fill="#000000" class="w-6 h-6" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 488.85 488.85" xml:space="preserve">
                                <g>
                                    <path d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2
                                  s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025
                                  c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3
                                  C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7
                                  c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex justify-center mx-8 py-8 lg:pb-0 text-center align-middle">
                    <button type="submit"
                        class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-md px-5 py-2.5 text-center">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    function togglePasswordVisibility(inputId) {
        var inputField = document.getElementById(inputId);
        var icon = document.getElementById(inputId + '-icon');
        if (inputField.type === "password") {
            inputField.type = "text";
            icon.innerHTML =
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 0l5.5 6L9 6"></path>`;
        } else {
            inputField.type = "password";
            icon.innerHTML =
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m4 0v4m-4-4V8m0 4l5.5 6L9 6"></path>`;
        }
    }
</script>
