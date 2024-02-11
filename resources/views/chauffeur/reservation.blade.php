<x-chauffeur-layout>
    @if (isset($driver) && !empty($driver))

    @endif
    @else
        <div class="fixed inset-0 flex justify-center items-center">
            <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 flex justify-center items-center flex-wrap"
                role="alert">
                <p class="font-bold">M3andekch profil asmitek :</p>
                <p class="text-sm">zid zid kmel dak profil</p>
                <a href="{{route('chauffeur.create')}}">Créer une nouvelle route</a>

            </div>
        </div>


    @endif


</x-chauffeur-layout>
