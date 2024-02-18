<nav x-data="{ open: false }" class="bg-gray-200 ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-around h-16">
            <div class="flex justify-between ">
                <!-- Logo -->


                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex ">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @role('Admin')
                        <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                            {{ __('admin') }}
                        </x-nav-link>
                    @endrole
                    @role('Chaufeur')
                        <x-nav-link :href="route('Chaufeur.index')" :active="request()->routeIs('Chaufeur.index')">
                            {{ __('Chaufeur') }}
                        </x-nav-link>
                        <x-nav-link :href="route('rate.index')" :active="request()->routeIs('rate.index')">
                            {{ __('your rates') }}
                        </x-nav-link>
                    @endrole
                    @role('passager')
                        <x-nav-link :href="route('passager.index')" :active="request()->routeIs('passager.index')">
                            {{ __('reserver taxi') }}
                        </x-nav-link>
                        <x-nav-link :href="route('Reservation.index')" :active="request()->routeIs('passager.index')">
                            {{ __('votre reservations') }}
                        </x-nav-link>
                    @endrole
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link>
                            {{ __(' nta db ') }}
                            @if (Auth::user()->roles->isNotEmpty())
                                <div class="font-medium text-sm text-gray-500">
                                    {{ Auth::user()->roles->first()->name }}</div>
                            @endif
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>



                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
            <x-dropdown-link>
                {{ __(' nta db ') }}
                @if (Auth::user()->roles->isNotEmpty())
                    <div class="font-medium text-sm text-gray-500">
                        {{ Auth::user()->roles->first()->name }}</div>
                @endif
            </x-dropdown-link>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
</nav>
@auth
    @role('passager')
        <div class="bg-gray-100 min-h-screen mt-10 flex flex-col justify-between">
            <div class="flex flex-col items-center justify-center h-full">
                <div class="text-center">
                    <h1 class="text-5xl font-extrabold text-gray-800 mb-4">Welcome to</h1>
                    <h2 class="text-7xl font-extrabold text-green-700 mb-8">Mon Grand Taxi</h2>
                    <p class="text-lg text-gray-600 mb-8">Your ultimate choice for safe, reliable, and comfortable
                        transportation.</p>
                    <div class="max-w-3xl px-8 py-6 bg-white shadow-md rounded-lg text-gray-800">
                        <h3 class="text-3xl font-semibold mb-4">Why Choose Us?</h3>
                        <p class="text-lg mb-4">At Mon Grand Taxi, we prioritize your safety and comfort above all else. With
                            our professional drivers, modern vehicles, and efficient service, you can trust us to get you to
                            your destination safely and on time.</p>
                        <p class="text-lg">Whether you need a ride to the airport, a night out on the town, or a business
                            meeting across the city, we've got you covered. Experience the difference with Mon Grand Taxi today!
                        </p>
                    </div>
                    <div class="flex justify-center mt-8 space-x-4">
                        <a href="{{ url('/passager') }}"
                            class="text-lg text-gray-800 font-semibold px-6 py-3 bg-green-500 rounded-lg hover:bg-green-600 transition duration-300">Book
                            Now</a>
                        <a href="#"
                            class="text-lg text-gray-800 font-semibold px-6 py-3 bg-gray-300 rounded-lg hover:bg-gray-400 transition duration-300">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    @endrole
    @role('Chaufeur')
        <div class="flex justify-center">
            <!-- Carte utilisateur -->
            <div class="max-w-xs bg-white shadow-md rounded-lg overflow-hidden m-4">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">User Information</h3>
                    <p class="text-gray-600">Name: {{ Auth::user()->name }}</p>
                    <p class="text-gray-600">Email: {{ Auth::user()->email }}</p>
                    <p class="text-gray-600">Date de creation: {{ Auth::user()->created_at }}</p>
                </div>
            </div>
        </div>
    @endrole

@endauth
