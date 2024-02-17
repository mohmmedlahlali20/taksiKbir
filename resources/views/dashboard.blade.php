<x-app-layout>
    @role('Chaufeur')
        <x-slot name="slot">
            <!-- Your content for the Chaufeur role -->
        </x-slot>
    @endrole

    @role('passager')
    <x-slot name="slot">
        <div class="container mx-auto px-4 py-24">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Find your <span class="text-indigo-600">Route</span> to Travel!
                </h1>
                <p class="text-lg text-gray-600">Discover and select your desired travel route.</p>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-center">
                <!--Left Col-->
                <div class="w-full md:w-1/2 mb-8 md:mb-0">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <form action="{{ route('search') }}" method="GET">
                            <label for="route" class="block text-gray-700 mb-2">Select Route:</label>
                            <select name="route" id="route" onchange="this.form.submit()" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4">
                                <option value="" disabled selected>Select your travel</option>
                                @foreach($routes as $item)
                                    <option value="{{ $item->id }}">{{ $item->startcity->name }} to {{ $item->endcity->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
                <!--Right Col-->
                <div class="w-full md:w-1/2">
                    <div class="bg-indigo-600 text-white rounded-lg shadow-md p-8">
                        <h2 class="text-2xl md:text-3xl font-bold mb-4">Your Travels</h2>
                        <p class="text-lg">Explore the available options for your journey.</p>
                    </div>
                </div>
            </div>

            <div class="mt-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Your Favorites</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @forelse ($horrs as $item)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ asset('storage/' . $item->driver_taxi->image) }}" alt="Driver Image" class="w-full h-56 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Driver: {{ $item->driver_taxi->user->name }}</h3>
                                <p class="text-gray-700 mb-4">Matricule: {{ $item->driver_taxi->matricule }}</p>
                                <p class="text-gray-700 mb-4">Seats: {{ $item->driver_taxi->number_seets }}</p>
                                <p class="text-gray-700 mb-4">Price: {{ $item->price }}DH</p>
                                <p class="text-gray-700 mb-4 border-t pt-4">{{ $item->driver_taxi->description }}</p>
                                <p class="text-gray-700 mt-4">Created at: {{ $item->created_at }}</p>
                                <form action="{{ route('Reservation.store') }}" method="POST" class="mt-4">
                                    @csrf
                                    <input type="hidden" name="horaire_id" value="{{ $item->id }}">
                                    <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Reserve</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md text-center">
                            <p>There are no favorites for you.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            @if(isset($hors))
                <div class="mt-16">
                    <x-search :hores='$hors' :rout="$rout" />
                </div>
            @endif
        </div>
    </x-slot>
@endrole

</x-app-layout>
