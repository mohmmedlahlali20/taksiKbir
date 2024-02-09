<x-chauffeur-layout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <form action="#" method="POST" class="max-w-lg mx-auto">
                <!-- Première ligne -->
                <div class="flex flex-wrap -mx-4 mb-4">
                    <!-- Name -->
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input id="name" type="text" class="form-input mt-1 block w-full" placeholder="Enter your name">
                    </div>
                    
                    <!-- Matricule -->
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="matricule" class="block text-gray-700 text-sm font-bold mb-2">Matricule</label>
                        <input id="matricule" type="text" class="form-input mt-1 block w-full" placeholder="Enter vehicle's matricule">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4 mb-4">
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="vehicle_type" class="block text-gray-700 text-sm font-bold mb-2">Vehicle Type</label>
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
                    <!-- Start City -->
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="start_city" class="block text-gray-700 text-sm font-bold mb-2">Start City</label>
                        <select id="start_city" class="form-select mt-1 block w-full">
                            <option value="city1">City 1</option>
                            <option value="city2">City 2</option>
                            <option value="city3">City 3</option>
                        </select>
                    </div>
                    
                    <!-- End City -->
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="end_city" class="block text-gray-700 text-sm font-bold mb-2">End City</label>
                        <select id="end_city" class="form-select mt-1 block w-full">
                            <option value="city1">City 1</option>
                            <option value="city2">City 2</option>
                            <option value="city3">City 3</option>
                        </select>
                    </div>
                </div>
                
                <!-- Quatrième ligne -->
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
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
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
