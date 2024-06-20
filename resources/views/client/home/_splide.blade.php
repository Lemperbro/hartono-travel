<h1 class="text-center font-semibold my-2 text-2xl text-gray-700 mb-5">Promo</h1>
<div class="splide my-2" id="promo">
    <div class="splide__track">
        <ul class="splide__list gap-x-2">
              @foreach ($promo as $key => $item) 
                  <li class="splide__slide rounded-lg overflow-hidden  ">
                      <a href=""
                          class="relative grid h-[18rem] md:h-[25rem] lg:h-[35rem] max-h-[35rem] w-full max-w-[30rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-transparent bg-clip-border text-center text-gray-700">
                          <div
                              class="absolute inset-0 m-0 h-full w-full overflow-hidden bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none bg-black">
                              <img src="{{ asset("promo/$item->image") }}" alt=""
                                  class="h-full w-full object-contain rounded-xl">
                          </div> 
                      </a>
                  </li>
              @endforeach
        </ul>
    </div>
</div>

{{-- lebar : 480px --}}
{{-- tinggi : 560px --}}


@push('scripts')
    <script>
        var promo = new Splide('#promo', {
            type: 'loop',
            perPage: 3,
            speed: 2000,
            perMove: 1,
            autoplay: true,
            breakpoints: {
                768: { 
                    perPage: 2,
                },
                1024: { 
                    perPage: 3,
                }
            },
        });

        promo.mount();
    </script>
@endpush
