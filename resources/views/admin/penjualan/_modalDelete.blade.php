@foreach (json_decode($data->toJson()) as $index => $item) 
    <!-- Open the modal using ID.showModal() method -->
    <dialog id="delete_data{{ $index }}" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box bg-white">
        <form action="{{ route('penjualan.hapus', ['id' => $item->id]) }}" method="POST">
            @csrf
            <h3 class="font-bold text-lg">Konfirmasi</h3>
            <p class="py-4">Apakah Anda Yakin Mau Menghapus Data Ini!?</p>
            <button type="submit" id="btnDelete" class="hidden"></button>
        </form>
        <div class="modal-action">
          <form method="dialog">
            <button class="btn bg-red-800 text-white hover:bg-red-700">Batal</button>
            <label for="btnDelete" class="btn bg-Sidebar text-white hover:bg-SidebarActive">Ya</label>
          </form>
        </div>
      </div>
    </dialog>
@endforeach