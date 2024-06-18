<div class="md:container px-4">
    <div class="max-w-[1200px] flex flex-col justify-center mx-auto">
        <h1 class="text-left font-semibold my-2 text-2xl text-gray-700">Galeri</h1>
        <div id="image-slider" class="splide bg-gray-900">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($galeri as $key => $item)
                        <li class="splide__slide aspect-video overflow-hidden">
                            <img src="{{ asset('galeri/' . $item->image) }}" alt=""
                                class="w-full h-full object-contain">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="thumbnail-carousel" class="splide pt-4">
            <div class="splide__track">
                <ul class="splide__list pb-4">
                    @foreach ($galeri as $key => $item)
                        <li class="splide__slide">
                            <img src="{{ asset('galeri/' . $item->image) }}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var main = new Splide('#image-slider', {
                type: 'fade',
                rewind: true,
                pagination: false,
                arrows: false,
            });

            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth: 100,
                fixedHeight: 60,
                gap: 10,
                rewind: true,
                pagination: false,
                isNavigation: true,
                breakpoints: {
                    600: {
                        fixedWidth: 60,
                        fixedHeight: 44,
                    },
                },
            });

            main.sync(thumbnails);
            main.mount();
            thumbnails.mount();
        });
    </script>
@endpush
