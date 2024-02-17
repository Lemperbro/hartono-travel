@extends('admin.layouts.main')

@section('container')
    <section>
        @include('admin.penjualan._header')

        {{-- isi --}}
        <div class="pt-24">
            <form action="{{ route('penjualan.create.simpan') }}" method="POST" class="max-w-[800px] mx-auto">
                @csrf
                <div>
                    <label for="nama_pemesan">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" id="nama_pemesan"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('nama_pemesan')
                            perr
                        @enderror"
                        value="{{ old('nama_pemesan') }}">
                    @error('nama_pemesan')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="telp">Telphone</label>
                    <input type="number" name="telp" id="telp"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('telp')
                            peer
                        @enderror"
                        value="{{ old('telp') }}">
                    @error('telp')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" id="alamat"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('alamat')
                            peer
                        @enderror"
                        >
                        {{ old('alamat') }}
                    </textarea>
                    @error('alamat')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="keberangkatan">Keberangkatan</label>
                    <input type="text" name="keberangkatan" id="keberangkatan"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('keberangkatan')
                            peer
                        @enderror"
                        value="{{ old('keberangkatan') }}">
                    @error('keberangkatan')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" name="tujuan" id="tujuan"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('tujuan')
                            perr
                        @enderror"
                        value="{{ old('tujuan') }}">
                    @error('tujuan')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="tgl_berangkat">Tanggal Keberangkatan</label>
                    <div class="relative ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input type="text" id="tgl_berangkat" name="tgl_berangkat"
                            class="border-[1px] border-main3 text-gray-900 text-sm rounded-md block w-full ps-10 p-2.5 mt-1 focus:ring-0 focus:outline-none focus:border-main2 @error('tgl_berangkat')
                        peer
                    @enderror"
                            placeholder="Pilih Tanggal" value="{{ old('tgl_berangkat') }}" autocomplete="off">

                    </div>
                    @error('tgl_berangkat')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="tgl_sampai">Tanggal Sampai</label>
                    <div class="relative ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input type="text" id="tgl_sampai" name="tgl_sampai"
                            class="border-[1px] border-main3 text-gray-900 text-sm rounded-md block w-full ps-10 p-2.5 mt-1 focus:ring-0 focus:outline-none focus:border-main2 @error('tgl_sampai')
                        peer
                    @enderror"
                            placeholder="Pilih Tanggal" value="{{ old('tgl_sampai') }}" autocomplete="off">
                    </div>
                    @error('tgl_sampai')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="tgl_pemesanan">Tanggal Pemesanan</label>
                    <div class="relative ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input type="text" id="tgl_pemesanan" name="tgl_pemesanan"
                            class="border-[1px] border-main3 text-gray-900 text-sm rounded-md block w-full ps-10 p-2.5 mt-1 focus:ring-0 focus:outline-none focus:border-main2 @error('tgl_pemesanan')
                        peer
                    @enderror"
                            placeholder="Pilih Tanggal" value="{{ old('tgl_pemesanan') }}" autocomplete="off">
                    </div>
                    @error('tgl_pemesanan')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="nomor_tiket">Nomor Tiket</label>
                    <input type="text" name="nomor_tiket" id="nomor_tiket"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('nomor_tiket')
                            peer
                        @enderror"
                        value="{{ old('nomor_tiket') }}">
                    @error('nomor_tiket')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('harga')
                            peer
                        @enderror"
                        value="{{ old('harga') }}">
                    @error('harga')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="status_pembayaran">Status Pembayaran</label>
                    <select name="status_pembayaran" id="status_pembayaran"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('status_pembayaran')
                            peer
                        @enderror">
                        <option value="">Pilih Status Pembayaran</option>
                        <option value="sudah bayar" {{ old('status_pembayaran') == 'sudah bayar' ? 'selected' : '' }}>
                            Sudah Dibayar</option>
                        <option value="belum dibayar" {{ old('status_pembayaran') == 'belum dibayar' ? 'selected' : '' }}>
                            Belum Dibayar</option>
                    </select>
                    @error('status_pembayaran')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mt-3">
                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                    <select name="jenis_pembayaran" id="jenis_pembayaran"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('jenis_pembayaran')
                            peer
                        @enderror">
                        <option value="" selected>Pilih Jenis Pembayaran</option>
                        <option value="transfer" {{ old('jenis_pembayaran') == 'transfer' ? 'selected' : '' }}>Transfer
                        </option>
                        <option value="cash" {{ old('jenis_pembayaran') == 'cash' ? 'selected' : '' }}>Cash</option>
                    </select>
                    @error('jenis_pembayaran')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <div class="flex gap-2 mt-5">
                    <a href="{{ route('penjualan') }}"
                        class="inline-block py-2 px-3 rounded-md bg-red-800 text-white font-medium">Batal</a>
                    <button type="submit"
                        class="inline-block py-2 px-3 rounded-md bg-Sidebar text-white font-medium">Simpan</button>
                </div>
            </form>
        </div>

    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var datepicker1 = {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                allowInput: true,
                placeholder: "Pilih Tanggal dan Waktu",
                time_24hr: true, // Waktu 24 jam
                theme: "light",
            };

            var datepicker2 = {
                dateFormat: "Y-m-d",
                allowInput: true,
                placeholder: "Pilih Tanggal",
                theme: "light",
            };
            flatpickr("#tgl_berangkat", datepicker1);
            flatpickr("#tgl_sampai", datepicker1);
            flatpickr("#tgl_pemesanan", datepicker2);


        });
    </script>
@endpush
