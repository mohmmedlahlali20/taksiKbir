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

<body class="leading-normal bg-yellow-600 tracking-normal gradient" style="font-family: 'Source Sans Pro', sans-serif;">

    <nav id="header" class="fixed w-full z-30 top-0 text-white bg-black ">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="#">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#FFFFFF"
                            d="M474.2,193.5L418,81.6c-5.6-9.4-14.7-15.5-25.1-16.8l-43-5.2c-0.1,0-0.3,0-0.4,0H223.5c-0.1,0-0.3,0-0.4,0l-42.5,5.2 c-10.4,1.3-19.5,7.4-25.1,16.8l-56.1,91.9c-1.8,3-2.7,6.5-2.7,10.1v29.4c0,12.8,10.4,23.2,23.2,23.2h12.5v77.8 c0,16.1,13.1,29.2,29.2,29.2h56.1c16.1,0,29.2-13.1,29.2-29.2v-27.2h140.8v27.2c0,16.1,13.1,29.2,29.2,29.2h56.1 c16.1,0,29.2-13.1,29.2-29.2v-77.8h12.5c12.8,0,23.2-10.4,23.2-23.2v-29.4C476.9,200,475.9,196.5,474.2,193.5z M306.5,302.3 c-11.1,0-20.1-9-20.1-20.1s9-20.1,20.1-20.1s20.1,9,20.1,20.1S317.6,302.3,306.5,302.3z M405.8,174.4h-91.9l49.3-80.8h42.5 L405.8,174.4z M185.9,174.4h-91.9L80.7,93.6h42.5L185.9,174.4z M133.6,282.5c0,7-5.7,12.7-12.7,12.7c-7,0-12.7-5.7-12.7-12.7 s5.7-12.7,12.7-12.7C127.9,269.8,133.6,275.5,133.6,282.5z M378.2,282.5c0,7-5.7,12.7-12.7,12.7s-12.7-5.7-12.7-12.7s5.7-12.7,12.7-12.7 S378.2,275.5,378.2,282.5z" />
                    </svg>

                    MonGrandTaxi
                </a>
            </div>

            @if (Route::has('login'))
                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                    id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            @auth
                                <a class="inline-block py-2 px-4 text-white font-bold no-underline"
                                    href="{{ url('/dashboard') }}">Home</a>
                            @else
                            </li>
                            @if (Route::has('register'))
                                <li class="mr-3">
                                    <a class="inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                                        href="{{ route('register') }}">register</a>
                                </li>
                                @if (Route::has('register'))
                                    <a href="{{ route('login') }}"
                                        class="inline-block text-white no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Login</a>
                                @endif
                            @endif
                        @endauth
            @endif
            </ul>
        </div>
        <hr class="border-b border-gray-100 bg-white   opacity-25 my-0 py-0" />
    </nav>
    @guest

        <div class="bg-white dark:bg-gray-800  mt-7">
            <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                    <span class="block">
                        Want to be millionaire ?
                    </span>
                    <span class="block text-indigo-500">
                        It&#x27;s today or never.
                    </span>
                </h2>

            </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse bg-white sm:flex-row">
            <div class="w-full bg-white sm:w-1/2 p-6 mt-6">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 410 410" xml:space="preserve" width="800px"
                    height="400px" fill="#000000">

                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                    <g id="SVGRepo_iconCarrier">
                        <g id="XMLID_1835_">
                            <path id="XMLID_1850_" style="fill:#000000;"
                                d="M75,232.5c13.326,0,25.294,5.797,33.534,15.002H170V247.5v-30v-100h-40H70l-30,70 H0v30h30v30H0v0.002h41.466C49.706,238.297,61.674,232.5,75,232.5z M89.782,147.5H155v40H72.639L89.782,147.5z" />
                            <rect id="XMLID_1853_" x="170" y="247.5" style="fill:#000000;" width="30" height="0.002" />
                            <path id="XMLID_1854_" style="fill:#000000;"
                                d="M320,187.5l-50-70h-60h-40v100h30v30h30v-30h30v30h-30v0.002h71.466 c8.24-9.205,20.208-15.002,33.534-15.002s25.294,5.797,33.534,15.002H410V247.5h-20l-10-30h30v-10L320,187.5z M185,187.5v-40 h69.561l28.571,40H185z" />
                            <path id="XMLID_1857_" style="fill:#ACABB1;"
                                d="M0,247.502V277.5h30c0-11.527,4.339-22.037,11.466-29.998H0z" />
                            <path id="XMLID_1858_" style="fill:#ACABB1;"
                                d="M170,247.502h-61.466C115.661,255.463,120,265.973,120,277.5h80v-29.998H170z" />
                            <path id="XMLID_1859_" style="fill:#ACABB1;"
                                d="M230,247.502V277.5h60c0-11.527,4.339-22.037,11.466-29.998H230z" />
                            <path id="XMLID_1860_" style="fill:#ACABB1;"
                                d="M380,277.5h30v-29.998h-41.466C375.661,255.463,380,265.973,380,277.5z" />
                            <path id="XMLID_1861_" style="fill:#616064;"
                                d="M52.5,277.5c0-12.427,10.073-22.5,22.5-22.5v-22.5 c-13.326,0-25.294,5.797-33.534,15.002C34.339,255.463,30,265.973,30,277.5c0,24.853,20.147,45,45,45V300 C62.573,300,52.5,289.927,52.5,277.5z" />
                            <path id="XMLID_1862_" style="fill:#565659;"
                                d="M75,232.5V255c12.427,0,22.5,10.073,22.5,22.5S87.427,300,75,300v22.5 c24.852,0,45-20.147,45-45c0-11.527-4.339-22.037-11.466-29.998C100.294,238.297,88.326,232.5,75,232.5z" />
                            <path id="XMLID_1863_" style="fill:#CDCDD0;"
                                d="M52.5,277.5c0,12.427,10.073,22.5,22.5,22.5v-45 C62.573,255,52.5,265.073,52.5,277.5z" />
                            <path id="XMLID_1864_" style="fill:#ACABB1;"
                                d="M75,300c12.427,0,22.5-10.073,22.5-22.5S87.427,255,75,255V300z" />
                            <path id="XMLID_1865_" style="fill:#616064;"
                                d="M312.5,277.5c0-12.427,10.073-22.5,22.5-22.5v-22.5 c-13.326,0-25.294,5.797-33.534,15.002C294.339,255.463,290,265.973,290,277.5c0,24.853,20.147,45,45,45V300 C322.573,300,312.5,289.927,312.5,277.5z" />
                            <path id="XMLID_1866_" style="fill:#565659;"
                                d="M335,232.5V255c12.427,0,22.5,10.073,22.5,22.5S347.427,300,335,300v22.5 c24.852,0,45-20.147,45-45c0-11.527-4.339-22.037-11.466-29.998C360.294,238.297,348.326,232.5,335,232.5z" />
                            <path id="XMLID_1867_" style="fill:#CDCDD0;"
                                d="M312.5,277.5c0,12.427,10.073,22.5,22.5,22.5v-45 C322.573,255,312.5,265.073,312.5,277.5z" />
                            <path id="XMLID_1868_" style="fill:#ACABB1;"
                                d="M335,300c12.427,0,22.5-10.073,22.5-22.5S347.427,255,335,255V300z" />
                            <polygon id="XMLID_1869_" style="fill:#FFFFFF;"
                                points="155,147.5 89.782,147.5 72.639,187.5 155,187.5 " />
                            <polygon id="XMLID_1870_" style="fill:#FFFFFF;"
                                points="185,147.5 185,187.5 283.133,187.5 254.561,147.5 " />
                            <rect id="XMLID_1871_" y="217.5" style="fill:#FF5023;" width="30" height="30" />
                            <polygon id="XMLID_1872_" style="fill:#FF5023;"
                                points="390,247.5 410,247.5 410,217.5 380,217.5 " />
                            <polygon id="XMLID_1873_" style="fill:#565659;"
                                points="210,117.5 210,87.5 130,87.5 130,117.5 170,117.5 " />
                            <rect id="XMLID_1874_" x="170" y="217.5" style="fill:#565659;" width="30"
                                height="30" />
                            <polygon id="XMLID_1875_" style="fill:#565659;"
                                points="230,247.5 200,247.5 200,247.502 200,277.5 230,277.5 230,247.502 " />
                            <rect id="XMLID_1876_" x="230" y="217.5" style="fill:#565659;" width="30"
                                height="30" />
                        </g>
                    </g>

                </svg>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6 bg-white">
                <div class="align-middle">
                    <h3 class="text-3xl text-black font-bold leading-none mb-3">
                        The Unsung Hero: Taxi Drivers
                    </h3>
                    <p class="text-black mb-8">
                        In the bustling cityscape, amidst the chaos and constant motion, taxi drivers stand as unsung
                        heroes, navigating the labyrinth of streets to get us safely to our destinations. Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        <br />
                        <br />
                        Whether it's the early morning rush to the airport, the late-night return from work, or the
                        spontaneous weekend adventures, taxi drivers are the silent companions on our journey through life.
                        Their vehicles become transient sanctuaries, witnessing


                        <a class="text-yellow-500 underline" href="{{ url('/dashboard') }}">MonGrandTaxi</a>
                    </p>
                    <div class="lg:mt-0 lg:flex-shrink-0">
                        <div class=" inline-flex rounded-md shadow">
                            <button type="button"
                                class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Get started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Mon Grand Taxi
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                                xGETTING STARTED
                            </p>
                            <div class="w-full font-bold text-xl text-gray-800 px-6">
                                Lorem ipsum dolor sit amet.
                            </div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                                posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="flex items-center justify-start">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Action
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                                xGETTING STARTED
                            </p>
                            <div class="w-full font-bold text-xl text-gray-800 px-6">
                                Lorem ipsum dolor sit amet.
                            </div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                                posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="flex items-center justify-center">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Action
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                                xGETTING STARTED
                            </p>
                            <div class="w-full font-bold text-xl text-gray-800 px-6">
                                Lorem ipsum dolor sit amet.
                            </div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                                posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="flex items-center justify-end">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Action
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-8">
            <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Pricing
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
                    <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                        <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                            <div class="p-8 text-3xl font-bold text-center border-b-4">
                                Free
                            </div>
                            <ul class="w-full text-center text-sm">
                                <li class="border-b py-4">Thing</li>
                                <li class="border-b py-4">Thing</li>
                                <li class="border-b py-4">Thing</li>
                            </ul>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                            <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                                £0
                                <span class="text-base">for one user</span>
                            </div>
                            <div class="flex items-center justify-center">
                                <button
                                    class="mx-auto lg:mx-0 hover:underline gradient text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                            <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
                            <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                            <ul class="w-full text-center text-base font-bold">
                                <li class="border-b py-4">Thing</li>
                                <li class="border-b py-4">Thing</li>
                                <li class="border-b py-4">Thing</li>
                                <li class="border-b py-4">Thing</li>
                            </ul>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                            <div class="w-full pt-6 text-4xl font-bold text-center">
                                £x.99
                                <span class="text-base">/ per user</span>
                            </div>
                            <div class="flex items-center justify-center">
                                <button
                                    class="mx-auto lg:mx-0 hover:underline gradient text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                        <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                            <div class="p-8 text-3xl font-bold text-center border-b-4">
                                Pro
                            </div>
                            <ul class="w-full text-center text-sm">
                                <li class="border-b py-4">Thing</li>
                                <li class="border-b py-4">Thing</li>
                                <li class="border-b py-4">Thing</li>
                            </ul>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                            <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                                £x.99
                                <span class="text-base">/ per user</span>
                            </div>
                            <div class="flex items-center justify-center">
                                <button
                                    class="mx-auto lg:mx-0 hover:underline gradient text-black font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                    <g class="wave" fill="#f8fafc">
                        <path
                            d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                        </path>
                    </g>
                    <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                        <g
                            transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                            <path
                                d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                opacity="0.100000001"></path>
                            <path
                                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                opacity="0.100000001"></path>
                            <path
                                d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                opacity="0.200000003"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>

        <section class="container mx-auto text-center py-6 mb-12">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-black">
                Call to Action
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <h3 class="my-4 text-3xl leading-tight">
                Main Hero Message to sell yourself!
            </h3>
            <button
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action!
            </button>
        </section>
        <!--Footer-->
        <footer class="bg-white">
            <div class="container mx-auto px-8">
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="flex-1 mb-6 text-black">
                        <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="#">
                            <!--Icon from: http://www.potlabicons.com/ -->
                            <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="#FFFFFF"
                                    d="M474.2,193.5L418,81.6c-5.6-9.4-14.7-15.5-25.1-16.8l-43-5.2c-0.1,0-0.3,0-0.4,0H223.5c-0.1,0-0.3,0-0.4,0l-42.5,5.2 c-10.4,1.3-19.5,7.4-25.1,16.8l-56.1,91.9c-1.8,3-2.7,6.5-2.7,10.1v29.4c0,12.8,10.4,23.2,23.2,23.2h12.5v77.8 c0,16.1,13.1,29.2,29.2,29.2h56.1c16.1,0,29.2-13.1,29.2-29.2v-27.2h140.8v27.2c0,16.1,13.1,29.2,29.2,29.2h56.1 c16.1,0,29.2-13.1,29.2-29.2v-77.8h12.5c12.8,0,23.2-10.4,23.2-23.2v-29.4C476.9,200,475.9,196.5,474.2,193.5z M306.5,302.3 c-11.1,0-20.1-9-20.1-20.1s9-20.1,20.1-20.1s20.1,9,20.1,20.1S317.6,302.3,306.5,302.3z M405.8,174.4h-91.9l49.3-80.8h42.5 L405.8,174.4z M185.9,174.4h-91.9L80.7,93.6h42.5L185.9,174.4z M133.6,282.5c0,7-5.7,12.7-12.7,12.7c-7,0-12.7-5.7-12.7-12.7 s5.7-12.7,12.7-12.7C127.9,269.8,133.6,275.5,133.6,282.5z M378.2,282.5c0,7-5.7,12.7-12.7,12.7s-12.7-5.7-12.7-12.7s5.7-12.7,12.7-12.7 S378.2,275.5,378.2,282.5z" />
                            </svg>
                            LANDING
                        </a>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Links</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Social</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <p class="uppercase text-gray-500 md:mb-6">Company</p>
                        <ul class="list-reset mb-6">
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official
                                    Blog</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    @endguest

</body>


</html>
