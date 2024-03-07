@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen p-10 mt-14">
        <div
            class="flex items-center bg-gradient-to-r from-main to-currentcolor-500 ps-2 p-1 py-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg class="w-6 h-6 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff"
                    d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
            </svg>
            <h2>
                Detail Customer
            </h2>
        </div>

        <section class="flex justify-start items-center">
            <div class="relative">
                <div class="flex flex-col gap-5 px-5 py-10">
                    <table class="ms-3 text-lg font-medium max-h-min">
                        <tr>
                            <td>Nama</td>
                            <td>: {{ $customer->name }}</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>: {{ $customer->username }}</td>
                        </tr>
                        <tr>
                            <td>ID Pelanggan</td>
                            <td>: {{ $customer->id_customer }}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: {{ $customer->nik }}</td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td>: {{ $customer->phone }}</td>
                        </tr>
                        <tr>
                            <td>Password Wifi</td>
                            <td>: {{ $customer->wifi_password }}</td>
                        </tr>
                        <tr>
                            <td>Koordinat</td>
                            <td>: {{ $customer->koordinat }}</td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>: {{ $kota }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>: {{ $kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Desa</td>
                            <td>: {{ $desa }}</td>
                        </tr>
                    </table>
                    <div class="ms-3 flex flex-row gap-3">
                        <div class="flex flex-col justify-center items-center gap-1">
                            @if ($customer->photo_ktp)
                                <img class="w-52 h-40 object-cover cursor-pointer"
                                    src="{{ asset('storage/' . $customer->photo_ktp) }}" alt="{{ $customer->name }}"
                                    onclick="showModal('{{ asset('storage/' . $customer->photo_ktp) }}')">
                            @else
                                <div class="flex justify-center items-center w-48 h-48 bg-gray-500">
                                    <p class="text-gray-300 text-sm font-medium">Photo KTP tidak ada</p>
                                </div>
                            @endif
                            <p class="text-gray-900 font-medium">Photo KTP</p>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-1">
                            @if ($customer->photo_rumah)
                                <img class="w-52 h-40 object-cover cursor-pointer"
                                    src="{{ asset('storage/' . $customer->photo_rumah) }}" alt="{{ $customer->name }}"
                                    onclick="showModal('{{ asset('storage/' . $customer->photo_rumah) }}')">
                            @else
                                <div class="flex justify-center items-center w-48 h-48 bg-gray-500">
                                    <p class="text-gray-300 text-sm font-medium">Photo Rumah tidak ada</p>
                                </div>
                            @endif
                            <p class="text-gray-900 font-medium">Photo Rumah</p>
                        </div>
                        <!-- The Modal -->
                        <div id="modal" tabindex="-5"
                            class="hidden fixed top-0 left-0 z-50 w-screen h-screen bg-black/70 flex justify-center items-center">

                            <!-- The close button -->
                            <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
                                onclick="closeModal()">&times;</a>

                            <!-- A big image will be displayed here -->
                            <img id="modal-img" class="max-w-[800px] max-h-[600px] object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Get the modal by id
        var modal = document.getElementById("modal");

        // Get the modal image tag
        var modalImg = document.getElementById("modal-img");

        // this function is called when a small image is clicked
        function showModal(src) {
            modal.classList.remove('hidden');
            modalImg.src = src;
        }

        // this function is called when the close button is clicked
        function closeModal() {
            modal.classList.add('hidden');
        }
    </script>
@endsection
