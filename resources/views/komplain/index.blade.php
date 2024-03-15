@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r from-[#1061CC] to-currentcolor-500 p-2 rounded-lg font-inter font-bold text-white text-lg items-center">
            <svg class="h-7 w-7 me-2 ps-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff"
                    d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
            </svg>

            Komplain
        </h2>

        @can('admin')
            <div class="flex flex-col md:flex-row justify-between">
                <a href="/komplain/create"
                    class="flex bg-[#69B360] bg-opacity-60 hover:bg-opacity-75 w-fit w-21 h-10 px-3 py-2.5 mt-3 md:mt-5 rounded-md text-sm font-bold text-white">
                    <svg class="h-5 w-5 me-2" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M14 2H6c-1.11 0-2 .89-2 2v16c0 1.11.89 2 2 2h7.81c-.53-.91-.81-1.95-.81-3c0-3.31 2.69-6 6-6c.34 0 .67.03 1 .08V8zm-1 7V3.5L18.5 9zm10 11h-3v3h-2v-3h-3v-2h3v-3h2v3h3z" />
                    </svg>
                    Tambah
                </a>

                <form class="flex items-center mt-3 md:mt-5">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" name="search" value="{{ request('search') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search..." />
                    </div>
                    <button type="submit"
                        class="py-2.5 px-[11px] ms-2 text-sm font-medium text-white bg-main rounded-lg border border-main hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
        @endcan

        <div class="mt-6 overflow-x-auto">
            @if ($komplain->isEmpty())
                <div class="flex justify-center items-center my-xl-5 w-full h-96">
                    <div class="flex flex-col justify-center items-center">
                        <img class="w-40" src="{{ asset('img/avatar3.png') }}">
                        <p class="font-normal text-gray-400">Tidak ada data ditemukan</p>
                    </div>
                </div>
            @else
                <table class="w-full table-auto">
                    <thead class="">
                        <tr class="text-sm text-main font-semibold text-center border-b-2 border-main">
                            <th>No.</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Pelanggan</th>
                            <th class="px-4 py-3">Pesan</th>
                            <th class="px-4 py-3">Pic</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700 text-center">
                        @foreach ($komplain as $k)
                            <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                                <td class="ps-4">{{ $loop->iteration . '.' }}</td>
                                <td class="px-4 py-4">{{ $k->user->name }}</td>
                                <td class="px-4 py-4">{{ $k->customer->name }}</td>
                                <td class="px-4 py-4 flex justify-center">
                                    <div class="bg-[#FFA235] w-max py-1 px-5 rounded-md">
                                        <p>{{ $k->pesan }}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="flex justify-center">
                                        <svg data-modal-target="modal-photo{{ $k->id }}"
                                            data-modal-toggle="modal-photo{{ $k->id }}"
                                            class="fill-main w-5 hover:fill-blue-800 cursor-pointer"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path
                                                d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z" />
                                        </svg>
                                    </div>
                                    <div id="modal-photo{{ $k->id }}" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Hasil kerja
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="modal-photo{{ $k->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                    @if ($k->photo)
                                                        <img src="{{ asset('storage/' . $k->photo) }}"
                                                            class="img-fluid w-full mt-0">
                                                    @else
                                                        <p class="text-center my-10 font-normal text-gray-600">
                                                            File tidak ditemukan.
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 md:px-1">
                                    @if ($k->status == 'Selesai')
                                        <p
                                            class="py-0.5 w-20 mx-auto rounded-full text-white bg-green-600 font-medium text-xs">
                                            Selesai</p>
                                    @elseif($k->status == 'Tertunda')
                                        <p
                                            class="py-0.5 w-20 mx-auto rounded-full text-white bg-yellow-400 font-medium text-xs">
                                            Tertunda</p>
                                    @else
                                        <p
                                            class="py-0.5 w-28 mx-auto rounded-full text-white bg-red-700 font-medium text-xs">
                                            Belum
                                            selesai</p>
                                    @endif
                                </td>
                                <td class="pe-4 py-4">
                                    <div class="flex gap-3 justify-center">
                                        <a
                                            href="{{ auth()->user()->is_admin == 'Admin' ? '/komplain/' . $k->id . '/edit' : '/komplain-staff/' . $k->id . '/edit' }}">
                                            <svg class="h-6 fill-main hover:fill-blue-800"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                            </svg>
                                        </a>
                                        <button data-modal-target="popup-modal-delete-{{ $k->id }}"
                                            data-modal-toggle="popup-modal-delete-{{ $k->id }}" type="button">
                                            <svg class="h-6 fill-[#FF0000] hover:fill-[#cc0000]"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                            </svg>
                                        </button>
                                        {{-- Modal delete --}}
                                        <div id="popup-modal-delete-{{ $k->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-red-600 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3
                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                            Yakin ingin menghapus komplain?
                                                        </h3>
                                                        <div class="flex justify-center">
                                                            <form
                                                                action="{{ auth()->user()->is_admin == 'Admin' ? '/komplain/' . $k->id : '/komplain-staff/' . $k->id }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <button
                                                                    class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                            <button
                                                                data-modal-hide="popup-modal-delete-{{ $k->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
@endsection
