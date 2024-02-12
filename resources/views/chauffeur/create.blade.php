<x-chauffeur-layout>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Attention!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="max-w-md fixed inset-1 flex justify-center mx-auto mt-6 p-6 bg-white rounded-lg shadow-md">
        <div class="w-full md:w-3/4 lg:w-1/2 xl:w-2/3">
            <h1 class="text-xl font-semibold mb-4">Create Taxi</h1>
            <form action="{{ route('chauffeur.store') }}" method="POST">
                @csrf
                {{-- chauffeur.drivers --}}
                <!-- Description & Plate Number -->
                <div class="mb-4 flex flex-wrap">
                    <div class="w-full md:w-1/2 md:pl-2">
                        <label for="plate_number" class="block text-gray-700 font-bold mb-2">Plate Number</label>
                        <input id="plate_number" name="plate_number" type="text"
                            class="form-input w-full px-3 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter plate number...">
                    </div>
                </div>

                <!-- Vehicle Type & Status -->
                <div class="mb-4 flex flex-wrap">
                    <div class="w-full md:w-1/2 md:pr-2">
                        <label for="vehicle_type" class="block text-gray-700 font-bold mb-2">Vehicle Type</label>
                        <input id="vehicle_type" name="vehicle_type" type="text"
                            class="form-input w-full px-3 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                            placeholder="Enter vehicle type...">
                    </div>
                    <div class="w-full md:w-1/2 md:pl-2">
                        <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
                        <select id="status" name="status"
                            class="form-select w-full px-3 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                            <option value="Available">Available</option>
                            <option value="En route">En route</option>
                            <option value="Not available">Not available</option>
                        </select>
                    </div>
                </div>
                <!-- Payment Method -->
                <div class="mb-4">
                    <label for="payment_method" class="block text-gray-700 font-bold mb-2">Payment Method</label>
                    <input id="payment_method" name="payment_method" type="text"
                        class="form-input w-full px-3 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Enter payment method...">

                    <label for="payment_method" class="block text-gray-700 font-bold mb-2">Taxi</label>
                    <input id="payment_method" name="image" type="file"
                        class="form-input w-full px-3 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Enter payment method...">
                </div>

              
                <!-- Available From -->
                <div class="mb-4">
                    <label for="available_from" class="block text-gray-700 font-bold mb-2">Available From</label>
                    <input id="available_from" name="available_from" type="datetime-local"
                        class="form-input w-full px-3 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
             
                    <label for="available_to" class="block text-gray-700 font-bold mb-2">Available To</label>
                    <input id="available_to" name="available_to" type="datetime-local"
                        class="form-input w-full px-3 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                </div>
  <!-- Submit Button -->
  <div class="flex justify-end">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create
        Taxi</button>
</div>
            </form>
        </div>


</x-chauffeur-layout>
