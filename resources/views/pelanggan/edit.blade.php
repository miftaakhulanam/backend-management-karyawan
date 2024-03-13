@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r from-main to-currentcolor-500 ps-2 p-1 pt-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg class="w-6 h-6 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff"
                    d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
            </svg>
            Edit Customer
        </h2>

        <section class="flex justify-start items-center mt-0 md:mt-3">
            <div class="relative">
                <div class="flex relative justify-center px-0 md:px-10 py-5 md:py-10 w-full md:w-[720px]">
                    <form method="POST" action="/customer/{{ $customer->id }}" enctype="multipart/form-data"
                        class="flex flex-col gap-2 w-full font-bold">
                        @method('put')
                        @csrf
                        <table class="border-separate border-spacing-y-2">
                            <tr class="w-full">
                                <td>
                                    <label for="name" class="text-black md:text-nowrap">Nama</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="name" id="name" required autocomplete="off"
                                        autofocus value="{{ old('name', $customer->name) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('name')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="id_customer" class="text-black md:text-nowrap">Id Pelanggan</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="id_customer" id="id_customer" required autocomplete="off"
                                        value="{{ old('id_customer', $customer->id_customer) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('id_customer')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="username" class="text-black md:text-nowrap">PPP Username</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="username" id="username" required autocomplete="off"
                                        value="{{ old('username', $customer->username) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('username')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="nik" class="text-black md:text-nowrap">NIK</label>
                                </td>
                                <td class="w-full">
                                    <input type="number" name="nik" id="nik" required pattern="[0-9]{16}"
                                        autocomplete="off" value="{{ old('nik', $customer->nik) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('nik')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="telepon" class="text-black md:text-nowrap">No. HP</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="phone" id="telepon" required autocomplete="off"
                                        value="{{ old('phone', $customer->phone) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('phone')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="Password" class="text-black md:text-nowrap">Password Wifi</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="wifi_password" id="Password" autocomplete="off"
                                        value="{{ old('wifi_password', $customer->wifi_password) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('wifi_password')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="koordinat" class="text-black md:text-nowrap">Koordinat</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="koordinat" id="koordinat" autocomplete="off"
                                        value="{{ old('koordinat', $customer->koordinat) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('koordinat')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="kota" class="text-black md:text-nowrap">Kota</label>
                                </td>
                                <td>
                                    <select id="kota" onchange="getKecamatan()" name="kota"
                                        class="h-10 w-full border-none rounded-md font-normal">
                                        <option value="">Pilih Kota</option>
                                        @foreach ($kota as $k)
                                            @if (old('kota', $customer->kota) == $k->id)
                                                <option value="{{ $k->id }}" selected>{{ $k->nama }}</option>
                                            @else
                                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="kecamatan" class="text-black md:text-nowrap">Kecamatan</label>
                                </td>
                                <td>
                                    <select id="kecamatan" onchange="getDesa()" name="kecamatan"
                                        class="h-10 w-full border-none rounded-md font-normal">
                                        <option value="">Pilih Kecamatan</option>
                                        @foreach ($kecamatan as $kec)
                                            @if (old('kecamatan', $customer->kecamatan) == $kec->id)
                                                <option value="{{ $kec->id }}" selected>{{ $kec->nama }}</option>
                                            @else
                                                <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="desa" class="text-black md:text-nowrap">Desa</label>
                                </td>
                                <td>
                                    <select id="desa" name="desa"
                                        class="h-10 w-full border-none rounded-md font-normal">
                                        <option value="">Pilih Desa</option>
                                        @foreach ($desa as $d)
                                            @if (old('desa', $customer->desa) == $d->id)
                                                <option value="{{ $d->id }}" selected>{{ $d->nama }}</option>
                                            @else
                                                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label class="text-black md:text-nowrap">Upload Data</label>
                                </td>
                                <td class="flex gap-4">
                                    <div>
                                        <svg id="icon-ktp"
                                            class="cursor-pointer {{ $customer->photo_ktp ? '' : 'grayscale brightness-200' }}"
                                            data-modal-target="modal-ktp" data-modal-toggle="modal-ktp"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="28">
                                            <path fill="#af0808"
                                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                        </svg>
                                        <!-- Main modal -->
                                        <div id="modal-ktp" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Foto KTP
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="modal-ktp">
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
                                                        <input type="hidden" name="oldKtp"
                                                            value="{{ $customer->photo_ktp }}">
                                                        @if ($customer->photo_ktp)
                                                            <p id="pesan-ktp"></p>
                                                            <img src="{{ asset('storage/' . $customer->photo_ktp) }}"
                                                                class="ktp-preview block img-fluid w-full mt-0">
                                                        @else
                                                            <p id="pesan-ktp"
                                                                class="text-center my-10 font-normal text-gray-600">
                                                                File tidak ditemukan.</p>
                                                            <img class="ktp-preview img-fluid w-full mt-0">
                                                        @endif
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                        <label for="ktp" data-modal-hide="modal-ktp" type="button"
                                                            class="text-white cursor-pointer bg-main hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" name="photo_ktp" id="ktp" class="hidden"
                                            onchange="previewKtp()">
                                    </div>
                                    <div>
                                        <svg id="icon-rumah"
                                            class="cursor-pointer {{ $customer->photo_rumah ? '' : 'grayscale brightness-50 contrast-200' }}"
                                            data-modal-target="modal-rumah" data-modal-toggle="modal-rumah"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="28">
                                            <path fill="#FFD43B"
                                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                        </svg>
                                        <!-- Main modal -->
                                        <div id="modal-rumah" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            Foto Rumah
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="modal-rumah">
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
                                                        <input type="hidden" name="oldRumah"
                                                            value="{{ $customer->photo_rumah }}">
                                                        @if ($customer->photo_rumah)
                                                            <p id="pesan-rumah"></p>
                                                            <img src="{{ asset('storage/' . $customer->photo_rumah) }}"
                                                                class="rumah-preview block img-fluid w-full mt-0">
                                                        @else
                                                            <p id="pesan-rumah"
                                                                class="text-center my-10 font-normal text-gray-600">
                                                                File tidak ditemukan.</p>
                                                            <img class="rumah-preview img-fluid w-full mt-0">
                                                        @endif
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                        <label for="rumah" data-modal-hide="modal-rumah"
                                                            type="button"
                                                            class="text-white cursor-pointer bg-main hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" name="photo_rumah" id="rumah" class="hidden"
                                            onchange="previewRumah()">
                                    </div>
                                    @error('photo_ktp')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                    @error('photo_rumah')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-end gap-3">
                            <a href="/customer"
                                class="flex bg-[#FF0000] w-21 h-10 bg-opacity-50 hover:bg-opacity-65 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">
                                Batal
                            </a>
                            <button type="submit"
                                class="flex bg-[#69B360] bg-opacity-60 hover:bg-opacity-75 w-21 h-10 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 me-2" viewBox="0 0 448 512">
                                    <path fill="#ffffff"
                                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg>Simpan
                            </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Simpan nilai kecamatan yang saat ini dipilih
        var selectedKecamatan = "{{ old('kecamatan', $customer->kecamatan) }}";
        // Simpan nilai desa yang saat ini dipilih
        var selectedDesa = "{{ old('desa', $customer->desa) }}";

        // Fungsi untuk menetapkan opsi yang dipilih pada elemen select kecamatan
        function setSelectedKecamatan() {
            var kecamatanSelect = document.getElementById('kecamatan');
            for (var i = 0; i < kecamatanSelect.options.length; i++) {
                if (kecamatanSelect.options[i].value == selectedKecamatan) {
                    kecamatanSelect.selectedIndex = i;
                    break;
                }
            }
        }

        // Fungsi untuk menetapkan opsi yang dipilih pada elemen select desa
        function setSelectedDesa() {
            var desaSelect = document.getElementById('desa');
            for (var i = 0; i < desaSelect.options.length; i++) {
                if (desaSelect.options[i].value == selectedDesa) {
                    desaSelect.selectedIndex = i;
                    break;
                }
            }
        }

        // Panggil fungsi untuk menetapkan opsi yang dipilih setelah dokumen dimuat
        document.addEventListener('DOMContentLoaded', function() {
            setSelectedKecamatan();
            setSelectedDesa();
        });

        // Fungsi untuk mendapatkan nilai yang dipilih pada elemen select kecamatan
        function getKecamatan() {
            var selectedKota = document.getElementById('kota').value;
            fetch('/api/kecamatan-by-kota?kota_id=' + selectedKota)
                .then(response => response.json())
                .then(data => {
                    var kecamatanSelect = document.getElementById('kecamatan');
                    kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
                    data.forEach(kecamatan => {
                        kecamatanSelect.innerHTML += '<option value="' + kecamatan.id + '">' + kecamatan.nama +
                            '</option>';
                    });
                    // Jika kecamatan sebelumnya terpilih, pilih kembali kecamatan tersebut setelah data terisi
                    kecamatanSelect.value = selectedKecamatan;
                });
        }


        // Fungsi untuk mendapatkan nilai yang dipilih pada elemen select desa
        function getDesa() {
            var selectedKecamatan = document.getElementById('kecamatan').value;
            fetch('/api/desa-by-kecamatan?kecamatan_id=' + selectedKecamatan)
                .then(response => response.json())
                .then(data => {
                    var desaSelect = document.getElementById('desa');
                    desaSelect.innerHTML = '<option value="">Pilih Desa</option>';
                    data.forEach(desa => {
                        desaSelect.innerHTML += '<option value="' + desa.id + '">' + desa.nama + '</option>';
                    });
                    // Jika desa sebelumnya terpilih, pilih kembali desa tersebut setelah data terisi
                    desaSelect.value = selectedDesa;
                });
        }



        // Image preview
        function previewKtp() {
            const image = document.querySelector('#ktp');
            const pesan = document.querySelector('#pesan-ktp');
            const icon = document.querySelector('#icon-ktp');
            const imgPreview = document.querySelector('.ktp-preview');

            pesan.classList.add('hidden');
            icon.classList.remove('grayscale');
            icon.classList.remove('brightness-200');
            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewRumah() {
            const image = document.querySelector('#rumah');
            const pesan = document.querySelector('#pesan-rumah');
            const icon = document.querySelector('#icon-rumah');
            const imgPreview = document.querySelector('.rumah-preview');

            pesan.classList.add('hidden');
            icon.classList.remove('grayscale');
            icon.classList.remove('brightness-50');
            icon.classList.remove('contrast-200');
            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
