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
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col h-screen">
    <header class="flex justify-center sticky top-0">
        <div class="bg-blue-900 text-white-900 my-10 flex justify-start font-lora w-fit rounded-3xl px-8">
            <img src="{{URL::asset('/image/moreart-logo-alt.png')}}" alt="logo" class="w-8 h-8 mt-3 mr-10">
            <p class="my-2 py-2 px-6 mx-2 bg-gray-400/60 rounded-3xl">Home</p>
            <p class="my-2 py-2 px-6 mx-2">Works</p>
            <p class="my-2 py-2 px-6 mx-2">About</p>
        </div>
    </header>
    <div class="flex-grow">
        @yield('content')
    </div>
    <footer class="">
        <div class="bg-gray-200 py-10 flex justify-between font-lora lg:px-72 md:px-52 sm:px-20 max-sm:px-20">
            <p class="font-bold">2024 Moreart</p>
            <div class="flex space-x-20">
                <div class="space-y-2">
                    <p class="font-bold">Elsewhere</p>
                    <p>Figma</p>
                    <p>Github</p>
                    <p>Posts</p>
                    <p>CV</p>
                    <p>LinkedIn</p>
                </div>
                <div class="space-y-2">
                    <p class="font-bold">Contact</p>
                    <p>Whatsapp</p>
                    <p>Instagram</p>
                    <p>Email</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>