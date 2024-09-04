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
    <header class="bg-white-900 border-gray-200">
        <nav class="bg-white-900 border-gray-200 font-lora">
            <div class=" flex flex-wrap items-center justify-between p-8">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse ">
                    <img src="{{URL::asset('/image/moreart-logo.png')}}" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Home</span>
                </a>
              @auth
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <svg class="w-6 h-6 text-white-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/>
                        </svg>                          
                      </button>
                      <!-- Dropdown menu -->
                      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                        <div class="px-4 py-3 bg-white-900">
                          <span class="block text-sm text-gray-900">Admin</span>
                        </div>
                        <ul class="py-2 bg-white-900" aria-labelledby="user-menu-button">
                          <li>
                            <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-200">
                              Home
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('admin.changePassword') }}" class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-200">
                              Change Password
                            </a>
                          </li>
                          <li>
                            <form action="/admin/logout" method="post">
                              @csrf
                              <button type="submit" class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-200">
                                Sign out
                              </button>
                            </form>
                          </li>
                        </ul>
                      </div>
                    <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white-900">
                    <li>
                      <a href="{{ route('categories.index') }}" class="{{ Request::routeIs('categories.index') ? 'text-blue-700' : 'text-gray-900' }} text-lg rounded md:bg-transparent md:hover:text-blue-700 md:p-0" aria-current="page">Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('projects.index') }}" class="{{ Request::routeIs('projects.index') ? 'text-blue-700' : 'text-gray-900' }} text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('crews.index') }}" class="{{ Request::routeIs('crews.index') ? 'text-blue-700' : 'text-gray-900' }} text-lg rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Crews</a>
                    </li>
                </ul>
                </div>
                @endauth
            </div>
        </nav>
  
    </header>
    <div class="m-12">
        @yield('content')
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
<script>
    //message with toastr
    @if (session()->has('success'))

        toastr.success('{{ session('success') }}', 'Success!');
    @elseif (session()->has('error'))
        toastr.error('{{ session('error') }}', 'Fail!');
    @endif
</script>
</html>