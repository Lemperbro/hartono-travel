<div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
    <div class="">
        <div>
            <h1 class="font-semibold text-xl">Travel Reguler</h1>
            <p class="mt-2 text-gray-600">Nikmati kemudahan pengiriman barang dengan layanan Travel Reguler kami. Setiap
                hari, mobil kami berangkat dari Lamongan menuju Surabaya dengan rute dan jadwal yang teratur. Layanan
                ini ideal untuk Anda yang ingin mengirimkan barang dengan cepat dan aman. Kami menjamin keamanan dan
                ketepatan waktu pengiriman barang Anda. Dengan Travel Reguler, Anda bisa menitipkan berbagai jenis
                barang tanpa khawatir. Segera gunakan layanan kami dan rasakan kemudahannya!</p>

        </div>
        <form action="" class="bg-gray-100 px-4 py-8 rounded-md mt-8 shadow-md">
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('nama')
                        perr
                    @enderror"
                    value="{{ old('nama') }}">
                @error('nama')
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
                <label for="jumlah">Jumlah Penumpang</label>
                <input type="number" min="1" name="jumlah" id="jumlah"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('jumlah')
                        perr
                    @enderror"
                    value="{{ old('jumlah') }}">
                @error('jumlah')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="jam">Jam Keberangkatan</label>
                <select name="jam" id="jam"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('jam')
            perr
        @enderror">
                    <option value="1">Antara Jam 10:00 - 24:00 WIB</option>
                    <option value="2">Antara Jam 24:00 - 10:00 WIB</option>
                </select>
                @error('jam')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="tanggal">Tanggal</label>
                <input type="datetime-local" name="tanggal" id="tanggal"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('tanggal')
                        perr
                    @enderror"
                    value="{{ old('tanggal') }}">
                @error('tanggal')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" id="alamat"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 ">{{ old('alamat') }}</textarea>
            </div>
            <button type="submit" class="px-4 py-2 rounded-md bg-orange-600 text-white mt-4">Kirim Pesan</button>
        </form>
    </div>
    <div class="">
        <div>
            <h1 class="font-semibold text-xl">Carter Mobil</h1>
            <p class="mt-2 text-gray-600">Butuh transportasi yang fleksibel dan nyaman? Gunakan layanan Carter Mobil
                kami! Kami menyediakan mobil dengan kondisi prima untuk keperluan Anda, baik itu perjalanan bisnis,
                wisata keluarga, atau acara spesial lainnya. Dengan Carter Mobil, Anda dapat menikmati perjalanan yang
                aman, nyaman, dan bebas dari kerepotan. Layanan kami tersedia setiap hari dengan berbagai pilihan
                kendaraan sesuai kebutuhan Anda. Pesan sekarang dan nikmati perjalanan tanpa batas!</p>
        </div>
        <form action="" class="bg-gray-100 px-4 py-8 rounded-md mt-8 shadow-md">
            <div>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('nama')
                        perr
                    @enderror"
                    value="{{ old('nama') }}">
                @error('nama')
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
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('tanggal')
                    perr
                @enderror"
                    value="{{ old('tanggal') }}">
                @error('tanggal')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="totalPenumpang">Jumlah Penumpang</label>
                <input type="number" min="1" name="totalPenumpang" id="totalPenumpang"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('totalPenumpang')
                    perr
                @enderror"
                    value="{{ old('totalPenumpang') }}">
                @error('totalPenumpang')
                    <p class="peer-invalid:visible text-red-700 font-light">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mt-3">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" id="alamat"
                    class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 ">{{ old('alamat') }}</textarea>
            </div>
            <button type="submit" class="px-4 py-2 rounded-md bg-orange-600 text-white mt-4">Kirim Pesan</button>
        </form>
    </div>
</div>
