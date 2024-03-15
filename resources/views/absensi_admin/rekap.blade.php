@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r from-main to-currentcolor-500 p-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg class="h-5 w-5 mx-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="m7.4 16l3.05-3.05l2 2L16 11.425V13h2V8h-5v2h1.575l-2.125 2.125l-2-2L6 14.6zM5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21z" />
            </svg>Rekap Absensi
        </h2>

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
