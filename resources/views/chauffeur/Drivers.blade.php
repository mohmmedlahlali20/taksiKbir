<x-chauffeur-layout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            {{-- {{ route('horaire.store') }} --}}
            <form action="" method="POST">
                @csrf
                <div class="flex flex-wrap -mx-4 mb-4">
                    <!-- Name -->
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input id="name" type="text" class="form-input mt-1 block w-full"
                            placeholder="Enter your name">
                    </div>

                    <!-- Matricule -->
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="matricule" class="block text-gray-700 text-sm font-bold mb-2">Matricule</label>
                        <input id="matricule" type="text" class="form-input mt-1 block w-full"
                            placeholder="Enter vehicle's matricule">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4 mb-4">
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="vehicle_type" class="block text-gray-700 text-sm font-bold mb-2">Vehicle
                            Type</label>
                        <select id="vehicle_type" class="form-select mt-1 block w-full">
                            <option value="car">Car</option>
                            <option value="truck">Truck</option>
                            <option value="motorcycle">Motorcycle</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                        <input id="image" type="file" class="form-input mt-1 block w-full">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4 mb-4">
                    <select name="start_city" id="start_city" class="form-select mt-1 block w-full">
                        <option value="">Select a city</option>
                        @forelse ($cities as $city)
                            <option value="{{ $city }}">{{ $city }}</option>
                        @empty
                            <option value="" disabled>No cities available</option>
                        @endforelse
                    </select>
                    

                    <div>
                        <select name="start_city" id="start_city" class="form-select mt-1 block w-full">
                            <option value="">Select a city</option>
                            @forelse ($cities as $city)
                                <option value="{{ $city }}">{{ $city }}</option>
                            @empty
                                <option value="" disabled>No cities available</option>
                            @endforelse
                        </select>
                        
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-4">
                        <!-- Status -->
                        <div class="w-full md:w-1/2 px-4 mb-4">
                            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                            <select id="status" class="form-select mt-1 block w-full">
                                <option value="available">Available</option>
                                <option value="not_available">Not Available</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-center">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
            </form>
        </div>
    </div>
    <div class="bg-gray-200 py-10 flex-1">
        <div class="container mx-auto px-4">
            <h2>hello world</h2>
        </div>
    </div>
    </div>

</x-chauffeur-layout>


{{-- @foreach ($Drivers as $Driver)
       
@endforeach --}}
