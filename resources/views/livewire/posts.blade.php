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

            <button wire:click="showModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Buat Post</button>

            @if($isOpen)

                @include('livewire.create')

            @endif

            <table class="table-fixed w-full">

                <thead>

                <tr class="bg-gray-100">

                    <th class="px-4 py-2 w-20">No.</th>

                    <th class="px-4 py-2">Judul</th>

                    <th class="px-4 py-2">Deskripsi</th>

                    <th class="px-4 py-2">Action</th>

                </tr>

                </thead>

                <tbody>

                @foreach($posts as $post)

                    <tr>

                        <td class="border px-4 py-2">{{ $post->id }}</td>

                        <td class="border px-4 py-2">{{ $post->title }}</td>

                        <td class="border px-4 py-2">{{ $post->description }}</td>

                        <td class="border px-4 py-2">

                            <button wire:click="edit({{ $post->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>

                            <button wire:click="delete({{ $post->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>
