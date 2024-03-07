@extends('layouts.main')

@section('container')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 mt-14">
        <div class="flex flex-col gap-6 p-10">
            <div class="bg-white p-8 rounded-xl shadow-xl">
                <div class="flex relative">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-main font-bold text-3xl">
                            Hallo, {{ auth()->user()->email }}
                        </h1>
                        <div>
                            <p class="text-gray-900 font-bold">
                                Siap memuali harimu di PT. Persada Data Multimedia ?
                            </p>
                            <p>yuk lihat dan cek beranda mu ...</p>
                        </div>
                    </div>
                    <img class="absolute w-36 -right-12 -bottom-8" src="../img/avatar.png" alt="" />
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:p-8 p-5 bg-white rounded-xl shadow-xl flex-1" x-data="app()" x-init="[initDate(), getNoOfDays()]"
                    x-cloak>
                    <div class="px-4 flex items-center justify-between">
                        <div>
                            <span x-text="MONTH_NAMES[month]"
                                class="focus:outline-none text-base font-bold text-main"></span>
                            <span x-text="year" class="focus:outline-none text-base font-bold text-main"></span>
                        </div>
                        <div class="flex items-center">
                            <button type="button" :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                                :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()"
                                class="bg-main rounded-full p-1 focus:bg-blue-800 hover:bg-blue-800 text-white box-border">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="15 6 9 12 15 18" />
                                </svg>
                            </button>
                            <button type="button" :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                                :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()"
                                class="bg-main rounded-full p-1 focus:bg-blue-800 hover:bg-blue-800 ml-3 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="9 6 15 12 9 18" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-9 overflow-x-auto">
                        <div class="w-full px-3">
                            <div class="flex">
                                <template x-for="(day, index) in DAYS" :key="index">
                                    <div class="w-[14.28%]">
                                        <div class="w-full flex justify-center">
                                            <p x-text="day" class="text-base font-medium text-center text-gray-800"></p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            <div class="flex flex-wrap">
                                <template x-for="blankday in blankdays">
                                    <div class="w-[14.28%]"></div>
                                </template>
                                <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                    <div class="pt-1 w-[14.28%]">
                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                            <p x-text="date"
                                                class="flex justify-center items-center text-base w-[30px] h-[30px] text-gray-500 font-medium"
                                                :class="{
                                                    'bg-main rounded-full text-white': isToday(
                                                            date) ==
                                                        true,
                                                    'text-gray-600': isToday(
                                                        date) == false
                                                }">
                                            </p>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- widget -->
                <div class="flex flex-col bg-white rounded-xl shadow-xl p-8 w-full flex-1">
                    <div class="font-bold text-xl"></div>
                    <div class="text-sm text-gray-500">
                        {{ $formattedDate }}</div>
                    <div
                        class="mt-6 text-6xl self-center inline-flex items-center justify-center rounded-lg text-[rgb(16,97,204)] h-24 w-24">
                        <svg class="w-32 h-32" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-row items-center justify-center mt-6">
                        <div class="font-medium text-6xl">24°</div>
                        <div class="flex flex-col items-center ml-6">
                            <div>Berawan</div>
                            <div class="mt-1">
                                <span class="text-sm"><i class="far fa-long-arrow-up"></i></span>
                                <span class="text-sm font-light text-gray-500">28°C</span>
                            </div>
                            <div>
                                <span class="text-sm"><i class="far fa-long-arrow-down"></i></span>
                                <span class="text-sm font-light text-gray-500">20°C</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between mt-6">
                        <div class="flex flex-col items-center">
                            <div class="font-medium text-sm">Wind</div>
                            <div class="text-sm text-gray-500">9k/h</div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="font-medium text-sm">Humidity</div>
                            <div class="text-sm text-gray-500">68%</div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="font-medium text-sm">Visibility</div>
                            <div class="text-sm text-gray-500">10km</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- Calender --}}
    <script>
        const MONTH_NAMES = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
            'Oktober', 'November', 'Desember'
        ];
        const DAYS = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];

        function app() {
            return {
                month: '',
                year: '',
                no_of_days: [],
                blankdays: [],

                initDate() {
                    let today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                },

                isToday(date) {
                    const today = new Date();
                    const d = new Date(this.year, this.month, date);

                    return today.toDateString() === d.toDateString() ? true : false;
                },

                getNoOfDays() {
                    let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                    // find where to start calendar day of week
                    let dayOfWeek = new Date(this.year, this.month).getDay();
                    let blankdaysArray = [];
                    for (var i = 1; i <= dayOfWeek; i++) {
                        blankdaysArray.push(i);
                    }

                    let daysArray = [];
                    for (var i = 1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }

                    this.blankdays = blankdaysArray;
                    this.no_of_days = daysArray;
                }
            }
        }
    </script>
@endsection
