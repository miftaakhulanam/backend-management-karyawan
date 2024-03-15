@extends('layouts.main')

@section('container')
    <main class="flex-1 min-h-screen px-4 py-8 md:p-10 mt-12 md:mt-14 relative">
        <div class="absolute bg-[#96C3ED] w-[110px] h-[110px] rounded-full ms-36 top-1/4"></div>
        <div class="absolute bg-[#35AFE1] w-[85px] h-[85px] rounded-full right-2/3 bottom-2/4 translate-y-56"></div>
        <div class="absolute bg-main w-[140px] h-[140px] -right-36 md:right-3 rounded-full top-2/3 -translate-x-48"></div>
        <div class="relative">
            <h2 class="flex px-2 rounded-sm font-inter border-l-4 border-main font-bold items-center text-main text-lg z-50">
                <div class="bg-white h-10 w-10 me-5 rounded-full flex justify-center items-center">
                    <svg class="fill-main w-6 h-6" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="30" height="30" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_40_982" transform="scale(0.0111111)" />
                            </pattern>
                            <image id="image0_40_982" width="90" height="90"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                </div>
                Notifikasi
            </h2>


            <table class=" flex-1 justify-start mt-5 mx-0 md:mx-5 w-full">
                <tbody class="text-sm font-normal text-gray-700 text-center rounded-xl ">
                    @foreach ($komplain as $k)
                        <tr
                            class="backdrop-blur font-medium outline outline-black outline-1 rounded-lg md:rounded-xl w-full">
                            <td class="ps-0 md:ps-7">
                                <svg class="hidden md:block fill-main w-9 h-9" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="30" height="30" fill="url(#pattern0)" />
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                            height="1">
                                            <use xlink:href="#image0_40_982" transform="scale(0.0111111)" />
                                        </pattern>
                                        <image id="image0_40_982" width="90" height="90"
                                            xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>
                            </td>
                            <td class="px-0 md:px-10 py-3 md:py-6">{{ $k->user->name }}</td>
                            <td class="px-0 md:px-10 py-3 md:py-6">{{ $k->customer->id_customer }}</td>
                            <td class="px-0 md:px-10 py-3 md:py-6">{{ $k->pesan }}</td>
                            <td class="px-0 md:px-10 py-3 md:py-6 flex items-center justify-center">
                                @if ($k->status == 'Selesai')
                                    <div class="bg-green-500 rounded-full w-4 h-4 text-center me-2"></div>
                                    <p class="hidden md:block">Selesai</p>
                                @elseif($k->status == 'Tertunda')
                                    <div class="bg-yellow-400 rounded-full w-4 h-4 text-center me-2"></div>
                                    <p class="hidden md:block">Tertunda</p>
                                @else
                                    <div class="bg-red-700 rounded-full w-4 h-4 text-center me-2"></div>
                                    <p class="hidden md:block">Belum selesai</p>
                                @endif
                            </td>
                        </tr>
                        <td class="h-2 md:h-4"></td>
                    @endforeach
                </tbody>
            </table>
    </main>
@endsection
