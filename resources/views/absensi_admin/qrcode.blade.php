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

        <div class="mt-5 h-max flex flex-col gap-5 justify-center items-center">
            <div class="mt-10 h-max flex flex-col gap-5 justify-center items-center">
                <div class="bg-white p-5 rounded-2xl">
                    <div class="visible-print text-center">
                        <img src="{{ asset('storage/qrcodes/qrcode.svg') }}" alt="QR Code">
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <svg class="hidden lg:block w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#000000"
                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                    </svg>
                    <h1 class="font-bold text-center text-3xl md:text-4xl">SCAN ME FOR PRESENT</h1>
                </div>
            </div>
    </main>
@endsection
