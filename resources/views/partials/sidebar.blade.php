<div class="flex flex-col justify-between h-full px-3 pb-4 pt-20 overflow-y-auto bg-main font-medium">
    <ul class="flex flex-col space-y-2">
        <div class="flex flex-col text-white justify-center gap-2 pb-3 border-b border-white">
            <h1 class="text-2xl font-bold text-center leading-[22px]">MANAGEMENT KARYAWAN</h1>
            <h2 class="text-lg font-normal text-center">
                PT. PERSADA DATA<br />
                MULTIMEDIA
            </h2>
            <p class="text-center text-sm font-semibold">{{ auth()->user()->email }}</p>
        </div>
        @can('super_admin')
            <li>
                <a class="flex items-center px-6 py-2 mt-3 text-white {{ Request::is('/') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-200 hover:bg-opacity-25 rounded-md"
                    href="/">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff"
                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                    <span class="mx-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="flex items-center px-6 py-2 mt-1 text-white {{ Request::is('admin-absensi*') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-100 hover:bg-opacity-25 rounded-md"
                    href="/admin-absensi">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="#ffffff"
                            d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                    <span class="mx-3">Absensi</span>
                </a>
            </li>
        @else
            <li>
                <a class="flex items-center px-6 py-2 mt-3 text-white {{ Request::is('/') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-200 hover:bg-opacity-25 rounded-md"
                    href="/">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff"
                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                    <span class="mx-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="flex items-center px-6 py-2 mt-1 text-white {{ Request::is('absensi*') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-100 hover:bg-opacity-25 rounded-md"
                    href="/absensi">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="#ffffff"
                            d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                    <span class="mx-3">Absensi</span>
                </a>
            </li>
            @can('admin')
                <li>
                    <a class="flex items-center px-6 py-2 mt-1 text-white {{ Request::is('monitoring*') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-200 hover:bg-opacity-25 rounded-md"
                        href="/monitoring">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="#ffffff"
                                d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V288H64V64H512z" />
                        </svg>
                        <span class="mx-3">Monitoring Staff</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center px-6 py-2 mt-1 text-white {{ Request::is('staff*') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-200 hover:bg-opacity-25 rounded-md"
                        href="/staff">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#ffffff"
                                d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                        </svg>
                        <span class="mx-3">Kelola Staff</span>
                    </a>
                </li>
            @elsecan('staff')
                <li>
                    <a class="flex items-center px-6 py-2 mt-1 text-white {{ Request::is('tugas*') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-200 hover:bg-opacity-25 rounded-md"
                        href="/tugas">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="#ffffff"
                                d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V288H64V64H512z" />
                        </svg>
                        <span class="mx-3">Tugas Harian</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center px-6 py-2 mt-1 text-white {{ Request::is('customer*') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-200 hover:bg-opacity-25 rounded-md"
                        href="/customer">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#ffffff"
                                d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                        </svg>
                        <span class="mx-3">Daftar Pelanggan</span>
                    </a>
                </li>
            @endcan
            <li>
                <a class="flex items-center px-6 py-2 mt-1 text-white {{ Request::is('komplain*') ? 'bg-gray-200 bg-opacity-25' : '' }} hover:bg-gray-200 hover:bg-opacity-25 rounded-md"
                    href="/komplain">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff"
                            d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                    <span class="mx-3">Komplain</span>
                </a>
            </li>
        @endcan
    </ul>
    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button"
        class="flex items-center w-full px-6 py-2 bg-white text-[#1061cc] hover:bg-gray-300 hover:text-[#1061cc] rounded-md">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="#1061cc"
                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
        </svg>
        <span class="mx-3">Logout</span>
    </button>
</div>
