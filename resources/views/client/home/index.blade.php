@extends('client.layouts.main')

@section('container')
    <div>
        <div class="">
            @include('client.home._jumbotron')
        </div>
        <div class="relative">
            @include('client.home._pencarianJadwal')
        </div>
        <div class="bg-gray-200 pt-[450px] md:pt-64 lg:pt-44 pb-10">
            <div class="md:container px-4">
                @include('client.home._cardSearchPesawat')
            </div>
            <div class="md:container px-4 mt-10">
                @include('client.home._splide')
            </div>
        </div>
        {{-- <div class="md:container px-4 pt-4">
            @include('client.home._CaraPesan')
        </div> --}}
        <div class="md:container px-4">
            <div class="relative pt-10 pb-20">
                @include('client.home._gridTicketKapal')
            </div>
        </div>

        <div class="relative bg-gray-200 py-10">
            @include('client.home._galeri')
        </div>

        <div class="relative">
            @include('client.home._sponsor')
        </div>
    </div>
@endsection



