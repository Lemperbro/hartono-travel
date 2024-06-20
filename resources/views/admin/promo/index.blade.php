@extends('admin.layouts.main')

@section('container')
    <section>
        @include('admin.penjualan._header')
        <div class="pt-24">
            <a href="{{ route('promo.create') }}"
                class="bg-Sidebar py-2 px-4 rounded-md text-white inline-block mt-10 max-w-[1200px] font-medium">
                <div class="flex gap-2 items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="fill-white w-7 h-7">
                        <path
                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z">
                        </path>
                    </svg>
                    Tambah Data
                </div>
            </a>
            <div class="mt-10">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
                    @foreach ($data as $key => $item)
                        <div
                            class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg w-full max-w-[30rem] max-h-[35rem] object-contain"
                                    src="{{ asset("promo/$item->image") }}" alt="" />
                            </a>
                            <div class="p-5">
                                <div>
                                    @include('admin.promo._actionCard')
                                </div>
                                <h4 class="font-semibold text-gray-600 mt-4">KODE PROMO : {{ $item->kode_promo }}</h4>
                                <div class="mt-2">
                                    <h5
                                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white capitalize">
                                        {{ $item->title }}</h5>
                                </div>
                                <h4 class="text-red-600">Expired : {{ $item->date('expired') }}</h4>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
