@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <div
            class="flex items-center bg-gradient-to-r from-main to-currentcolor-500 ps-2 p-1 py-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg class="fill-white h-5 w-5 mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            <h2>
                Detail Staff
            </h2>
        </div>

        <section class="flex justify-start items-center">
            <div class="relative">
                <div class="flex flex-col md:flex-row gap-7 relative justify-center px-5 py-10 w-full">
                    @if ($user->photo_profil)
                        <img class="inline-block w-48" src="{{ asset('storage/' . $user->photo_profil) }}"
                            alt="{{ $user->name }}">
                    @else
                        <img class="inline-block w-48" src="{{ asset('img/avatar_user.jpg') }}">
                    @endif
                    <table class="text-lg font-medium">
                        <tr>
                            <td>Nama</td>
                            <td>: {{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: {{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td>: {{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $user->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>: {{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>: {{ $user->is_admin }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
