<div class="max-h-[1100px] overflow-y-auto" id="jadwalPesawatArea">
    <div class="best_flights" id="best_flights">
        <h1 class="font-semibold text-xl mb-2">Best Flights</h1>
        @for ($i = 0; $i <= 5; $i++)
            <div class="relative mb-3 bg-white rounded-xl">
                <h6 class="mb-0">
                    <button
                        class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
                        data-collapse-target="animated-collapse-{{ $i }}">
                        <div class="gap-4 items-center justify-between flex flex-wrap w-full">
                            <div class="flex gap-4 items-center">
                                <img src="{{ asset('DefaultImage/GA.png') }}" alt=""
                                    class="w-12 h-12 object-contain">
                                <div>
                                    <h1 class="text-xl font-semibold">Boeing 737</h1>
                                    <h3 class="font-normal">Garuda Indonesia</h3>
                                    <h3 class="font-normal">Selasa 30 Januari</h3>
                                    <h3 class="font-semibold">19:30</h3>
                                </div>
                            </div>
                            <a href=""
                                class="inline-block mr-10 bg-orange-600 py-2 px-3 rounded-lg text-white ml-auto">Pesan
                                Sekarang</a>
                        </div>
                        <i
                            class="absolute right-5 pt-1 text-base transition-transform fa fa-chevron-down group-open:rotate-180"></i>
                    </button>
                </h6>
                <div data-collapse="animated-collapse-{{ $i }}"
                    class="h-0 overflow-hidden transition-all duration-300 ease-in-out">

                    <div class="p-4">
                        <div class="flex gap-4">
                            <div class="relative min-h-1  border-r-2 border-dashed border-black my-1">
                                <div
                                    class="w-3 h-3 rounded-full bg-white border border-black absolute top-0 left-[50%] -translate-x-[45%]">
                                </div>
                                <div
                                    class="w-3 h-3 rounded-full bg-white border border-black absolute bottom-0 left-[50%] -translate-x-[45%]">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div>
                                    <h1 class="text-lg font-semibold">19:30 • Bandar Udara Internasional Juanda (SUB)
                                    </h1>
                                </div>
                                <div>
                                    <ul class="list-disc ml-5">
                                        <li>Kelas Ekonomi</li>
                                        <li>GA 319</li>
                                        <li>Sekali Jalan</li>
                                    </ul>
                                </div>
                                <div>
                                    <h1 class="text-lg font-semibold">21:35 • Bandar Udara Internasional Soekarno–Hatta
                                        (CGK)</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endfor
    </div>
    <div class="other_flights" id="other_flights">
        <h1 class="font-semibold text-xl mb-2">Other Flights</h1>

    </div>
</div>
