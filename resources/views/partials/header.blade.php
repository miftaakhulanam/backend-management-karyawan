<div class="px-3 py-0 lg:px-10">
    <div class="flex items-center justify-between">
        <div class="flex items-center justify-center">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
            <a href="/" class="flex w-44 justify-center">
                <img src="{{ asset('img/logo.png') }}" class="w-16" alt="PT. PERSADA DATA MULTIMEDIA" />
            </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
                <div>
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                        class="text-gray-900 border border-black hover:bg-gray-200 focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-5 py-2 text-center inline-flex items-center"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" height="17" width="17  "
                            viewBox="0 0 448 512">
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                        {{ auth()->user()->email }}
                        <svg class="mb-1 ms-2 d-block" height="18" width="18" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="#000000"
                                d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownHover"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60">
                        <ul class="font-medium text-md text-gray-700" aria-labelledby="dropdownHoverButton">
                            <a href="/profile"
                                class="flex items-center px-4 border-b-2 mx-5 py-1 hover:bg-gray-200 hover:mx-0 hover:ps-9 hover:rounded-lg">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#1061cc"
                                        d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                                </svg>
                                <p class="block px-4 py-2">Profile</p>
                            </a>
                            <a href="setting-admin.html"
                                class="flex items-center py-1 px-4 border-b-2 mx-5 hover:bg-gray-200 hover:mx-0 hover:ps-9 hover:rounded-lg">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                                    <g fill="none">
                                        <defs>
                                            <mask id="pepiconsPopGearCircleFilled0">
                                                <path fill="#fff" d="M0 0h26v26H0z" />
                                                <g fill="#000" fill-rule="evenodd" clip-rule="evenodd">
                                                    <path
                                                        d="M13 15a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 2a4 4 0 1 0 0-8a4 4 0 0 0 0 8m3.504-11.29a2 2 0 0 1 2.309.375l1.102 1.102a2 2 0 0 1 .375 2.309l-.385.77a1 1 0 1 1-1.789-.895l.385-.77L17.399 7.5l-.77.385a1 1 0 1 1-.894-1.789z" />
                                                    <path
                                                        d="M18.644 8.888a1 1 0 0 1 1.297.564l.46 1.166a1 1 0 0 1-1.861.733l-.46-1.166a1 1 0 0 1 .564-1.297" />
                                                    <path
                                                        d="M20.633 10.323A2 2 0 0 1 22 12.221v1.558a2 2 0 0 1-1.367 1.898l-.817.272a1 1 0 1 1-.632-1.898L20 13.78v-1.558l-.816-.272a1 1 0 0 1 .632-1.898z" />
                                                    <path
                                                        d="M19.899 14.083a1 1 0 0 1 .518 1.316l-.5 1.15a1 1 0 1 1-1.834-.798l.5-1.15a1 1 0 0 1 1.316-.518" />
                                                    <path
                                                        d="M20.29 16.504a2 2 0 0 1-.375 2.309l-1.102 1.102a2 2 0 0 1-2.309.375l-.77-.385a1 1 0 1 1 .895-1.789l.77.385l1.102-1.102l-.385-.77a1 1 0 0 1 1.789-.894z" />
                                                    <path
                                                        d="M17.112 18.644a1 1 0 0 1-.563 1.297l-1.167.46a1 1 0 1 1-.733-1.861l1.167-.46a1 1 0 0 1 1.296.564" />
                                                    <path
                                                        d="M15.677 20.633A2 2 0 0 1 13.779 22h-1.558a2 2 0 0 1-1.898-1.367l-.272-.817a1 1 0 0 1 1.898-.632l.272.816h1.558l.272-.816a1 1 0 0 1 1.898.632z" />
                                                    <path
                                                        d="M11.917 19.899a1 1 0 0 1-1.316.518l-1.15-.5a1 1 0 1 1 .798-1.834l1.15.5a1 1 0 0 1 .518 1.316" />
                                                    <path
                                                        d="M9.496 20.29a2 2 0 0 1-2.309-.375l-1.102-1.102a2 2 0 0 1-.375-2.309l.385-.77a1 1 0 1 1 1.789.895l-.385.77L8.601 18.5l.77-.385a1 1 0 1 1 .894 1.789z" />
                                                    <path
                                                        d="M7.356 17.112a1 1 0 0 1-1.297-.563l-.46-1.167a1 1 0 0 1 1.861-.733l.46 1.166a1 1 0 0 1-.564 1.297" />
                                                    <path
                                                        d="M5.368 15.677A2 2 0 0 1 4 13.779v-1.558a2 2 0 0 1 1.368-1.898l.816-.272a1 1 0 1 1 .632 1.898L6 12.22v1.558l.816.272a1 1 0 1 1-.632 1.898z" />
                                                    <path
                                                        d="M6.101 11.917a1 1 0 0 1-.518-1.316l.5-1.15a1 1 0 0 1 1.834.798l-.5 1.15a1 1 0 0 1-1.316.518" />
                                                    <path
                                                        d="M5.71 9.496a2 2 0 0 1 .375-2.309l1.102-1.102a2 2 0 0 1 2.309-.375l.77.385a1 1 0 1 1-.895 1.789l-.77-.385L7.5 8.601l.385.77a1 1 0 1 1-1.789.894z" />
                                                    <path
                                                        d="M8.887 7.356a1 1 0 0 1 .564-1.297l1.167-.46a1 1 0 1 1 .733 1.861l-1.167.46a1 1 0 0 1-1.297-.564" />
                                                    <path
                                                        d="M10.323 5.368A2 2 0 0 1 12.221 4h1.558a2 2 0 0 1 1.898 1.368l.272.816a1 1 0 0 1-1.898.632L13.78 6h-1.558l-.272.816a1 1 0 0 1-1.898-.632z" />
                                                    <path
                                                        d="M14.083 6.101a1 1 0 0 1 1.316-.518l1.15.5a1 1 0 0 1-.798 1.834l-1.15-.5a1 1 0 0 1-.518-1.316" />
                                                </g>
                                            </mask>
                                        </defs>
                                        <circle cx="13" cy="13" r="13" fill="#1061cc"
                                            mask="url(#pepiconsPopGearCircleFilled0)" />
                                    </g>
                                </svg>
                                <p class="block px-4 py-2">Pengaturan</p>
                            </a>
                            <a href="notif-admin.html"
                                class="flex items-center py-1 px-4 mx-4 hover:bg-gray-200 hover:mx-0 hover:ps-8 hover:rounded-lg">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill="#1061cc"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m0 16.5c-.83 0-1.5-.67-1.5-1.5h3c0 .83-.67 1.5-1.5 1.5m5-2.5H7v-1l1-1v-2.61C8 9.27 9.03 7.47 11 7v-.5c0-.57.43-1 1-1s1 .43 1 1V7c1.97.47 3 2.28 3 4.39V14l1 1z" />
                                </svg>
                                <p class="block px-4 py-2">Notifikasi</p>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900 dark:text-white" role="none">
                            Neil Sims
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                            neil.sims@flowbite.com
                        </p>
                    </div>
                    <ul class="py-1" role="none">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
