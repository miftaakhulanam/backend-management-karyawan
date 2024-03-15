@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <div
            class="flex items-center bg-gradient-to-r from-main to-currentcolor-500 ps-2 p-1 py-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg class="w-5 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="#ffffff"
                    d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V288H64V64H512z" />
            </svg>
            <h2>
                Detail Tugas Staff
            </h2>
        </div>

        <section class="flex justify-start items-center">
            <div class="relative">
                <div class="flex flex-col gap-7 relative justify-center px-0 md:px-5 py-5 md:py-10">
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
                            <div class="ms-3 flex flex-col md:flex-row gap-3">
                                <div class="flex flex-col justify-center items-center gap-1">
                                    @if ($task->customer->photo_ktp)
                                        <img class="w-full md:w-52 h-48 md:h-40 object-cover cursor-pointer"
                                            src="{{ asset('storage/' . $task->customer->photo_ktp) }}"
                                            alt="{{ $task->customer->name }}"
                                            onclick="showModal('{{ asset('storage/' . $task->customer->photo_ktp) }}')">
                                    @else
                                        <div class="flex justify-center items-center w-full md:w-48 h-48 bg-gray-500">
                                            <p class="text-gray-300 text-sm font-medium">Photo KTP tidak ada</p>
                                        </div>
                                    @endif
                                    <p class="text-gray-900 font-medium">Photo KTP</p>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-1">
                                    @if ($task->customer->photo_rumah)
                                        <img class="w-full md:w-52 h-48 md:h-40 object-cover cursor-pointer"
                                            src="{{ asset('storage/' . $task->customer->photo_rumah) }}"
                                            alt="{{ $task->customer->name }}"
                                            onclick="showModal('{{ asset('storage/' . $task->customer->photo_rumah) }}')">
                                    @else
                                        <div class="flex justify-center items-center w-full md:w-48 h-48 bg-gray-500">
                                            <p class="text-gray-300 text-sm font-medium">Photo Rumah tidak ada</p>
                                        </div>
                                    @endif
                                    <p class="text-gray-900 font-medium">Photo Rumah</p>
                                </div>
                                <!-- The Modal -->
                                <div id="modal" tabindex="-5"
                                    class="hidden fixed px-3 md:px-0 top-0 left-0 z-50 w-screen h-screen bg-black/70 flex justify-center items-center">

                                    <!-- The close button -->
                                    <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold"
                                        href="javascript:void(0)" onclick="closeModal()">&times;</a>

                                    <!-- A big image will be displayed here -->
                                    <img id="modal-img" class="w-full md:max-w-[800px] max-h-[600px] object-cover" />
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
