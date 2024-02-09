<x-chauffeur-layout>

    <div class="bg-gray-200 py-10 flex-1">
        <div class="container mx-auto px-4">
            @forelse ($drivers as $Driver)
                {{$Driver->id}}
            @empty
                <h1>hello</h1>
            @endforelse
                
            
        </div>
     
</x-chauffeur-layout>


