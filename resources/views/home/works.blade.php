@extends('layouts.default')

@section('content')
    <div class="bg-[#EFF0F2] py-40 my-40 text-center">
        World Hello
        @forelse ($categories as $category)
            <tr
                class="bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 align-middle">
                <td class="px-6 py-4 text-gray-900">
                    {{ $category->name }}
                </td>
                <td class="flex py-2 space-x-3 justify-center">
                    <a href="{{ route('categories.edit', $category->id) }}">
                        <button type="button"
                            class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:focus:ring-yellow-900">
                            Update
                        </button>
                    </a>

                    <a href="{{ route('categories.destroy', $category->id) }}">
                        <button type="button"
                            class="text-white-900 bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
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
    </div>
@endsection
