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
        <div class="md:container px-4" id="tiketKapal">
            <div class="relative pt-10 pb-20 border-b-[1px] border-gray-400">
                @include('client.home._gridTicketKapal')
            </div>
        </div>
        <div class="py-10 px-4 md:container">
            <h1 class="font-semibold my-2 text-2xl text-gray-700 text-left mb-10">Layanan Lain</h1>
            @include('client.home.CarterDanTravelR')
        </div>
        <div class="relative bg-gray-100 py-10">
            @include('client.home._galeri')
        </div>

        <div class="relative">
            @include('client.home._sponsor')
        </div>
        <div class="bg-gray-100 py-20 px-4 md:px-0">
            <div class="px-4 py-4 md:py-8 rounded-md md:container bg-white">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.99258053934!2d112.27859627580608!3d-7.010154668667446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77ed019341ea0f%3A0x982a11d4b79e9bed!2sHARTONO%20TRAVEL!5e0!3m2!1sid!2sid!4v1718887361891!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
