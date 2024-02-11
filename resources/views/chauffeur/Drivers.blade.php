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
                    <p><strong>Plate Number:</strong> {{ $taxi ? $taxi->plate_number : 'N/A' }}</p>
                    {{-- {{ dd($statuses->Routs) }} --}}

                    <p><strong>Status:</strong> {{ $taxi ?$taxi->status : 'no status' }}</p>
                    <p><strong>La route :</strong> {{ $driver ? ($driver->route ? $driver->route->Routs : 'Non définie') : 'Non définie' }}</p>
                    <p><strong>Vehicle Type:</strong> {{ $taxi ? $taxi->vehicle_type : 'N/A' }}</p>
                    <p><strong>Payment Method:</strong> {{ $taxi ? $taxi->payment_method : 'N/A' }}</p>
                    <p><strong>image:</strong> <img width="100px" src="{{ asset('storage/' . $taxi->payment_method) }}" alt="Image Recette"></p>
                </div>
            @else
            Full texts
            id
            Routs
                <p>No driver profile found.</p>
            @endif
        </div>
    @else
        <div class="fixed inset-0 flex justify-center items-center">
            <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 flex justify-center items-center flex-wrap"
                role="alert">
                <p class="font-bold">M3andekch profil asmitek :</p>
                <p class="text-sm">zid zid kmel dak profil</p>
                <a href="{{route('chauffeur.create')}}">Créer une nouvelle route</a>

            </div>
        </div>


    @endif


</x-chauffeur-layout>
