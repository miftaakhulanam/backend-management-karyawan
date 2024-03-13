@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2 class="flex px-2 rounded-sm font-inter border-l-4 border-main font-bold items-center text-main text-lg">
            <div class="bg-white h-10 w-10 me-5 rounded-full flex justify-center items-center">
                <svg class="fill-main h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
            </div>
            Profile
        </h2>
        <section class="flex justify-center items-center">
            <div class="relative">
                <div class="bg-[#96C3ED] w-[100px] h-[100px] rounded-full absolute top-9"></div>
                <div class="bg-main w-[120px] h-[120px] rounded-full absolute right-0 top-[35%]"></div>
                <div class="bg-[#35AFE1] w-[80px] h-[80px] rounded-full absolute bottom-8 left-12"></div>
                <div
                    class="flex relative justify-center px-7 md:px-10 py-7 md:py-16 w-[300px] md:w-[430px] min-h-max backdrop-blur m-16 border border-[#515151] rounded-xl">
                    <div
                        class="absolute top-0 -translate-y-1/2 w-[70px] h-[70px] rounded-full border-[3px] border-gray-400/80 overflow-hidden">
                        @if (auth()->user()->photo_profil)
                            <img class="img-preview object-cover w-full h-full"
                                src="{{ asset('storage/' . auth()->user()->photo_profil) }}"
                                alt="{{ auth()->user()->name }}">
                        @else
                            <img class="img-preview object-cover w-full h-full" src="{{ asset('img/profile.png') }}"
                                alt="{{ auth()->user()->username }}">
                        @endif
                        <label for="photo_profil"
                            class="absolute flex justify-center bg-transparent items-center h-full w-full border-[3px] border-transparent rounded-full bottom-0 hover:bg-black hover:bg-opacity-50 group duration-150 cursor-pointer">
                            <svg class="hidden group-hover:block group-hover:text-gray-200/75 w-8"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18 19.25H6a2.75 2.75 0 0 1-2.75-2.75v-6A2.75 2.75 0 0 1 6 7.75h.6L7.78 6a2.76 2.76 0 0 1 2.29-1.22h3.86A2.76 2.76 0 0 1 16.22 6l1.18 1.75h.6a2.75 2.75 0 0 1 2.75 2.75v6A2.75 2.75 0 0 1 18 19.25m-12-10a1.25 1.25 0 0 0-1.25 1.25v6A1.25 1.25 0 0 0 6 17.75h12a1.25 1.25 0 0 0 1.25-1.25v-6A1.25 1.25 0 0 0 18 9.25h-1a.75.75 0 0 1-.62-.33L15 6.81a1.24 1.24 0 0 0-1-.56h-3.93a1.24 1.24 0 0 0-1 .56L7.62 8.92a.75.75 0 0 1-.62.33Z" />
                                <path fill="currentColor"
                                    d="M12 16.25A3.25 3.25 0 1 1 15.25 13A3.26 3.26 0 0 1 12 16.25m0-5A1.75 1.75 0 1 0 13.75 13A1.76 1.76 0 0 0 12 11.25" />
                            </svg>
                        </label>
                    </div>
                    <form method="POST" action="/profile/{{ auth()->user()->id }}" enctype="multipart/form-data"
                        class="flex flex-col gap-3 w-full mt-7">
                        @method('put')
                        @csrf
                        <input type="hidden" name="oldImage" value="{{ auth()->user()->photo_profil }}">
                        <input type="file" name="photo_profil" id="photo_profil" class="hidden"
                            onchange="previewImage()">
                        @error('photo_profil')
                            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center justify-between">
                            <label for="nama" class="text-black/50">Nama</label>
                            <input type="text" name="name" id="nama" required autocomplete="off"
                                value="{{ old('name', auth()->user()->name) }}"
                                class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                        </div>
                        @error('name')
                            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center justify-between">
                            <label for="email" class="text-black/50">Email</label>
                            <input type="email" name="email" id="email" required autocomplete="off"
                                value="{{ old('email', auth()->user()->email) }}"
                                class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                        </div>
                        @error('email')
                            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center justify-between">
                            <label for="telepon" class="text-black/50">No. Telp</label>
                            <input type="text" name="phone" id="telepon" autocomplete="off"
                                value="{{ old('phone', auth()->user()->phone) }}"
                                class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                        </div>
                        @error('phone')
                            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center justify-between">
                            <label for="alamat" class="text-black/50">Alamat</label>
                            <input type="text" name="alamat" id="alamat" autocomplete="off"
                                value="{{ old('alamat', auth()->user()->alamat) }}"
                                class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                        </div>
                        @error('alamat')
                            <p class="text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <div class="flex justify-center mt-5">
                            <button type="submit"
                                class="bg-main border-2 border-main hover:bg-transparent py-1 px-6 rounded-full text-sm font-medium text-white hover:text-main duration-200">
                                SIMPAN
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script>
        function previewImage() {
            const image = document.querySelector('#photo_profil');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
