@extends('admin.layouts.main')

@section('container')
    <section>
        @include('admin.penjualan._header')

        {{-- isi --}}
        <div class="pt-24">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                @include('admin.penjualan._cardSemuaT')
                @include('admin.penjualan._cardTransaksiTahun')
                @include('admin.penjualan._cardTransaksiBulan')
                @include('admin.penjualan._cardBelumDibayar')
            </div>
            <div class="p-4 grid grid-cols-1 bg-white border-[1px] border-main3 rounded-md mt-4">
                <h1 class="text-lg font-semibold text-Sidebar">Filter Data Transaksi</h1>
                <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4" action="{{ route('penjualan') }}" method="GET">
                    <div>
                        <label for="search">Cari Data</label>
                        <input type="text" name="search" id="search"
                            class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 "
                            placeholder="Cari Disini...." value="{{ request('search') }}">
                    </div>
                    <div>
                        <label for="tahun">Tahun</label>
                        <select name="tahun" id="tahun"
                            class="w-full rounded-md border-[1px] border-main3 focus:ring-0 focus:outline-none focus:border-main2 mt-1">
                            <option value="" selected>Pilih Tahun</option>
                            @for ($i = 2005; $i <= $tahunSekarang + 50; $i++)
                            <option value="{{ $i }}" {{ $i == request('tahun') ? 'selected' : '' }}>
                                {{ $i }}
                            </option>
                        @endfor
                        
                        </select>
                    </div>
                    <div>
                        <label for="bulan">Bulan</label>
                        <select name="bulan" id="bulan"
                            class="w-full rounded-md border-[1px] border-main3 focus:ring-0 focus:outline-none focus:border-main2 mt-1">
                            <option value="" selected>Pilih Bulan</option>
                            @foreach ($bulan as $item)
                                <option value="{{ $loop->iteration }}"  {{ $loop->iteration == request('bulan') ? 'selected' : '' }}>
                                    {{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="status">Status Pembayaran</label>
                        <select name="status" id="status"
                            class="w-full rounded-md border-[1px] border-main3 focus:ring-0 focus:outline-none focus:border-main2 mt-1">
                            <option value="" selected>Pilih Status</option>
                            <option value="sudah bayar" {{ request('status') == 'sudah bayar' ? 'selected' : '' }}>Sudah Dibayar</option>
                            <option value="belum dibayar" {{ request('status') == 'belum dibayar' ? 'selected' : '' }}>belum Dibayar</option>
                        </select>
                    </div>
                    <div class="">
                        <button class="bg-Sidebar p-2 rounded-md text-white mt-7 xl:mt-0 inline-block w-full">Cari
                            Data</button>
                    </div>
                    <div class="">
                        <a href="{{ route('penjualan') }}"
                            class="bg-red-800 text-center p-2 rounded-md text-white md:mt-7 xl:mt-0 inline-block w-full">Reset
                            Filter</a>
                    </div>
                </form>
            </div>

            <div class="p-4 flex flex-wrap gap-4  bg-white border-[1px] border-main3 rounded-md mt-4">
                <a href="{{ route('penjualan.create') }}" class="bg-Sidebar py-2 px-4 rounded-md text-white flex gap-2 items-center font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="fill-white w-7 h-7">
                        <path
                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z">
                        </path>
                    </svg>
                    Tambah Data</a>
                    <a href="{{ route('penjualan', array_merge(request()->all(), ['download' => true])) }}" class="bg-green-700 py-2 px-4 rounded-md text-white flex gap-2 items-center font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="fill-white w-7 h-7"><path d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM14 9H19L12 16L5 9H10V3H14V9Z"></path></svg>
                        Download Data
                    </a>
            </div>

            <div class="mt-4 bg-white rounded-lg overflow-hidden border-[1px] border-main3">
                <div class="p-4">
                    <h1 class="text-Sidebar font-semibold text-lg">Tabel Transaksi</h1>
                </div>
                @include('admin.penjualan._table')
                <div class="p-4">
                    @if($data->count() == 0)
                    <div class="flex flex-col items-center mx-auto">
                        <img src="{{ asset('icon/no_data2.svg') }}" alt="" class="w-36 h-36 object-contain">
                        <h1 class="text-Sidebar font-semibold mt-2">Tidak Ada Data Yang Ditemukan</h1>
                    </div>
                    @endif
                    {{ $data->appends($appendsPaginate)->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>

    </section>
@endsection

