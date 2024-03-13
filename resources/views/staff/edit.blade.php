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
            Edit Staff
        </h2>

        <section class="flex justify-start items-center -mt-3">
            <div class="relative">
                <div class="flex relative justify-center px-0 md:px-10 py-5 md:py-10 w-full md:w-[720px]">
                    <form method="POST" action="/staff/{{ $user->id }}" enctype="multipart/form-data"
                        class="flex flex-col gap-2 w-full text-md font-bold">
                        @method('put')
                        @csrf
                        <table class="border-separate border-spacing-y-2">
                            <tr class="w-full">
                                <td>
                                    <label for="nama" class="text-black">Nama</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="name" id="nama" required autocomplete="off"
                                        autofocus value="{{ old('name', $user->name) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('name')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="email" class="text-black">Email</label>
                                </td>
                                <td class="w-full">
                                    <input type="email" name="email" id="email" required autocomplete="off"
                                        autofocus value="{{ old('email', $user->email) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('email')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="password" class="text-black">Password</label>
                                </td>
                                <td class="w-full">
                                    <input type="password" name="password" id="password" required autocomplete="off"
                                        value="{{ old('password', $user->password) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('password')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="telepon" class="text-black">No. HP</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="phone" id="telepon" autocomplete="off"
                                        value="{{ old('phone', $user->phone) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('phone')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="alamat" class="text-black">Alamat</label>
                                </td>
                                <td class="w-full">
                                    <input type="text" name="alamat" id="alamat" autocomplete="off"
                                        value="{{ old('alamat', $user->alamat) }}"
                                        class="h-10 w-full border-none rounded-md font-normal" />
                                    @error('alamat')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="jabatan" class="text-black">Jabatan</label>
                                </td>
                                <td>
                                    <select id="jabatan" name="jabatan"
                                        class="h-10 w-full border-none rounded-md font-normal">
                                        <option value="Teknisi Lpngn"
                                            {{ old('jabatan', $user->jabatan) === 'Teknisi Lpngn' ? 'selected' : '' }}>
                                            Teknisi Lpngn
                                        </option>
                                        <option value="Admin"
                                            {{ old('jabatan', $user->jabatan) === 'Admin' ? 'selected' : '' }}>
                                            Admin
                                        </option>
                                        <option value="NOC"
                                            {{ old('jabatan', $user->jabatan) === 'NOC' ? 'selected' : '' }}>
                                            NOC
                                        </option>
                                        <option value="Asisten NOC"
                                            {{ old('jabatan', $user->jabatan) === 'Asisten NOC' ? 'selected' : '' }}>
                                            Asisten NOC
                                        </option>
                                        <option value="Marketing"
                                            {{ old('jabatan', $user->jabatan) === 'Marketing' ? 'selected' : '' }}>
                                            Marketing
                                        </option>
                                        <option value="Direktur"
                                            {{ old('jabatan', $user->jabatan) === 'Direktur' ? 'selected' : '' }}>
                                            Direktur
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="role" class="text-black">Role</label>
                                </td>
                                <td>
                                    <select id="role" name="is_admin"
                                        class="h-10 w-full border-none rounded-md font-normal">
                                        <option value="Staff"
                                            {{ old('is_admin', $user->is_admin) === 'Staff' ? 'selected' : '' }}>
                                            Staff
                                        </option>
                                        <option value="Admin"
                                            {{ old('is_admin', $user->is_admin) === 'Admin' ? 'selected' : '' }}>
                                            Admin
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="w-full">
                                <td>
                                    <label for="photo_profil" class="text-black">Photo profil</label>
                                </td>
                                <td class="w-full">
                                    <input type="hidden" name="oldImage" value="{{ $user->photo_profil }}">
                                    <input type="file" name="photo_profil" id="photo_profil"
                                        value="{{ $user->photo_profil }}" onchange="previewImage()"
                                        class="h-10 w-full bg-white border-none rounded-md font-normal" />
                                    @error('photo_profil')
                                        <p class="mt-2 font-normal text-sm text-red-600 dark:text-red-500">{{ $message }}
                                        </p>
                                    @enderror
                                    @if ($user->photo_profil)
                                        <img src="{{ asset('storage/' . $user->photo_profil) }}"
                                            class="img-preview img-fluid mb-3 w-1/3 block mt-3">
                                    @else
                                        <img class="img-preview img-fluid w-1/3">
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-end gap-3">
                            <a href="/staff"
                                class="flex bg-[#FF0000] w-21 h-10 bg-opacity-50 hover:bg-opacity-65 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">
                                Batal
                            </a>
                            <button type="submit"
                                class="flex bg-[#69B360] bg-opacity-60 hover:bg-opacity-75 w-21 h-10 px-3 py-2.5 mt-5 rounded-md text-sm font-medium text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 me-2" viewBox="0 0 448 512">
                                    <path fill="#ffffff"
                                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg>Edit Staff
                            </button>
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
            imgPreview.style.marginTop = '12px';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
