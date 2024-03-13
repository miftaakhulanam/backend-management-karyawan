@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r items-center from-main to-currentcolor-500 ps-2 p-1 py-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="31"viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12s4.477 10 10 10" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13 2.05S16 6 16 12m-5 9.95S8 18 8 12c0-6 3-9.95 3-9.95M2.63 15.5H12m-9.37-7h18.74" />
                    <path
                        d="M21.879 17.917c.494.304.463 1.043-.045 1.101l-2.567.291l-1.151 2.312c-.228.459-.933.234-1.05-.334l-1.255-6.116c-.099-.48.333-.782.75-.525z"
                        clip-rule="evenodd" />
                </g>
            </svg>
            Tambah Paket
        </h2>

        <section class="flex justify-start items-center mt-3">
            <div class="flex relative justify-center px-0 md:px-10 py-16 -mt-5 w-full md:w-[720px]">
                <form method="POST" action="/pengaturan/paket" class="flex flex-col gap-2 w-full text-md font-bold">
                    @csrf
                    <div class="flex items-center gap-3 justify-between">
                        <label for="nama" class="text-black">Nama</label>
                        <div class="w-full">
                            <input type="text" name="nama" id="nama" required autocomplete="off" autofocus
                                value="{{ old('nama') }}" class="h-10 w-full border-none rounded-md font-normal" />
                            @error('nama')
                                <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end gap-3">
                        <a href="/pengaturan/paket"
                            class="flex bg-[#FF0000] w-21 h-10 bg-opacity-50 hover:bg-opacity-65 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">

                            Batal
                        </a>
                        <button type="submit"
                            class="flex bg-[#69B360] bg-opacity-60 hover:bg-opacity-75 w-21 h-10 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">
                            Tambah
                        </button>
                </form>
            </div>
        </section>
    </main>

    <script>
        function previewImage() {
            const image = document.querySelector('#photo_profil');
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
