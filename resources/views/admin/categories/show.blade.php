@extends('layouts.admin')

@section('content')
  <div class="px-80">
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li class="p-4 my-4 rounded bg-red-600 text-white-900">{{ $error }}</li> 
        @endforeach
      </ul>
    </div>
    @endif
    
    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
      @csrf
      @method("DELETE")
        <div class="lg:mx-28 bg-white-900 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 text-center">
          <div class="flex justify-center mb-6">
              <a href="{{route('categories.index')}}">
                <svg class="w-[45px] h-[45px] text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z" clip-rule="evenodd"/>
                </svg>            
              </a>
            </div>
          <h5 class="text-xl font-bold text-gray-90 px-12">Delete Category</h5>
          <p class="text-xl font-bold">
            {{$category->id}} - {{ $category->name }} ?
          </p>
          <div class="flex justify-center mx-8 pt-8 align-middle">
            <button type="submit" class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-md px-5 py-2.5 text-center">
              Submit
            </button>
          </div>
        </div>
    </form>
  </div>

  @endsection
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>