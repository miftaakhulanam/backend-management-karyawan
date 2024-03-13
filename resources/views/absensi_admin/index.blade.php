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
        <div class="flex justify-between">
            <a href="/admin-absensi/qrcode"
                class="flex bg-[#69B360] bg-opacity-60 hover:bg-opacity-75 w-21 h-10 px-3 py-2.5 mt-3 md:mt-5 rounded-md text-sm font-bold text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 me-2" viewBox="0 0 448 512">
                    <path fill="#ffffff"
                        d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z" />
                </svg>
                Scan Absensi
            </a>
        </div>

        <div class="mt-3 md:mt-5 overflow-x-auto">
            @if ($absensi->isEmpty())
                <div class="flex justify-center items-center my-xl-5 w-full h-96">
                    <div class="flex flex-col justify-center items-center">
                        <img class="w-40" src="{{ asset('img/avatar3.png') }}">
                        <p class="font-normal text-gray-400">Belum ada data absen</p>
                    </div>
                </div>
            @else
                <table class="w-full table-auto">
                    <thead class="">
                        <tr class="text-sm text-main font-semibold text-center border-b-2 border-main">
                            <th>No.</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Pukul</th>
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Jabatan</th>
                            <th class="px-4 py-3">Username</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700 text-center">
                        @foreach ($absensi as $a)
                            <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                                <td class="ps-4">{{ $loop->iteration . '.' }}</td>
                                <td class="px-4 py-4">{{ $a->user->name }}</td>
                                <td class="px-4 py-4">{{ $a->created_at->format('H:i') }}</td>
                                <td class="px-4 py-4">{{ \Carbon\Carbon::parse($a->created_at)->isoFormat('DD MMM YYYY') }}
                                </td>
                                <td class="px-4 py-4">{{ $a->user->jabatan }}</td>
                                <td class="px-4 py-4">{{ $a->user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
@endsection
