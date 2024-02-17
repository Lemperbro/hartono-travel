<div class="">
    <h1 class="text-left font-semibold my-2 text-2xl text-gray-700">Tiket Kapal</h1>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        @for ($i = 0; $i < 8; $i++)
            <div>
                @include('client.home._card')
            </div>
        @endfor
    </div>
</div>
