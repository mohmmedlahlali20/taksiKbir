<x-chaufeur-layout>
    @if(isset($driver_taxi) && !empty($driver_taxi))
        <!-- If $driver is set and not empty -->
        <x-slot name="additionalContent">
            <div class="container my-5">
            <div class="flex justify-around my-6 ">
            <div class="my-5 mx-4"><a href="{{ route('Horaire.create') }}" class="btn bg-blue-500 text-white p-2 rounded">add horaire</a></div>
           <div class="text-center mt-4 text-3xl"><h3>your horaires</h3></div>
            <div class="mb-4">
                <form action="{{ route('Chaufeur.update',$driver_taxi) }}" method="POST">
                    @csrf
                    @method('PATCH')
                <label for="route" class="block text-sm font-medium text-gray-600">votre status</label>
                <select name="status" required class="mt-1 p-2 border rounded-md w-50" onchange="this.form.submit()">
                    <option value="disponible" {{ ($driver_taxi->status=='disponible')?'selected':''}} >disponible</option>
                    <option value="in trip" {{ ($driver_taxi->status=='in trip')?'selected':''}}>in trip</option>
                    <option value="out of service" {{ ($driver_taxi->status=='out of service')?'selected':''}}>out of service</option>
                </select>
            </form>
            </div>
        </div>
    </div>
    <div class="mt-6 container px-6">
        <table class="border-collapse border border-black-3 w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Description</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Matricule</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Nombre de sièges</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Type de véhicule</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Prix</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Image</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Date de création</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Réservations</th>
                    <th class="px-6 py-3 border border-black-3 bg-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($hor as $item)
                    <tr>
                        <td class="px-6 py-4 border border-black-3">{{ $driver_taxi->description }}</td>
                        <td class="px-6 py-4 border border-black-3">{{ $driver_taxi->matricule }}</td>
                        <td class="px-6 py-4 border border-black-3">{{ $driver_taxi->number_seets }}</td>
                        <td class="px-6 py-4 border border-black-3">{{ $driver_taxi->typ_veicl }}</td>
                        <td class="px-6 py-4 border border-black-3">{{ $item->price }}</td>
                        <td class="px-6 py-4 border border-black-3"><img src="{{ asset('storage/' . $driver_taxi->image) }}" width="100px" alt="Image Alt Text"></td>
                        <td class="px-6 py-4 border border-black-3">{{ $item->created_at }}</td>
                        <td class="px-6 py-4 border border-black-3">{{ $item->reservations->count() }}/{{ $driver_taxi->number_seets }}</td>
                        <td class="px-6 py-4 border border-black-3">
                            @if ($item->reservations->count() == $driver_taxi->number_seets)
                                <span class="bg-yellow-700 p-3">this trip is full</span>
                            @else
                                @if ($item->disable == false)
                                    <form action="{{ route('Horaire.update', $item) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <button class="btn bg-red-500 p-1 text-white rounded">hors service</button>
                                    </form>
                                @else
                                    <form action="{{ route('Horaire.update', $item) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <button class="btn bg-green-500 p-1 text-white px-1 rounded">en service</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="px-6 py-4 border text-center text-xl border-black-3">no horair found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
        </x-slot>
        @else
    <x-slot name="additionalContent">
        <div class="flex flex-col items-center justify-center h-screen">
            <div class="fixed inset-0 flex justify-center items-center">
                <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 flex justify-center items-center flex-wrap"
                    role="alert">
                    <p class="font-bold">M3andekch profil asmitek :</p>
                    <p class="text-sm">zid zid kmel dak profil</p>
                    &nbsp;&nbsp;
                    <a href="{{ route('Chaufeur.create') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded">Complete Profile</a>
                </div>
            </div>
        </div>
    </x-slot>
    @endif
</x-chaufeur-layout>
