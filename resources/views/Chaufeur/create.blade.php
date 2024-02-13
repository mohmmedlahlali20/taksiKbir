<x-chaufeur-layout>
    <x-slot name="additionalContent">
        <script src="https://kit.fontawesome.com/c0bae2ffa6.js" crossorigin="anonymous"></script>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <ul class="mt-3 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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

</form>
</x-slot>
</x-chaufeur-layout>

