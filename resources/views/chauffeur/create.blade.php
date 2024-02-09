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
<div class="max-w-md mx-auto mt-4">
    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
        <div class="p-4">
            <h1 class="text-xl font-semibold mb-4">Terminer votre profil</h1>

            <form action="{{ route('chauffeur.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <input type="text" id="description" name="description"
                        class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Description" required>
                </div>

                <div class="mb-4">
                    <label for="plate_number" class="block text-gray-700 font-bold mb-2">Numéro de plaque</label>
                    <input type="text" id="plate_number" name="plate_number"
                        class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Numéro de plaque" required>
                </div>

                <label for="status" class="block text-gray-700 font-bold mb-2">Statut du conducteur</label>
                <select id="status" name="status"
                    class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                    <option value="Available">Available</option>
                    <option value="En route">En route</option>
                    <option value="Not available">Not available</option>
                </select>


                <div class="mb-4">
                    <label for="vehicle_type" class="block text-gray-700 font-bold mb-2">Type de véhicule</label>
                    <input type="text" id="vehicle_type" name="vehicle_type"
                        class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Type de véhicule" required>
                </div>

                <textarea class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300" name="discrption" id="" cols="30" rows="10"></textarea>

                <div class="mb-4">
                    <label for="payment_method" class="block text-gray-700 font-bold mb-2">Méthode de
                        paiement</label>
                    <input type="text" id="payment_method" name="payment_method"
                        class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Méthode de paiement" required>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Envoyer</button>
                </div>
            </form>

        </div>
    </div>
</div>

</x-chauffeur-layout>