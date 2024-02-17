<x-chaufeur-layout>
    <x-slot name="additionalContent">
        <script src="https://kit.fontawesome.com/c0bae2ffa6.js" crossorigin="anonymous"></script>

        
        <div class="mx-auto max-w-screen-lg mt-4 px-4 py-8 bg-gray-300  mb-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-center mb-8">ARA WA7ED TAXI HNA</h1>
        <form action="{{ route('Chaufeur.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="number" name="user_id" hidden value="{{ Auth::id() }}">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Number of Seats:</label>
                <input type="number" name="number_seats" value="{{old('number_seats')}}"  class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Vehicle Type:</label>
                <input type="text" name="typ_vehicle" value="{{old('typ_vehicle')}}"  class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Matricule:</label>
                <input type="number" name="matricule" value="{{old('matricule')}}"   class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Image:</label>
                <input type="file" name="image"  value="{{old('image')}}"  class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Payment Method:</label>
                <select name="method_payment" value="{{old('method_payment')}}"  class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">
                    <option value="cart">flus</option>
                    <option value="espase">carta</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea name="description" rows="4"   class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:border-blue-500">{{old('description')}}</textarea>
            </div>
            <div class="mb-4 flex justify-center">
                <button type="submit" class="py-2 px-6 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add my taxi</button>
            </div>
        </form>
    </div>
    
    </x-slot>
</x-chaufeur-layout>
