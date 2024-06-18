<div class="">
    <h1 class="text-left font-semibold my-2 text-2xl text-gray-700">Tiket Kapal</h1>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($tiketKapal as $item)
            <div>
                @include('client.home._card')
            </div>
        @endforeach
    </div>
</div>
