<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Styles -->

</head>

<body class="antialiased">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white font-semibold">Mon Site</a>

            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-gray-300 hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 text-gray-300 hover:text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-gray-300 hover:text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    @guest
        <div class="bg-white dark:bg-gray-800 ">
            <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                    <span class="block">
                        Welcome in "MonGrandTaxi"
                    </span>
                    <span class="block text-indigo-500">
                        Plateforme de Réservation de Grands Taxis
                    </span>
                </h2>

                <div class="lg:mt-0 lg:flex-shrink-0">
                    <div class=" inline-flex rounded-md shadow">
                        @if (Auth::check())
                            <!-- Si l'utilisateur est connecté -->
                            <a href="{{ url('/dashboard') }}"
                                class="block py-4 px-6 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                                get started
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="block py-4 px-6 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                                get started
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
              <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:h-full md:w-48" src="image-du-chauffeur.jpg" alt="Chauffeur">
              </div>
              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Nombre de chauffeurs</div>
                <div class="block mt-1 text-lg leading-tight font-semibold text-gray-900 dark:text-white">{{ $driversCount }}</div>
              </div>
            </div>
          </div>
          

    @endguest

</body>


</html>
