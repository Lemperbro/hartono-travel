<div id="default-carousel" class="relative w-full h-screen" data-carousel="slide">
    {{-- isi --}}
    <div class="container">
        <div class="absolute z-30 inset-0 bg-black/50 ">
            <div class="md:container">
                <div class="absolute top-[50%] -translate-y-[50%] md:w-[70%] xl:w-[50%]">
                    <div class="px-4">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white">
                            Hartono Travel
                        </h1>
                        <p class="text-lg md:text-xl font-medium text-gray-300 mt-4">Lorem ipsum dolor sit amet
                            consectetur, adipisicing elit. Asperiores repudiandae ut exercitationem saepe labore quod
                            sit rerum incidunt, adipisci, harum necessitatibus iure pariatur! Saepe expedita corrupti
                            ut, velit dolor corporis?</p>
                        <a href="#footer"
                            class="py-3 px-3 rounded-md bg-CusOrange text-white inline-block font-semibold mt-4">Hubungi
                            Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden h-screen">
        <!-- Item -->
        @foreach ($bannersImage['image'] as $item)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('carousel/'.$item['image']) }}" class="h-screen w-full object-cover" alt="...">
            </div>
        @endforeach


    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
    </div>
</div>
