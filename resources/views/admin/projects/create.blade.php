<!DOCTYPE html>
<html lang="en">
<head>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Project</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
  <div class="container">

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
        <div class="justify-center text-center p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Create Project
          </h5>
          {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
          <div class="form-group">
            <label >Title</label>
            <input type="string" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label >Category</label>
            <input type="number" name="categoryId" class="form-control">
          </div>
          <div class="form-group">
            <label >Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="videoUrl">Video URL</label>
            <input type="text" name="videoUrl" class="form-control" value="{{ old('videoUrl') }}">
        </div>
          <div class="form-group">
              <label >Client</label>
              <input type="string" name="client" class="form-control">
          </div>
          <div class="form-group">
            <label >Agency</label>
            <input type="string" name="agency" class="form-control">
        </div>
        <div class="form-group">
            <label >PH</label>
            <input type="string" name="ph" class="form-control">
        </div>
          <div class="text-center mt-4">
            <input type="submit" class="btn btn-success" value="Submit">
          </div>
        </div>
      </div>
    </form>
  </div>

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