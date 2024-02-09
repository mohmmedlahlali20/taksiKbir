<x-chauffeur-layout>
    <div class="max-w-md mx-auto mt-4">
        <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
            <div class="p-4">
                <h1 class="text-xl font-semibold mb-4">Terminer votre profil</h1>
                <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-gray-700 font-bold mb-2">Nom</label>
                        <input type="text" id="name" name="name" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Entrez votre nom">
                    </div>
                    <div>
                        <label for="plat" class="block text-gray-700 font-bold mb-2">Numéro de votre taxi</label>
                        <input type="text" id="plat" name="plat" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Numéro de votre taxi">
                    </div>
                    <div>
                        <label for="start_city" class="block text-gray-700 font-bold mb-2">Ville de départ</label>
                        <select id="start_city" name="start_city" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                            <option value="general">Général</option>
                            <option value="support">Support</option>
                            <option value="billing">Facturation</option>
                        </select>
                    </div>
                    <div>
                        <label for="end_city" class="block text-gray-700 font-bold mb-2">Ville d'arrivée</label>
                        <select id="end_city" name="end_city" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                            <option value="sales">Ventes</option>
                            <option value="marketing">Marketing</option>
                            <option value="technical">Technique</option>
                        </select>
                    </div>
                    <div>
                        <label for="status" class="block text-gray-700 font-bold mb-2">Statut du conducteur</label>
                        <select id="status" name="status" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                            <option value="low">Basse</option>
                            <option value="medium">Moyenne</option>
                            <option value="high">Haute</option>
                        </select>
                    </div>
                    <div>
                        <label for="payment" class="block text-gray-700 font-bold mb-2">Méthode de paiement</label>
                        <select id="payment" name="payment" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                            <option value="low">Basse</option>
                            <option value="medium">Moyenne</option>
                            <option value="high">Haute</option>
                        </select>
                    </div>
                    <div>
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                        <textarea name="description" id="description" cols="30" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Entrez votre description" rows="4"></textarea>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
</x-chauffeur-layout>
