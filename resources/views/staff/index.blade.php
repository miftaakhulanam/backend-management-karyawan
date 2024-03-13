@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14">
        <h2
            class="flex bg-gradient-to-r from-main to-currentcolor-500 ps-2 p-1 pt-2 rounded-lg font-inter font-bold text-white text-lg">
            <svg width="35" height="31" viewBox="0 0 35 31" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect class="h-6 w-8" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_21_95" transform="matrix(0.00984127 0 0 0.0111111 0.0571429 0)" />
                    </pattern>
                    <image id="image0_21_95" width="90" height="90"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEAElEQVR4nO2dPYvUQBiAI3h3otecd9V6WKiw2ImNHuIXaOF/sBHU6k4711/gRyEqWgtaKRaK+MXeKZyNioVaWKjYeSpa+dEsyj0ymGJXdpOZyWTm3WQeWNgimXfeh2GSvJkkSRKJRCKRSCQyNACrgOPAc+AXw88v4BlwDBhLJABMA6+pLq9UjhJGcpUld8sON7LT6aIuzIUUrebkuvA0pOif1IefIUXXiiSK9kMU7YlhF30fOAhsANakv13AY4QxrKK/Awcy2l4BXEMQfu32yrDlN7BDo/2VwGbgKgLwY7W/CFvOWcS6QWDKsaiXvA1/gPUWsTYCywSkHIt6ydvwskC8lwTErT2zxG24UiDedQLi1p5Z4jacKRDvPAFxa88scRvOFoh3loC4tWeWuA03C8QLeubh1p5Z4jZ8A0YsYo0AXwlIORb1krfhjbozY3k3R+0bjHIs6iVvw6UC8S4bxOkAJ4BGRnsNoJVuWznR8wXizRvEaRm026rqleE+i1j70311aRi03aiiaFJhkwZx1hpKNhW9TqfBJBQUY9YgzqxF+yZTx0mdBpNQUIwvwJRGjKl0W1M66dxb24NhNwvA6oz2VwOPEIJfu70iXLAno/3dCMKv3V4RLtiT0X4U7VD09gzR2xBEEgoHfX+mbsLm3KBV24jAr91eEbYsA7fU+bFGjMl026C3sRR+rPaXYCt4q0WsrcBtA+G1rXW8BWYcxJxJ28qjlrWOF8CEw7gTaZtZ1K7W8UMtFSgh9qacZcO1E32hxPgXM+LWrtaxpcT4WzLixlrHsFLWgNEZUbUiiaL9EEV7Ior2RBTtiSjaE1G0J6JoT0gX3ckrV3rop1E5tIs2cBhoqsfypItuJULQLYcC74CdiRQ0O91IhKBZpVt0WdKtq+h1OX39oLOoR6roViIEjXKonOnCQnQnb2mWkINhO5EK1eLwgBxH1ZNkwOf0d8b7+5WoFs0BOSqx/d7I4E821WJ8QI5qFPfjoc2zOFE0/Ve1Zoj2J5tqsWlAjqdz9rtX+jRCtTg0IMexdE4OJxu5tF3WKILLRh5v1fuYSso1nGxksVh2jSKYbGSN5AmnyUmSjRz2OktKL291tXgnp08PnJ36IYO2k2TKGdl3nYxsZNcoxtIXqXwK3D8le7QKopsS31bzH6eqIHp8QN9Cj+RulqJoP3ysgujmgL7FqcMxR3IOhktU4GAo4dXz84WSGJLTOykfU9jtxJ7Uq8P0yzsSeKfzFO4wX4KPpR+DkcCTsmWHruBNC5L9vqy6R/CadFcn5tRHYYQcIBeAo+nb1McrIbnqECX7YcC6jjiSXSNiuUEdQMICmjpA/3UdfpeE1QH+3bZSslXZVf3Uf2PJfwEeX/J0t76x5QAAAABJRU5ErkJggg==" />
                </defs>
            </svg>

            Kelola Staff
        </h2>
        <div class="flex flex-col md:flex-row justify-between">
            <a href="/staff/create"
                class="flex bg-[#69B360] bg-opacity-60 hover:bg-opacity-75 w-fit w-21 h-10 px-3 py-2.5 mt-3 md:mt-5 rounded-md text-sm font-bold text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 me-2" viewBox="0 0 640 512">
                    <path fill="#ffffff"
                        d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                </svg>Tambah
            </a>

            <form class="flex items-center mt-3 md:mt-5">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search" name="search" value="{{ request('search') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." />
                </div>
                <button type="submit"
                    class="py-2.5 px-[11px] ms-2 text-sm font-medium text-white bg-main rounded-lg border border-main hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </div>

        <div class="mt-3 sm:mt-5 overflow-x-auto">
            @if ($user->isEmpty())
                <div class="flex justify-center items-center my-xl-5 w-full h-96">
                    <div class="flex flex-col justify-center items-center">
                        <img class="w-40" src="{{ asset('img/avatar3.png') }}">
                        <p class="font-normal text-gray-400">Tidak ada data ditemukan</p>
                    </div>
                </div>
            @else
                <table class="w-full table-auto">
                    <thead class="">
                        <tr class="text-md text-main font-semibold border-b-2 border-main text-center">
                            <th>No.</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Username</th>
                            <th class="px-4 py-3">No HP</th>
                            <th class="px-4 py-3">Jabatan</th>
                            <th class="px-4 py-3">Role</th>
                            <th class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-normal text-gray-700 text-center">
                        @foreach ($user as $u)
                            <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                                <td class="ps-4">{{ $loop->iteration . '.' }}</td>
                                <td class="px-4 py-3 md:py-4">{{ $u->name }}</td>
                                <td class="px-4 py-3 md:py-4">{{ $u->email }}</td>
                                <td class="px-4 py-3 md:py-4">{{ $u->phone }}</td>
                                <td class="px-4 py-3 md:py-4">{{ $u->jabatan }}</td>
                                <td class="px-4 py-3 md:py-4">{{ $u->is_admin }}</td>
                                <td class="px-4 py-3 md:py-4">
                                    <div class="flex gap-3 justify-center">
                                        <a href="/staff/{{ $u->id }}">
                                            <svg class="h-7 fill-[#deb914] hover:fill-[#ba9800]"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5" />
                                            </svg>
                                        </a>
                                        <a href="/staff/{{ $u->id }}/edit">
                                            <svg class="h-6 fill-main hover:fill-blue-800"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                            </svg>
                                        </a>
                                        <button data-modal-target="popup-modal-delete-{{ $u->id }}"
                                            data-modal-toggle="popup-modal-delete-{{ $u->id }}" type="button">
                                            <svg class="h-6 fill-[#FF0000] hover:fill-[#cc0000]"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                            </svg>
                                        </button>
                                        {{-- Modal delete --}}
                                        <div id="popup-modal-delete-{{ $u->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-red-600 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3
                                                            class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                            Yakin ingin menghapus staff?
                                                        </h3>
                                                        <div class="flex justify-center">
                                                            <form action="/staff/{{ $u->id }}" method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <button
                                                                    class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                            <button
                                                                data-modal-hide="popup-modal-delete-{{ $u->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
@endsection
