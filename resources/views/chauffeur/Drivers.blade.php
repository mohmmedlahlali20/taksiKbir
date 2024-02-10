<x-chauffeur-layout>
    @if (isset($driver) && !empty($driver))
    <div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-xl font-semibold mb-4">User Profile</h1>

    <div class="mb-4">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>

    @if ($driver)
        <h2 class="text-lg font-semibold mb-4">Driver Details</h2>
        <div class="mb-4">
            <p><strong>Description:</strong> {{ $driver->description }}</p>
            <p><strong>Plate Number:</strong> {{ $taxi ? $taxi->plate_number : 'N/A' }}</p>
            <p><strong>Status:</strong> {{ $driver->status }}</p>
            <p><strong>Status:</strong> {{ $route->start_city  }}</p>
            <p><strong>Status:</strong> {{ $route->end_city  }}</p>
            <p><strong>Vehicle Type:</strong> {{ $taxi ? $taxi->vehicle_type : 'N/A' }}</p>
            <p><strong>Payment Method:</strong> {{ $taxi ? $taxi->payment_method : 'N/A' }}</p>
        </div>
    @else
        <p>No driver profile found.</p>
    @endif
</div>

    @else
    <div class="fixed inset-0 flex justify-center items-center">
        <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 flex justify-center items-center flex-wrap" role="alert">
            <p class="font-bold">M3andekch profil asmitek :</p>
            <p class="text-sm">zid zid kmel dak profil</p>
            <a href="{{ route('chauffeur.create') }}" class="inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ml-4">mol taxi chi bissa</a>
        </div>
    </div>
    
      
    @endif
    
    
</x-chauffeur-layout>
