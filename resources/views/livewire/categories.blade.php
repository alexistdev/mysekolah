<x-slot name="header">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">



    </h2>

</x-slot>

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('info'))
                <div class="bg-green-600 border-4 focus:border-green-700  text-white mb-2 px-4 py-5 " role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('info') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if (session()->has('errMsg'))
                <div class="bg-red-500 border-4 focus:border-red-700  text-white mb-2 px-4 py-5 " role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('errMsg') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <div class="flex">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <button wire:click="showModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded my-3">Buat Kategori</button>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <input wire:model="search" type="text"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           placeholder="Search ..">
                </div>
            </div>

            {{-- Start: Membuka Modal Form  --}}
            @if($isOpen)

                @include('livewire.category.create')

            @endif

            {{-- End: Membuka Modal Form  --}}

            <table class="table-fixed w-full">

                <thead>

                <tr class="bg-gray-100">

                    <th class="px-4 py-2 w-20">No.</th>

                    <th class="px-4 py-2">Name</th>

                    <th class="px-4 py-2">Action</th>

                </tr>

                </thead>

                <tbody>

                @foreach($categories as $key => $category)

                    <tr>
                        <td class="border px-4 py-2">{{ $categories->firstItem() + $key }}</td>

                        <td class="border px-4 py-2">{{ $category->name }}</td>


                        <td class="border px-4 py-2">

                            <button wire:click="edit({{ $category->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>

                            <button wire:click="delete({{ $category->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>
            <div class="mt-2 mb-5">
                {{$categories->links()}}
            </div>
        </div>

    </div>

</div>
