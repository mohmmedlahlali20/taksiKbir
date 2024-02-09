<x-admin-layout>
    <div class="mx-auto max-w-screen-lg">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nom</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            email</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            La Date De Creation</th>
                        <th
                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($users as $user)
                        <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->created_at}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('admin.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                                    Supprimer
                                </button>
                            </form>
                            
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td>
                                <h6>no users</h6>
                            </td>
                        </tr>
                        {{ $users->links() }}
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

 

</x-admin-layout>
