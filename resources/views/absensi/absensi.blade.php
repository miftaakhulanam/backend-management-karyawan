@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen p-10 mt-14">
        <h2
            class="flex bg-gradient-to-r from-main to-currentcolor-500 p-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2 mt-1" viewBox="0 0 640 512">
                <path fill="#ffffff"
                    d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>Absensi
        </h2>

        <div class="mt-[10%] h-max flex justify-center items-center">
            <a href="/absensi-scan"><img src="img/contoh.png" class="w-56" alt="" /></a>
        </div>
        <div class="flex items-center justify-center gap-3 mt-10">
            <a href="/absensi-scan" class="font-semibold text-white px-6 text-lg py-3 rounded-xl text-center bg-main">
                TAB FOR PRESENT
            </a>
        </div>
    </main>
@endsection
