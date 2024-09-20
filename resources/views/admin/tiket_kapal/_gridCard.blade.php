<div class="grid md:grid-cols-2 2xl:grid-cols-3  gap-4">
       @foreach ($data as $item) 
         @include('admin.tiket_kapal._card')
       @endforeach
</div>
