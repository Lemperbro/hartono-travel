<div class="splide py-10" id="sponsor">
    <div class="splide__track">
        <ul class="splide__list">

            @for ($i = 1; $i <= 6; $i++)
                <li class="splide__slide overflow-hidden flex">
                    <img src="{{ asset('sponsor/sponsor' . $i . '.png') }}" alt="" class="w-32 object-contain my-auto">
                </li>
            @endfor



        </ul>
    </div>
</div>


@push('scripts')
    <script>
        const sponsor = new Splide('#sponsor', {
            type: 'loop',
            drag: 'free',
            focus: 'center',
            perPage: 5,
            pagination: false,
            arrows: false,
            gap: '1em',
            autoScroll: {
                speed: 1,
            },
        });

        sponsor.mount(window.splide.Extensions);
    </script>
@endpush
