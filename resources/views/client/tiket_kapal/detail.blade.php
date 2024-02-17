@extends('client.layouts.main')

@section('container')
    <div>
        <div class=" bg-gray-900 pt-52 pb-16 relative">
            <div class="md:container px-4">
                <div class="">
                    <h1 class="text-white text-center text-3xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Vero incidunt labore dolore iste.</h1>
                    <div class="mt-10 w-full ">
                        <div class="px-4 md:px-0 flex flex-col justify-center mx-auto items-center">
                            <div
                                class="bg-gray-800 p-4 rounded-lg max-w-[800px] w-full flex flex-wrap gap-4 justify-between shadow-lg">
                                <div class="text-left">
                                    <h1 class="text-white font-semibold text-xl">Keberangkatan</h1>
                                    <div class="text-white mt-1">
                                        <h2 class="capitalize">Pelabuhan Surabaya</h2>
                                        <h2 class="capitalize">Selasa, 10 January 2024, 10:00 WIB</h2>
                                    </div>
                                </div>
                                <div class="">
                                    <h1 class="text-white font-semibold text-xl">Kedatangan</h1>
                                    <div class="text-white mt-1">
                                        <h2 class="capitalize">Pelabuhan Kalimantan</h2>
                                        <h2 class="capitalize">Kamis, 12 January 2024, 10:00 WIB</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-10">
                            <a href=""
                                class="inline-block w-auto bg-orange-600 px-4 py-2 rounded-lg font-semibold text-white">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="md:container px-4 py-10 ">
            <div class="mt-5">
                <h1 class="text-lg font-semibold text-gray-900">Deskripsi</h1>
                <p class="text-justify text-gray-900">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non
                    perferendis, sunt soluta
                    voluptas corporis sapiente minus temporibus, perspiciatis nostrum impedit esse iure dolorem,
                    officia quibusdam iusto aspernatur libero in ab.
                    Adipisci voluptates ad nemo impedit aliquid, aliquam laborum qui, soluta totam consectetur
                    eius! Dolores aperiam explicabo porro assumenda impedit, quod tempora architecto iure
                    quisquam repudiandae suscipit deserunt, autem dolore consequuntur?
                    Voluptatibus eveniet voluptatem reiciendis distinctio, a dignissimos aspernatur quasi iusto.
                    Exercitationem laudantium autem at praesentium dignissimos corrupti beatae repudiandae qui
                    consequatur id inventore ratione, eos sit itaque, molestiae ullam perferendis!
                    Tenetur natus sint voluptatum, repellat fuga ipsum quis est odio culpa explicabo quae
                    repudiandae repellendus, autem asperiores ex. Corrupti cumque minus, adipisci saepe tempore
                    maiores ducimus aperiam maxime. Nostrum, et!</p>
            </div>
            <div class="max-w-[1200px]  overflow-hidden mx-auto mt-10">
                <img src="{{ asset('bgImage/bg1.jpg') }}" alt="" class="w-full  object-contain">
            </div>
        </div>

        <div class="md:container px-4">
            <div class="relative pt-10 pb-20">
                @include('client.home._gridTicketKapal')
            </div>
        </div>
    </div>
@endsection
