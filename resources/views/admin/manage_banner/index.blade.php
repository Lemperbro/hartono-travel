@extends('admin.layouts.main')

@section('container')
    <section>
        @include('admin.manage_banner._header')

        {{-- isi --}}
        <div class="pt-24">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($data['image'] as $item)
                    <div class="relative">
                        <img src="{{ asset('carousel/'.$item['image']) }}" alt="">
                        <a href="{{ route('banner.edit', ['id' => $item['id']]) }}"
                            class="absolute bottom-5 left-[50%] -translate-x-[50%] bg-orange-600 text-white p-2 font-semibold rounded-md">
                            Ubah Gambar
                        </a>
                    </div>
                @endforeach


            </div>
        </div>

    </section>
@endsection
