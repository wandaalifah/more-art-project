<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moreart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @vite('resources/css/app.css')
</head>
<body style="background: lightgray">
    <header class="flex justify-center">
        <div class="bg-blue-900 text-white-900 my-10 flex justify-start font-lora w-fit rounded-3xl px-8">
            <img src="{{URL::asset('/image/moreart-logo-alt.png')}}" alt="logo" class="w-8 h-8 mt-3 mr-10">
            <p class="my-2 py-2 px-6 mx-2 bg-gray-400/60 rounded-3xl">Category</p>
            <p class="my-2 py-2 px-6 mx-2">Project</p>
            <p class="my-2 py-2 px-6 mx-2">Crew</p>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    //message with toastr
    @if (session()->has('success'))

        toastr.success('{{ session('success') }}', 'Success!');
    @elseif (session()->has('error'))
        toastr.error('{{ session('error') }}', 'Fail!');
    @endif
</script>
</html>