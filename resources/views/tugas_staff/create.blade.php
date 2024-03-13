@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r from-main to-currentcolor-500 ps-2 p-1 pt-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg width="35" height="31" viewBox="0 0 35 31" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect class="h-6 w-8" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_21_95" transform="matrix(0.00984127 0 0 0.0111111 0.0571429 0)" />
                    </pattern>
                    <image id="image0_21_95" width="90" height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEAElEQVR4nO2dPYvUQBiAI3h3otecd9V6WKiw2ImNHuIXaOF/sBHU6k4711/gRyEqWgtaKRaK+MXeKZyNioVaWKjYeSpa+dEsyj0ymGJXdpOZyWTm3WQeWNgimXfeh2GSvJkkSRKJRCKRSCQyNACrgOPAc+AXw88v4BlwDBhLJABMA6+pLq9UjhJGcpUld8sON7LT6aIuzIUUrebkuvA0pOif1IefIUXXiiSK9kMU7YlhF30fOAhsANakv13AY4QxrKK/Awcy2l4BXEMQfu32yrDlN7BDo/2VwGbgKgLwY7W/CFvOWcS6QWDKsaiXvA1/gPUWsTYCywSkHIt6ydvwskC8lwTErT2zxG24UiDedQLi1p5Z4jacKRDvPAFxa88scRvOFoh3loC4tWeWuA03C8QLeubh1p5Z4jZ8A0YsYo0AXwlIORb1krfhjbozY3k3R+0bjHIs6iVvw6UC8S4bxOkAJ4BGRnsNoJVuWznR8wXizRvEaRm026rqleE+i1j70311aRi03aiiaFJhkwZx1hpKNhW9TqfBJBQUY9YgzqxF+yZTx0mdBpNQUIwvwJRGjKl0W1M66dxb24NhNwvA6oz2VwOPEIJfu70iXLAno/3dCMKv3V4RLtiT0X4U7VD09gzR2xBEEgoHfX+mbsLm3KBV24jAr91eEbYsA7fU+bFGjMl026C3sRR+rPaXYCt4q0WsrcBtA+G1rXW8BWYcxJxJ28qjlrWOF8CEw7gTaZtZ1K7W8UMtFSgh9qacZcO1E32hxPgXM+LWrtaxpcT4WzLixlrHsFLWgNEZUbUiiaL9EEV7Ior2RBTtiSjaE1G0J6JoT0gX3ckrV3rop1E5tIs2cBhoqsfypItuJULQLYcC74CdiRQ0O91IhKBZpVt0WdKtq+h1OX39oLOoR6roViIEjXKonOnCQnQnb2mWkINhO5EK1eLwgBxH1ZNkwOf0d8b7+5WoFs0BOSqx/d7I4E821WJ8QI5qFPfjoc2zOFE0/Ve1Zoj2J5tqsWlAjqdz9rtX+jRCtTg0IMexdE4OJxu5tF3WKILLRh5v1fuYSso1nGxksVh2jSKYbGSN5AmnyUmSjRz2OktKL291tXgnp08PnJ36IYO2k2TKGdl3nYxsZNcoxtIXqXwK3D8le7QKopsS31bzH6eqIHp8QN9Cj+RulqJoP3ysgujmgL7FqcMxR3IOhktU4GAo4dXz84WSGJLTOykfU9jtxJ7Uq8P0yzsSeKfzFO4wX4KPpR+DkcCTsmWHruBNC5L9vqy6R/CadFcn5tRHYYQcIBeAo+nb1McrIbnqECX7YcC6jjiSXSNiuUEdQMICmjpA/3UdfpeE1QH+3bZSslXZVf3Uf2PJfwEeX/J0t76x5QAAAABJRU5ErkJggg==" />
                </defs>
            </svg>
            Tambah Tugas
        </h2>

        <section class="flex justify-start items-center mt-0 md:mt-3">
            <div class="relative">
                <div class="flex relative justify-center px-0 md:px-10 py-5 md:py-10 w-full md:w-[720px]">
                    <form method="POST" action="/tugas" enctype="multipart/form-data"
                        class="flex flex-col gap-2 w-full font-bold">
                        @csrf
                        <table class="border-separate border-spacing-y-2">
                            <tr class="mb-3">
                                <td class="text-black text-2xl pb-3" colspan="2">Detail Pelanggan</td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="name" class="text-black md:text-nowrap">Nama</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="name" id="name" required autocomplete="off"
                                        autofocus value="{{ old('name') }}"
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
                                        value="{{ old('id_customer') }}"
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
                                        value="{{ old('username') }}"
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
                                        autocomplete="off" value="{{ old('nik') }}"
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
                                        value="{{ old('phone') }}"
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
                                        value="{{ old('wifi_password') }}"
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
                                        value="{{ old('koordinat') }}"
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
                                <td class="w-full">
                                    <select id="kota" onchange="getKecamatan()" name="kota"
                                        class="w-full border-none rounded-md font-normal">
                                        <option value="">Pilih Kota</option>
                                        @foreach ($kota as $k)
                                            <option value="{{ $k->id }}">
                                                {{ $k->nama }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('kota')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="kecamatan" class="text-black md:text-nowrap">Kecamatan</label>
                                </td>
                                <td class="w-full ">
                                    <select id="kecamatan" onchange="getDesa()" name="kecamatan"
                                        class="w-full border-none rounded-md font-normal">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                    @error('kecamatan')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="desa" class="text-black md:text-nowrap">Desa</label>
                                </td>
                                <td class="w-full ">
                                    <select id="desa" name="desa"
                                        class="w-full border-none rounded-md font-normal">
                                        <option value="">Pilih Desa</option>
                                    </select>
                                    @error('desa')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label class="text-black md:text-nowrap">Upload Data</label>
                                </td>
                                <td class="flex gap-4">
                                    <div>
                                        <svg id="icon-ktp" class="cursor-pointer grayscale brightness-200"
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
                                                        <p id="pesan-ktp"
                                                            class="text-center my-10 font-normal text-gray-600">
                                                            File tidak ditemukan.</p>
                                                        <img class="ktp-preview img-fluid w-full mt-0">
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
                                        <svg id="icon-rumah" class="cursor-pointer grayscale brightness-50 contrast-200"
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
                                                        <p id="pesan-rumah"
                                                            class="text-center my-10 font-normal text-gray-600">
                                                            File tidak ditemukan.</p>
                                                        <img class="rumah-preview img-fluid w-full mt-0">
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
                            <tr class="mb-3 mt-5">
                                <td class="text-black text-2xl py-3" colspan="2">Detail Aktivitas</td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="activity" class="text-black md:text-nowrap">Aktivitas</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="activity" id="activity" required autocomplete="off"
                                        autofocus value="{{ old('activity') }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('activity')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="paket" class="text-black md:text-nowrap">Paket</label>
                                </td>
                                <td class="w-full">
                                    <select id="paket" name="paket"
                                        class="w-full border-none rounded-md font-normal">
                                        <option value="">Pilih paket</option>
                                        @foreach ($paket as $p)
                                            @if (old('paket') == $p->id)
                                                <option value="{{ $p->id }}" selected>{{ $p->nama }}</option>
                                            @else
                                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('paket')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="start_time" class="text-black md:text-nowrap">Mulai Pekerjaan</label>
                                </td>
                                <td class="w-full">
                                    <input type="datetime-local" name="start_time" id="start_time" required
                                        value="{{ old('start_time') }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('start_time')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-end gap-3">
                            <a href="/tugas"
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
        // Alamat
        function getKecamatan() {
            var kotaId = document.getElementById('kota').value;
            fetch('/api/kecamatan-by-kota?kota_id=' + kotaId)
                .then(response => response.json())
                .then(data => {
                    var kecamatanSelect = document.getElementById('kecamatan');
                    kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
                    data.forEach(kecamatan => {
                        kecamatanSelect.innerHTML += '<option value="' + kecamatan.id + '">' + kecamatan
                            .nama +
                            '</option>';
                    });
                });
        }

        function getDesa() {
            var kecamatanId = document.getElementById('kecamatan').value;
            fetch('/api/desa-by-kecamatan?kecamatan_id=' + kecamatanId)
                .then(response => response.json())
                .then(data => {
                    var desaSelect = document.getElementById('desa');
                    desaSelect.innerHTML = '<option value="">Pilih Desa</option>';
                    data.forEach(desa => {
                        desaSelect.innerHTML += '<option value="' + desa.id + '" >' + desa.nama +
                            '</option>';
                    });
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
