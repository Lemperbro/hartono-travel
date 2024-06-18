<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-2 md:gap-4">
    @foreach ($data as $key =>  $item) 
        @include('admin.galeri._card')
    @endforeach
</div>
