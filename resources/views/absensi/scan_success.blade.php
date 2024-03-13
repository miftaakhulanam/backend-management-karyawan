@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r from-main to-currentcolor-500 p-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2 mt-1" viewBox="0 0 640 512">
                <path fill="#ffffff"
                    d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>Absensi
        </h2>

        <section class="flex flex-col gap-16 md:gap-20 justify-center items-center my-16 md:my-14">
            <div class="relative flex flex-col justify-center items-center">
                <div class="bg-green-300 w-[100px] h-[100px] rounded-full absolute right-8 top-0"></div>
                <div class="bg-main/75 w-[190px] h-[190px] rounded-full absolute left-0 md:-left-10 -bottom-6"></div>
                <img class="h-52 md:h-56 mx-20 z-20" src="{{ asset('img/avatar2.png') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center">
                <h2 class="flex text-lg md:text-2xl opacity-50 font-bold text-center">Hallo,{{ auth()->user()->email }}
                    👋 <br class="block md:hidden">Terima Kasih sudah Absensi</h2>
                <h2 class="flex text-sm md:text-xl font-semibold md:font-bold text-center">Ayo memulai harimu di PT. Persada
                    Data
                    Multimedia
                </h2>
            </div>
        </section>
    </main>
@endsection
