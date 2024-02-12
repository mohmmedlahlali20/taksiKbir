<x-Admin-layout>

    <div class="flex flex-wrap -mx-3 mb-5">
        <div class="w-full max-w-full px-3 mb-6  mx-auto">
            <div
                class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                <div
                    class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                    <div class="flex-auto block py-8 pt-6 px-9">
                        <div class="overflow-x-auto">
                            <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                <thead class="align-bottom">
                                    <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                        <th class="pb-3 text-start min-w-[175px]">nom du driver</th>
                                        <th class="pb-3 text-end min-w-[100px]">route</th>
                                        <th class="pb-3 text-end min-w-[100px]">image</th>
                                        <th class="pb-3 pr-12 text-end min-w-[175px]">type de Vehicle</th>
                                        <th class="pb-3 pr-12 text-end min-w-[100px]">matricule</th>
                                        <th class="pb-3 text-end min-w-[50px]">method de payment </th>
                                        <th class="pb-3 text-end min-w-[50px]">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($drivers as $driver)
                                        <tr>
                                            <td class="p-3 pl-0">{{ $driver->user->name }}</td>
                                            <form action="">
                                                @csrf
                                                @method('PUT')
                                                <button type="button"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4
                                                 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2
                                                  mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">DEleti
                                                </button>
                                            </form>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-6 text-gray-500">
                                                <h2 class="text-xl">driver dosn't exist</h2>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-Admin-layout>
