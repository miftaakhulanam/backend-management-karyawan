@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen mt-14">
        <div class="flex flex-col gap-3 sm:gap-6 px-4 py-8 md:p-10">
            <div class="bg-white p-8 rounded-xl shadow-xl">
                <div class="flex relative">
                    <div class="flex flex-col gap-1 sm:gap-2">
                        <h1 class="text-main leading-6 font-bold text-xl sm:text-3xl">
                            Hallo, <br class="block sm:hidden">{{ auth()->user()->email }}
                        </h1>
                        <div>
                            <p class="text-gray-900 text-sm sm:text-base  font-bold">
                                Siap memulai harimu di PT. Persada<br class="block lg:hidden"> Data Multimedia ?
                            </p>
                            <p class="text-sm sm:text-base">yuk lihat dan cek beranda mu ...</p>
                        </div>
                    </div>
                    <img class="absolute w-36 -right-12 -bottom-8" src="../img/avatar.png" alt="" />
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-3 sm:gap-6 max-h-full">
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
                @if ($komplain->isEmpty())
                    <div
                        class="flex flex-col bg-white w-full shadow-xl rounded-xl flex-1 min-h-14 justify-center items-center">
                        <p class="font-normal text-gray-400">Tidak ada notifikasi</p>
                    </div>
                @else
                    <div class="flex flex-col w-full flex-1 overflow-y-auto gap-2">
                        @foreach ($komplain as $k)
                            <div class="flex  justify-between items-center bg-white font-medium rounded-xl h-20 px-10">
                                <div class="flex items-center gap-4">
                                    @if ($k->status == 'Selesai')
                                        <div class="bg-green-500 rounded-full w-4 h-4 text-center me-2"></div>
                                    @elseif($k->status == 'Tertunda')
                                        <div class="bg-yellow-400 rounded-full w-4 h-4 text-center me-2"></div>
                                    @else
                                        <div class="bg-red-700 rounded-full w-4 h-4 text-center me-2"></div>
                                    @endif
                                    <p class="">{{ $k->customer->id_customer }}</p>
                                </div>
                                <p class="">{{ $k->pesan }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
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
