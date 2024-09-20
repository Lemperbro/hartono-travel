<!-- Open the modal using ID.showModal() method -->
@foreach (json_decode($data->toJson()) as $index =>  $item) 
    <dialog id="show_data{{ $index }}" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box bg-white">
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
            <div>
                <h1 class="font-semibold text-Sidebar">Nama Pemesan</h1>
                <h2 class="capitalize text-gray-600">{{ $item->nama }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Nomor Tiket</h1>
                <h2 class="capitalize text-gray-600">{{ $item->no_tiket }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Nomor Telphone</h1>
                <h2 class="capitalize text-gray-600">{{ $item->telp }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Alamat</h1>
                <h2 class="capitalize text-gray-600">{{ $item->alamat }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Keberangkatan</h1>
                <h2 class="capitalize text-gray-600">{{ $item->keberangkatan }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Tujuan</h1>
                <h2 class="capitalize text-gray-600">{{ $item->tujuan }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Tanggal Pemesanan</h1>
                <h2 class="capitalize text-gray-600">{{ $item->tgl_pemesanan }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Tanggal Berangkat</h1>
                <h2 class="capitalize text-gray-600">{{ $item->tgl_berangkat }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Tanggal Sampai</h1>
                <h2 class="capitalize text-gray-600">{{ $item->tgl_sampai }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Harga</h1>
                <h2 class="capitalize text-gray-600">{{ $item->harga }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Status Pembayaran</h1>
                <h2 class="capitalize text-gray-600">{{ $item->status }}</h2>
            </div>
            <div>
                <h1 class="font-semibold text-Sidebar">Jenis Pembayaran</h1>
                <h2 class="capitalize text-gray-600">{{ $item->jenis }}</h2>
            </div>
        </div>
        <div class="modal-action">
          <form method="dialog">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button>
          </form>
        </div>
      </div>
    </dialog>
@endforeach