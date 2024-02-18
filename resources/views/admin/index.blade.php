<x-Admin-layout>
    <x-slot name="slot">
        <div class="overflow-x-auto my-6">
            <h3 class="text-3xl font-bold text-center text-gray-800 uppercase mb-4">DRIVERS</h3>
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left">User Name</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Email Verified</th>
                        <th class="px-6 py-3 text-left">Rates</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($drivers as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ ($item->user->email_verified_at) ? 'Yes' : 'No' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach ($item->rate as $rate)
                            <p>{{ $rate->user->name }} : {{ $rate->rate }}/10</p>
                            @endforeach
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('admin.destroy',$item->user) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="text-red-600 hover:text-red-800">Delete this driver</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center">No drivers</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="overflow-x-auto my-6">
            <h3 class="text-3xl font-bold text-center text-gray-800 uppercase mb-4">Passagers</h3>
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left">User Name</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Email Verified</th>
                        <th class="px-6 py-3 text-left">Reservations</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($passagers as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ ($item->email_verified_at) ? 'Yes' : 'No' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap"><p>{{ $item->reservation->count() }} reservations</p></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('admin.destroy',$item) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="text-red-600 hover:text-red-800">Delete this passager</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center">No passagers</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-slot>
</x-Admin-layout>
