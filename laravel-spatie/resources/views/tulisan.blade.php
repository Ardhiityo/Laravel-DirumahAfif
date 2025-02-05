<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tulisan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="mx-auto table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">1</td>
                                <td class="px-4 py-2 border">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Porro, et?</td>
                                <td class="px-4 py-2 border">
                                    @if (auth()->user()->hasRole('admin') || auth()->user()->can('lihat-tulisan'))
                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 text-xs font-semibold text-white uppercase bg-gray-800 border border-transparent rounded-md tracking-wides">Lihat
                                        </button>
                                    @endif

                                    @if (auth()->user()->can('edit-tulisan') || auth()->user()->hasRole('admin'))
                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 text-xs font-semibold text-white uppercase bg-gray-800 border border-transparent rounded-md tracking-wides">Edit
                                        </button>
                                    @endif
                                    @can('hapus-tulisan')
                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 text-xs font-semibold text-white uppercase bg-gray-800 border border-transparent rounded-md tracking-wides">Delete
                                        </button>
                                    @endcan
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
