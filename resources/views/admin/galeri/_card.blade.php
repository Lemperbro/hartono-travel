<div class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
    <div
        class="relative mx-1 sm:mx-4 mt-4 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40">
        <img src="{{ asset('galeri/'.$item->image) }}" alt="ui/ux review check" class="object-cover" />
        <div
            class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-tr from-transparent via-transparent to-black/60">
        </div>
    </div>

    <div class="p-1 mt-2 sm:p-6">
        @include('admin.galeri._actionCard')
        <div class="mb-3 mt-2">
            <h2 class="block font-sans text-base md:text-xl antialiased font-medium leading-snug tracking-normal text-blue-gray-900 line-clamp-4">
                {{ $item->title }}
            </h2>
        </div>


    </div>
</div>