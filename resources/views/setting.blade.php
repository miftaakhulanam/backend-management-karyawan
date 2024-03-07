@extends('layouts.main')

@section('container')
    <main class="flex-1 h-screen p-10 mt-14">
        <div class="relative">
            <div class="absolute bg-[#96C3ED] w-[110px] h-[110px] rounded-full right-1/2"></div>
            <div class="absolute bg-[#35AFE1] w-[85px] h-[85px] rounded-full right-2 bottom-1/3 translate-y-56"></div>
            <div class="absolute bg-main w-[140px] h-[140px] right-1/3 rounded-full -translate-x-10 bottom-0 translate-y-56">
            </div>
            <div class="relative">
                <h2
                    class="flex px-2 rounded-sm font-inter border-l-4 border-main font-bold items-center text-main text-lg z-50">
                    <div class="bg-white h-10 w-10 me-5 rounded-full flex justify-center items-center">
                        <svg class="fill-main w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
                        </svg>
                    </div>
                    Pengaturan
                </h2>
                <section class="flex gap-6 my-5">
                    <div class="flex flex-col w-full gap-6">
                        <div class="backdrop-blur w-full border border-[#515151] rounded-2xl p-3">
                            <h2 class="text-main font-bold text-lg mb-2">Absensi</h2>
                            <div class="flex gap-4">
                                <div
                                    class="bg-[#96C3ED] w-full font-bold p-3 rounded-xl flex flex-col justify-center items-center">
                                    <h1 class="text-white text-7xl">20</h1>
                                    <p class="text-white">Sudah Absen</p>
                                </div>
                                <div
                                    class="bg-[#009DDE] w-full font-bold p-3 rounded-xl flex flex-col justify-center items-center">
                                    <h1 class="text-white text-7xl">15</h1>
                                    <p class="text-white">Belum Absen</p>
                                </div>
                                <div
                                    class="bg-main w-full font-bold p-3 rounded-xl flex flex-col justify-center items-center">
                                    <div class="radial-progress text-white" style="--value: 80" role="progressbar">
                                        80%
                                    </div>
                                    <p class="text-white">Complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="backdrop-blur w-full border border-[#515151] rounded-2xl p-3">
                            <canvas id="chart" class="w-full"></canvas>
                        </div>
                    </div>
                    <div class="backdrop-blur-lg flex flex-col w-full border border-[#515151] rounded-2xl p-3">
                        <div class="bg-white w-full flex flex-col gap-2 py-6 px-4 mb-5 rounded-xl">
                            <h1 class="text-main flex justify-center items-end font-extrabold text-8xl">
                                08:30 <span class="text-4xl">WIB</span>
                            </h1>
                            <div class="flex flex-col justify-start">
                                <h3 class="text-main text-lg font-bold">
                                    Kabupaten Lamongan
                                </h3>
                                <div class="flex gap-2 items-center text-main text-base font-bold">
                                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6.5 20q-2.275 0-3.887-1.575T1 14.575q0-1.95 1.175-3.475T5.25 9.15q.625-2.3 2.5-3.725T12 4q2.925 0 4.963 2.038T19 11q1.725.2 2.863 1.488T23 15.5q0 1.875-1.312 3.188T18.5 20zm0-2h12q1.05 0 1.775-.725T21 15.5q0-1.05-.725-1.775T18.5 13H17v-2q0-2.075-1.463-3.538T12 6Q9.925 6 8.463 7.463T7 11h-.5q-1.45 0-2.475 1.025T3 14.5q0 1.45 1.025 2.475T6.5 18m5.5-6" />
                                    </svg>
                                    <h3>31° Berawan T-32° R-24°</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="px-4 flex items-center justify-between">
                                <span tabindex="0" class="focus:outline-none text-base font-bold text-[#1061CC]">Februari
                                    2024</span>
                                <div class="flex items-center">
                                    <button aria-label="calendar backward"
                                        class="bg-[#1061CC] rounded-full p-1 focus:text-gray-400 hover:text-gray-400 text-white box-border">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="15 6 9 12 15 18" />
                                        </svg>
                                    </button>
                                    <button aria-label="calendar forward"
                                        class="bg-[#1061CC] rounded-full p-1 focus:text-gray-400 hover:text-gray-400 ml-3 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 6 15 12 9 18" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-9 overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base font-medium text-center text-gray-800">
                                                        Mo
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base font-medium text-center text-gray-800">
                                                        Tu
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base font-medium text-center text-gray-800">
                                                        We
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base font-medium text-center text-gray-800">
                                                        Th
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base font-medium text-center text-gray-800">
                                                        Fr
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base font-medium text-center text-gray-800">
                                                        Sa
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="w-full flex justify-center">
                                                    <p class="text-base font-medium text-center text-gray-800">
                                                        Su
                                                    </p>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pt-6">
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                            </td>
                                            <td class="pt-6">
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                            </td>
                                            <td class="pt-6">
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        1
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pt-6">
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        2
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pt-6">
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">3</p>
                                                </div>
                                            </td>
                                            <td class="pt-6">
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">4</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        5
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        6
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        7
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="w-full h-full">
                                                    <div
                                                        class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                        <a role="link" tabindex="0"
                                                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-[#1061CC] rounded-full">8</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        9
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">10</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">11</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        12
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        13
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        14
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        15
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        16
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">17</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">18</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        19
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        20
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        21
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        22
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        23
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">24</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500">25</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        26
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        27
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        28
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        29
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                    <p class="text-base text-gray-500 font-medium">
                                                        30
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
