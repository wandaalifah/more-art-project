@extends('layouts.admin')

@section('content')
    <div class="flex justify-center">
        <div class="container mt-5 px-10">
            <p class="text-center font-bold text-2xl my-4">Categories</p>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 flex justify-center">
                                <span>Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr class="bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 align-middle">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->id }}
                            </th>
                            <td class="px-6 py-4 text-gray-900">
                                {{ $category->name }}
                            </td>
                            <td class="flex py-2 space-x-3 justify-center">
                                <a href="{{ route('categories.edit', $category->id) }}">
                                    <button type="button" class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:focus:ring-yellow-900">
                                        Update 
                                    </button>
                                </a>

                                <a href="{{ route('categories.destroy', $category->id) }}">
                                    <button type="button" class="text-white-900 bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Delete
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Category data is empty.
                        </div>
                         @endforelse
                    </tbody>
                </table>
            
            </div>
    
            <div class="flex justify-between items-center mt-4">
                <div class="bg-white-900">
                    {{ $categories->links() }}
                    {{-- {{ $categories->appends(request()->all())->links() }} --}}
                </div>

                {{-- <div class="flex items-center">
                    <ul class="flex items-center -space-x-px h-10 text-base">
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white-900 border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Previous</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white-900 border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white-900 border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white-900 border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white-900 border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white-900 border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Next</span>
                            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <div class="items-center">
                  <a href="{{ route('categories.create') }}" >
                    <button type="button" class="text-white-900 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-md px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Create
                    </button>
                  </a>
                </div>
            </div>
        </div>
    </div>
  
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
@endsection
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
