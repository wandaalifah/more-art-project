@extends('layouts.admin')


@section('content')
  <div class="flex justify-center items-center mt-8">

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li> 
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('projects.store') }}" method="post">
      @csrf
      <div class="mt-5">
        <div class="w-full max-w-sm bg-white-900 border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Create Project
          </h5>
          <div class="form-group">
            <label class="block mb-2 text-lg font-medium text-gray-900 my-4">Category</label>
            <select name="categoryId" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="">
                <option value="">--Pilih Category--</option>
                @forelse ( $categories as $category)
                <option value={{$category->id}}>{{$category->name}}</option>
                @empty
                <option value="">Tidak ada Category</option>
                @endforelse
            </select>
          </div>{{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
          <div class="form-group mb-4">
            <label class="block mb-2 text-lg font-medium text-gray-900 my-4">Title</label>
            <input type="string" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          </div>
          <div class="form-group mb-4">
            <label class="block mb-2 text-lg font-medium text-gray-900 my-4">Description</label>
            <textarea name="description" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group mb-4">
            <label for="videoUrl" class="block mb-2 text-lg font-medium text-gray-900 my-4">Video URL</label>
            <input type="text" name="videoUrl" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('videoUrl') }}">
        </div>
          <div class="form-group mb-4">
              <label class="block mb-2 text-lg font-medium text-gray-900 my-4">Client</label>
              <input type="string" name="client" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
          </div>
          <div class="form-group mb-4">
            <label class="block mb-2 text-lg font-medium text-gray-900 my-4">Agency</label>
            <input type="string" name="agency" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="form-group mb-4">
            <label class="block mb-2 text-lg font-medium text-gray-900 my-4">PH</label>
            <input type="string" name="ph" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="text-center mt-6">
          <input type="submit" class="text-white-900 bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-md px-5 py-2.5 text-center" value="Submit">
      </div>
        </div>
      </div>
    </form>
  </div>
  @endsection

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
      //message with toastr
      @if (session()->has('success'))

          toastr.success('{{ session('success') }}', 'BERHASIL!');
      @elseif (session()->has('error'))

          toastr.error('{{ session('error') }}', 'GAGAL!');
      @endif
  </script>
</body>
</html>