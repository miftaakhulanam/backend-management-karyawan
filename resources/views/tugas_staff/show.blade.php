@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen p-10 mt-14">
        <div
            class="flex items-center bg-gradient-to-r from-main to-currentcolor-500 ps-2 p-1 py-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg class="fill-white w-7 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path
                        d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor"
                        d="M7.416 3A4.983 4.983 0 0 0 7 5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2c0-.711-.148-1.388-.416-2H18a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zM12 14H9a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2m3-4H9a1 1 0 0 0-.117 1.993L9 12h6a1 1 0 1 0 0-2m-3-8a2.99 2.99 0 0 1 2.236 1c.428.478.704 1.093.755 1.772L15 5H9c0-.725.257-1.39.685-1.908L9.764 3c.55-.614 1.348-1 2.236-1" />
                </g>
            </svg>
            <h2>
                Detail Tugas
            </h2>
        </div>

        <section class="flex justify-start items-center">
            <div class="relative">
                <div class="flex flex-col gap-7 relative justify-center px-5 py-10">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-black text-2xl font-bold">Detail Pelanggan</h2>
                        <div class="flex flex-col gap-5">
                            <table class="ms-3 text-lg font-medium max-h-min">
                                <tr>
                                    <td>Nama</td>
                                    <td>: {{ $task->customer->name }}</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>: {{ $task->customer->username }}</td>
                                </tr>
                                <tr>
                                    <td>ID Pelanggan</td>
                                    <td>: {{ $task->customer->id_customer }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>: {{ $task->customer->nik }}</td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td>: {{ $task->customer->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Password Wifi</td>
                                    <td>: {{ $task->customer->wifi_password }}</td>
                                </tr>
                                <tr>
                                    <td>Koordinat</td>
                                    <td>: {{ $task->customer->koordinat }}</td>
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
                                    @if ($task->customer->photo_ktp)
                                        <img class="w-52 h-40 object-cover cursor-pointer"
                                            src="{{ asset('storage/' . $task->customer->photo_ktp) }}"
                                            alt="{{ $task->customer->name }}"
                                            onclick="showModal('{{ asset('storage/' . $task->customer->photo_ktp) }}')">
                                    @else
                                        <div class="flex justify-center items-center w-48 h-48 bg-gray-500">
                                            <p class="text-gray-300 text-sm font-medium">Photo KTP tidak ada</p>
                                        </div>
                                    @endif
                                    <p class="text-gray-900 font-medium">Photo KTP</p>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-1">
                                    @if ($task->customer->photo_rumah)
                                        <img class="w-52 h-40 object-cover cursor-pointer"
                                            src="{{ asset('storage/' . $task->customer->photo_rumah) }}"
                                            alt="{{ $task->customer->name }}"
                                            onclick="showModal('{{ asset('storage/' . $task->customer->photo_rumah) }}')">
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
                                    <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold"
                                        href="javascript:void(0)" onclick="closeModal()">&times;</a>

                                    <!-- A big image will be displayed here -->
                                    <img id="modal-img" class="max-w-[800px] max-h-[600px] object-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 max-w-fit">
                        <h2 class="text-black text-2xl font-bold">Detail Aktivitas</h2>
                        <table class="ms-3 text-lg font-medium">
                            <tr>
                                <td>Teknisi</td>
                                <td>: {{ $teknisi }}</td>
                            </tr>
                            <tr>
                                <td>Aktivitas</td>
                                <td>: {{ $task->activity }}</td>
                            </tr>
                            <tr>
                                <td>Mulai Pekerjaan</td>
                                <td>: {{ $task->start_time }}</td>
                            </tr>
                            <tr>
                                <td>Paket</td>
                                <td>: {{ $task->paket->nama }}</td>
                            </tr>
                        </table>
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
