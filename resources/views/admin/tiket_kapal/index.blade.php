@extends('admin.layouts.main')

@section('container')
    <section>
        @include('admin.tiket_kapal._header')
        <div class="pt-24">
            <form class="max-w-[1200px] mx-auto">
                <div class="flex">
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button"><span class="hidden md:block">Filter Data </span><svg class="w-2.5 h-2.5 ms-2.5"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <a href="{{ route('kapal.admin') }}"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ (route('kapal.admin') && empty(request()->query())) ? 'text-Sidebar font-semibold' : '' }}">Terbaru</a>
                            </li>
                            
                            <li>
                                <a href="{{ route('kapal.admin', ['filter' => 'best']) }}"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ request('filter') == 'best' ? 'text-Sidebar font-semibold' : '' }}">Banyak
                                    Di Lihat</a>
                            </li>
                            <li class="flex gap-2 justify-between px-4 hover:bg-gray-100 items-center">
                                <a href="{{ route('kapal.admin', ['filter' => 'habis']) }}"
                                    class="inline-flex w-full  py-2  dark:hover:bg-gray-600 dark:hover:text-white {{ request('filter') == 'habis' ? 'text-Sidebar font-semibold' : '' }}">Tiket
                                    Habis</a>
                                <h1 class="text-red-600">{{ $countTiketHabis ?? 0 }}</h1>
                            </li>
                        </ul>
                    </div>


                      
                    <div class="relative w-full">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" name="search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 bg-gray-50 border border-main3 rounded-r-lg focus:ring-0 focus:outline-none focus:border-main2"
                                placeholder="Cari Disini...." value="{{ request('search') }}" />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-Sidebar hover:bg-SidebarActive focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                        </div>
                    </div>
                </div>
            </form>
            <a href="{{ route('kapal.create') }}"
                class="bg-Sidebar py-2 px-4 rounded-md text-white inline-block mt-10 max-w-[1200px] font-medium">
                <div class="flex gap-2 items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="fill-white w-7 h-7">
                        <path
                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z">
                        </path>
                    </svg>
                    Tambah Data
                </div>
            </a>


            <div class="mt-10">
                @include('admin.tiket_kapal._gridCard')
                @if ($data->count() <= 0)
                <div class="flex flex-col items-center mx-auto">
                    <img src="{{ asset('icon/no_data2.svg') }}" alt="" class="w-36 h-36 object-contain">
                    <h1 class="text-Sidebar font-semibold mt-2">Tidak Ada Data Yang Ditemukan</h1>
                </div>
                @endif
                {{ $data->appends($appendsPaginate)->links('vendor.pagination.tailwind') }}

            </div>

        </div>
    </section>
@endsection
