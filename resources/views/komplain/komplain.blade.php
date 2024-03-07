@extends('layouts.main')

@section('container')
    <main class="flex-1 h-screen p-10 mt-14">
        <h2
            class="flex bg-gradient-to-r from-[#1061CC] to-currentcolor-500 p-2 rounded-lg font-inter font-bold text-white text-lg items-center">
            <svg class="h-7 w-7 me-2 ps-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff"
                    d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
            </svg>

            Komplain
        </h2>

        <div class="mt-6 overflow-x-auto">
            <table class="w-full table-auto">
                <thead class="">
                    <tr class="text-sm text-main font-semibold text-center border-b-2 border-main">
                        <th></th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Id Pelanggan</th>
                        <th class="px-4 py-3">Pesan</th>
                        <th class="px-4 py-3">Pic</th>
                        <th class="px-4 py-3">Update</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-normal text-gray-700 text-center">
                    <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                        <td class="ps-4">1.</td>
                        <td class="px-4 py-4">Abas</td>
                        <td class="px-4 py-4">SWH-0271-23</td>
                        <td class="px-4 py-4 flex justify-center">
                            <div class="bg-[#FFA235] w-max py-1 px-5 rounded-md">
                                <p>Interface LACP-BUNGAH (>90%)</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex gap-3 justify-center">
                                <svg class="fill-main w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z" />
                                </svg>
                                <svg class="fill-yellow-300 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-3 justify-center">
                                <div class="bg-[#04D900] w-2.5 h-2.5 rounded-full"></div>
                                <p>Update</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                        <td class="ps-4">2.</td>
                        <td class="px-4 py-4">Abas</td>
                        <td class="px-4 py-4">SWH-0271-23</td>
                        <td class="px-4 py-4 flex justify-center">
                            <div class="bg-[#FFA235] w-max py-1 px-5 rounded-md">
                                <p>Interface LACP-BUNGAH (>90%)</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex gap-3 justify-center">
                                <svg class="fill-main w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z" />
                                </svg>
                                <svg class="fill-yellow-300 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-3 justify-center">
                                <div class="bg-[#04D900] w-2.5 h-2.5 rounded-full"></div>
                                <p>Update</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                        <td class="ps-4">3.</td>
                        <td class="px-4 py-4">Abas</td>
                        <td class="px-4 py-4">SWH-0271-23</td>
                        <td class="px-4 py-4 flex justify-center">
                            <div class="bg-[#FFA235] w-max py-1 px-5 rounded-md">
                                <p>Interface LACP-BUNGAH (>90%)</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex gap-3 justify-center">
                                <svg class="fill-main w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z" />
                                </svg>
                                <svg class="fill-yellow-300 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-3 justify-center">
                                <div class="bg-[#04D900] w-2.5 h-2.5 rounded-full"></div>
                                <p>Update</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                        <td class="ps-4">4.</td>
                        <td class="px-4 py-4">Abas</td>
                        <td class="px-4 py-4">SWH-0271-23</td>
                        <td class="px-4 py-4 flex justify-center">
                            <div class="bg-[#FFA235] w-max py-1 px-5 rounded-md">
                                <p>Interface LACP-BUNGAH (>90%)</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex gap-3 justify-center">
                                <svg class="fill-main w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z" />
                                </svg>
                                <svg class="fill-yellow-300 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-3 justify-center">
                                <div class="bg-[#04D900] w-2.5 h-2.5 rounded-full"></div>
                                <p>Update</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                        <td class="ps-4">5.</td>
                        <td class="px-4 py-4">Abas</td>
                        <td class="px-4 py-4">SWH-0271-23</td>
                        <td class="px-4 py-4 flex justify-center">
                            <div class="bg-[#FFA235] w-max py-1 px-5 rounded-md">
                                <p>Interface LACP-BUNGAH (>90%)</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex gap-3 justify-center">
                                <svg class="fill-main w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z" />
                                </svg>
                                <svg class="fill-yellow-300 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-3 justify-center">
                                <div class="bg-[#04D900] w-2.5 h-2.5 rounded-full"></div>
                                <p>Update</p>
                            </div>
                        </td>
                    </tr>
                    <tr class="py-10 bg-gray-100 hover:bg-gray-200 font-medium">
                        <td class="ps-4">6.</td>
                        <td class="px-4 py-4">Abas</td>
                        <td class="px-4 py-4">SWH-0271-23</td>
                        <td class="px-4 py-4 flex justify-center">
                            <div class="bg-[#FFA235] w-max py-1 px-5 rounded-md">
                                <p>Interface LACP-BUNGAH (>90%)</p>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex gap-3 justify-center">
                                <svg class="fill-main w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm152 32c5.3 0 10.2 2.6 13.2 6.9l88 128c3.4 4.9 3.7 11.3 1 16.5s-8.2 8.6-14.2 8.6H216 176 128 80c-5.8 0-11.1-3.1-13.9-8.1s-2.8-11.2 .2-16.1l48-80c2.9-4.8 8.1-7.8 13.7-7.8s10.8 2.9 13.7 7.8l12.8 21.4 48.3-70.2c3-4.3 7.9-6.9 13.2-6.9z" />
                                </svg>
                                <svg class="fill-yellow-300 w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <div class="flex items-center gap-3 justify-center">
                                <div class="bg-[#04D900] w-2.5 h-2.5 rounded-full"></div>
                                <p>Update</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
