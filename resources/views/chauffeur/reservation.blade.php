<x-chauffeur-layout>
    @if (isset($driver) && !empty($driver))
        <div class="relative overflow-x-auto mt-6 grid justify-center">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        passager name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        method payment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        horair
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reservation as $reserv)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$reserv->driver_id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$reserv->horaire_id}}
                    </td>
                    <td class="px-6 py-4">
                        {{$reserv->created_at}}
                    </td>
                    <td class="px-6 py-4">
                        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">accepter</button>
                        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">canclled</button>
                    </td>
                </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" display="3" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            no reservation pour le moment
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
        
    @else
        <div class="fixed inset-0 flex justify-center items-center">
            <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 flex justify-center items-center flex-wrap"
                role="alert">
                <p class="font-bold">M3andekch profil asmitek :</p>&nbsp;
                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    href="{{ route('chauffeur.create') }}">Créer une nouvelle profil du taxi</a>
            </div>
        </div>
    @endif
</x-chauffeur-layout>
