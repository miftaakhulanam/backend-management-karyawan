@extends('layouts.main2')

@section('container')
    <main class="flex h-screen justify-center items-center overflow-x-hidden overflow-y-auto p-10 bg-gray-200">
        <section class="flex justify-center items-center">
            <div class="relative">
                <div class="bg-[#96C3ED] w-[100px] h-[100px] rounded-full absolute top-9"></div>
                <div class="bg-main w-[190px] h-[190px] rounded-full absolute -right-12 top-[55%]"></div>
                <div
                    class="flex relative justify-center px-10 md:px-16 py-16 w-[330px] md:w-[530px] h-[300px] backdrop-blur m-16 border border-[#515151] rounded-xl">
                    <div class="absolute top-0 -translate-y-1/2 mt-12  w-[70px] h-[70px] flex justify-center items-center">
                        <img src="img/logo.png" alt="">
                    </div>
                    <form action="/login" method="POST" class="flex flex-col gap-3 w-full mt-9">
                        @csrf
                        <div class="flex flex-col gap-3 items-center justify-center" x-data="{ show: true }">
                            <input type="text" name="name" placeholder="Username" id="username" autofocus required
                                value="{{ old('name') }}" class="text-md ps-6 h-9 w-full border-none rounded-md" />
                            @error('name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                            <div class="relative w-full">
                                <input placeholder="Password" id="password" name="password" required
                                    :type="show ? 'password' : 'text'"class="text-md ps-6 h-9 w-full border-none rounded-md" />
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                    <svg class="h-5 text-gray-500" fill="none" @click="show = !show"
                                        :class="{ 'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                        </path>
                                    </svg>
                                    <svg class="h-5 text-gray-700" fill="none" @click="show = !show"
                                        :class="{ 'block': !show, 'hidden': show }" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512">
                                        <path fill="currentColor"
                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center text-center items-center">
                            <button type="submit"
                                class="bg-main w-44 rounded-full text-white font-semibold text-md hover:bg-blue-800 my-5 py-2">Login</button>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"  defer></script>
@endsection
