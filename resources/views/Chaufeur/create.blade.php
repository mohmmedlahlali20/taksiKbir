<x-chaufeur-layout>
    <x-slot name="additionalContent">
        <div class="container mx-auto px-4 py-8 bg-gray-100 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-center mb-8">Add your taxi issues</h1>
            <form action="{{ route('Chaufeur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="number" name="user_id" hidden value="{{ Auth::id() }}">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Number of Seats:</label>
                    <input type="number" name="number_seats" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Vehicle Type:</label>
                    <input type="text" name="typ_vehicle" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Matricule:</label>
                    <input type="number" name="matricule" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Image:</label>
                    <input type="file" name="image" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Route:</label>
                    <select name="route" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                        @foreach ($Routes as $item)
                            <option value="{{ $item->id }}">{{ $item->startcity->name }} to {{ $item->endcity->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Price:</label>
                    <input type="number" name="price" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Payment Method:</label>
                    <select name="method_payment" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                        <option value="cart">flus</option>
                        <option value="espase">carta</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Description:</label>
                    <textarea name="description" rows="4" required class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <div class="mb-4 flex justify-center">
                    <button type="submit" class="py-2 px-6 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add my taxi</button>
                </div>
            </form>
        </div>
        
</x-slot>
</x-chaufeur-layout>