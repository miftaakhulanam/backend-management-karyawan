@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r from-[#1061CC] to-currentcolor-500 p-2 rounded-lg font-inter font-bold text-white text-lg items-center">
            <svg class="h-7 w-7 me-2 ps-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff"
                    d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
            </svg>
            Edit Komplain
        </h2>

        <section class="flex justify-start items-center mt-3">
            <div class="relative">
                <div class="flex relative justify-center px-0 md:px-10 py-5 md:py-10 w-full md:w-[720px]">
                    <form method="POST" action="/komplain-admin/{{ $komplain->id }}" enctype="multipart/form-data"
                        class="flex flex-col gap-2 w-full text-md font-bold">
                        @method('put')
                        @csrf
                        <table class="border-separate border-spacing-y-2">
                            <tr class="w-full">
                                <td>
                                    <label for="user_id" class="text-black md:text-nowrap">Teknisi</label>
                                </td>
                                <td class="w-full">
                                    <select id="user_id" name="user_id" class="w-full border-none rounded-md font-normal">
                                        <option value="">Pilih teknisi</option>
                                        @foreach ($user as $u)
                                            @if (old('user_id', $komplain->user->id) == $u->id)
                                                <option value="{{ $u->id }}" selected>{{ $u->name }}</option>
                                            @else
                                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="customer_id" class="text-black md:text-nowrap">Pelanggan</label>
                                </td>
                                <td class="w-full">
                                    <select id="customer_id" name="customer_id"
                                        class="w-full border-none rounded-md font-normal">
                                        <option value="">Pilih pelanggan</option>
                                        @foreach ($customer as $c)
                                            @if (old('customer_id', $komplain->customer->id) == $c->id)
                                                <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                                            @else
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('customer_id')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="pesan" class="text-black md:text-nowrap">Pesan</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="pesan" id="pesan" required autocomplete="off"
                                        autofocus value="{{ old('pesan', $komplain->pesan) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('pesan')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="status" class="text-black md:text-nowrap">Status</label>
                                </td>
                                <td>
                                    <select id="status" name="status"
                                        class="h-10 w-full border-none rounded-md font-normal">
                                        <option value="Belum selesai"
                                            {{ old('status', $komplain->status) === 'Belum selesai' ? 'selected' : '' }}>
                                            Belum selesai
                                        </option>
                                        <option value="Tertunda"
                                            {{ old('status', $komplain->status) === 'Tertunda' ? 'selected' : '' }}>
                                            Tertunda
                                        </option>
                                        <option value="Selesai"
                                            {{ old('status', $komplain->status) === 'Selesai' ? 'selected' : '' }}>
                                            Selesai
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="photo" class="text-black md:text-nowrap">Photo</label>
                                </td>
                                <td class="w-full">
                                    <input type="hidden" name="oldImage" value="{{ $komplain->photo }}">
                                    <input type="file" name="photo" id="photo" value="{{ $komplain->photo }}"
                                        onchange="previewImage()"
                                        class="h-10 w-full bg-white border-none rounded-md font-normal" />
                                    @error('photo')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                    @if ($komplain->photo)
                                        <img src="{{ asset('storage/' . $komplain->photo) }}"
                                            class="img-preview img-fluid mb-3 w-1/3 block mt-3">
                                    @else
                                        <img class="img-preview img-fluid w-1/3">
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-end gap-3">
                            <a href="/komplain-admin"
                                class="flex bg-[#FF0000] w-21 h-10 bg-opacity-50 hover:bg-opacity-65 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">
                                Batal
                            </a>
                            <button type="submit"
                                class="flex bg-[#69B360] bg-opacity-60 hover:bg-opacity-75 w-21 h-10 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 me-2" viewBox="0 0 448 512">
                                    <path fill="#ffffff"
                                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg>Edit Komplain
                            </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script>
        function previewImage() {
            const image = document.querySelector('#photo');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            imgPreview.style.marginTop = '12px';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
