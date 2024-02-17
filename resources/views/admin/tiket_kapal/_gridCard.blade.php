<div class="grid md:grid-cols-2 2xl:grid-cols-3  gap-4">
    @for ($i = 0; $i < 10; $i++)
        @include('admin.tiket_kapal._card')
    @endfor
</div>
