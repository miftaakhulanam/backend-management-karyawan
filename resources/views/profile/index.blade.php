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
                    class="flex relative justify-center px-7 md:px-10 py-7 md:py-14 w-[300px] md:w-[430px] min-h-max backdrop-blur m-16 border border-[#515151] rounded-xl">
                    @if (auth()->user()->photo_profil)
                        <img class="absolute top-0 -translate-y-1/2 w-[70px] h-[70px] object-cover rounded-full border-[3px] border-gray-400/80"
                            src="{{ asset('storage/' . auth()->user()->photo_profil) }}" alt="{{ auth()->user()->name }}">
                    @else
                        <img class="absolute top-0 -translate-y-1/2 w-[70px] h-[70px] rounded-full border-[3px] border-gray-400/80"
                            src="{{ asset('img/profile.png') }}" alt="{{ auth()->user()->username }}">
                    @endif
                    <div class="flex flex-col gap-0 md:gap-3 w-full">
                        <div class="flex justify-center">
                            <a href="/profile/{{ auth()->user()->id }}/edit"
                                class="bg-main border-2 border-main hover:bg-transparent py-1 px-4 mt-5 md:mt-0 rounded-full text-sm font-medium text-white duration-200 hover:text-main">Edit
                                Profile</a>
                        </div>
                        <form action="#" class="flex flex-col gap-3 w-full mt-7">
                            <div class="flex items-center justify-between">
                                <label for="nama" class="text-black/50">Nama</label>
                                <input disabled type="text" name="nama" id="nama"
                                    value="{{ auth()->user()->name }}"
                                    class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label for="username" class="text-black/50">Email</label>
                                <input disabled type="text" name="username" id="username"
                                    value="{{ auth()->user()->email }}"
                                    class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label for="telepon" class="text-black/50">No. Telp</label>
                                <input disabled type="text" name="telepon" id="telepon"
                                    value="{{ auth()->user()->phone }}"
                                    class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label for="alamat" class="text-black/50">Alamat</label>
                                <input disabled type="text" name="alamat" id="alamat"
                                    value="{{ auth()->user()->alamat }}"
                                    class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                            </div>
                            <div class="flex items-center justify-between">
                                <label for="jabatan" class="text-black/50">Jabatan</label>
                                <input disabled type="text" name="jabatan" id="jabatan"
                                    value="{{ auth()->user()->jabatan }}"
                                    class="h-8 border-none rounded-md w-[170px] md:w-[270px]" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
