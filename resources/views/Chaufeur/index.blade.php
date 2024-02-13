<x-chaufeur-layout>
    @if(isset($driver) && !empty($driver))
        <!-- If $driver is set and not empty -->
        <x-slot name="additionalContent">
            <div class="container my-5">
            <div class="flex justify-around my-6 ">
                <div class="my-5 mx-4">
                    <a href="{{ route('Horaire.create') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        Add Horaire
                    </a>
                </div>
                <div class="text-center mt-4 text-3xl">
                    <h3>choisire votre route</h3>
                </div>
             
                <div class="mb-4">
                    <label for="route" class="block text-sm font-medium text-gray-600">votre status</label>
                    <select name="status" required class="mt-1 p-2 border rounded-md w-50">
                        <option value="disponible">disponible</option>
                        <option value="in trip">in trip</option>
                        <option value="out of service">out of service</option>
                    </select>
                </div>

        </div>
    </div>
    <div class="mt-6 container px-6">
        <table class="border-collapse w-full">
            <thead>
                <tr>
                   
                    <th class="border border-black-3 px-6 py-3">Price</th>
                    <th class="border border-black-3 px-6 py-3">Status</th>
                    <th class="border border-black-3 px-6 py-3">method payment</th>
                    <th class="border border-black-3 px-6 py-3">Created At</th>
                    <th class="border border-black-3 px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($hor as $driver)
                    <tr class="border border-black-3">
                        
                        <td class="border border-black-3 px-6 py-4">{{ $driver->price }}</td>
                        <td class="border border-black-3 px-6 py-4">{{ $driver->status }}</td>
                        <td class="border border-black-3 px-6 py-4">{{ $driver->method_payment }}</td>
                        <td class="border border-black-3 px-6 py-4">{{ $driver->created_at }}</td>
                        <td class="border border-black-3 px-6 py-4">
                            <form action="">
                                <button class="btn bg-red-500 p-1 rounded">pus flow</button>
                            </form>
                            <br><br>
                            <form action="">
                                <button class="btn bg-green-500 p-1 px-1 rounded">run flow</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="border border-black-3">
                        <td colspan="8" class="px-6 py-4 text-xl text-balance text-center">No rout found</td>
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
