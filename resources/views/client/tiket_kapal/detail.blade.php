@extends('client.layouts.main')
@use('Carbon\Carbon')

@section('container')
    <div>
        <div class="bg-gradient-to-t from-gray-900 to-gray-900/60 pt-52 pb-16 relative overflow-hidden">
            <div class="md:container px-4">
                <div class="">
                    <h1 class="text-white text-center text-3xl">{{ $data->title }}</h1>
                    <div class="mt-10 w-full ">
                        <div class="px-4 md:px-0 flex flex-col justify-center mx-auto items-center">
                            <div
                                class="bg-gray-800 p-4 rounded-lg max-w-[800px] w-full flex flex-wrap gap-4 justify-between shadow-lg">
                                <div class="text-left">
                                    <h1 class="text-white font-semibold text-xl">Keberangkatan</h1>
                                    <div class="text-white mt-1">
                                        <h2 class="capitalize">{{ $data->keberangkatan }}</h2>
                                        <h2 class="capitalize">
                                            {{ Carbon::parse($data->waktu_keberangkatan)->locale('id')->isoFormat('HH:mm [WIB],  dddd DD MMMM YYYY') }}
                                        </h2>
                                    </div>
                                </div>
                                <div class="">
                                    <h1 class="text-white font-semibold text-xl">Kedatangan</h1>
                                    <div class="text-white mt-1">
                                        <h2 class="capitalize">{{ $data->tujuan }}</h2>
                                        <h2 class="capitalize">
                                            {{ Carbon::parse($data->waktu_kedatangan)->locale('id')->isoFormat('HH:mm [WIB],  dddd DD MMMM YYYY') }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="flex justify-center mt-10">
                            <a href="{{ route('kapal.redirect', ['id' => $data->slug]) }}" target="_blank"
                                class="inline-block w-auto bg-orange-600 px-4 py-2 rounded-lg font-semibold text-white">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute -z-10 top-0 w-full h-full">
                <img src="{{ asset('TiketKapalImage/' . $data->image) }}" alt="" class="w-full object-cover h-full">
            </div>
        </div>
        <div class="md:container px-4 py-10 ">
            @if ($data->deskripsi !== null)
                <div class="mt-5">
                    <h1 class="text-lg font-semibold text-gray-900">Deskripsi</h1>
                    <p class="text-justify text-gray-900">{{ $data->deskripsi }}</p>
                </div>
            @endif
            <div class="max-w-[1200px]  overflow-hidden mx-auto mt-10">
                <img src="{{ asset('TiketKapalImage/' . $data->image) }}" alt="" class="w-full  object-contain">
            </div>
        </div>

        <div class="md:container px-4">
            <div class="relative pt-10 pb-20">
                @include('client.home._gridTicketKapal')
                @if ($tiketKapal->count() <= 0)
                    <div class="flex flex-col items-center mx-auto">
                        <img src="{{ asset('icon/no_data2.svg') }}" alt="" class="w-36 h-36 object-contain">
                        <h1 class="text-Sidebar font-semibold mt-2">Tidak Kapal Lainnya Tidak Tersedia</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
