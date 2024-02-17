@extends('admin.layouts.main')

@section('container')
    <section>
        @include('admin.manage_banner._header')

        {{-- isi --}}
        <div class="pt-24">
            <div class="max-w-[800px] overflow-hidden flex flex-col mx-auto">
                <h1 class="font-semibold mb-2 text-xl">Ubah Gambar</h1>
                <img src="{{ asset('carousel/'.$data['image']) }}" alt="" class="object-contain" id="preview-image">

                <form action="{{ route('banner.update', ['id' => $data['id']]) }}" method="POST" class="mt-5" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="image" class="">Masukan Gambar</label>
                        <input type="file" name="image" id="image" class="mt-2 rounded-md border w-full @error('image')
                            peer
                        @enderror">
                        @error('image')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                    </div>
                    <div class="mt-4 flex gap-2">
                        <button type="submit" class="bg-orange-600 rounded-md text-white px-3 py-2">Simpan</button>
                        <a href="{{ route('banner') }}" class="bg-black rounded-md text-white px-3 py-2 inline-block">Batal</a>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
    <script>
        var inputImage = document.getElementById('image');
        var previewImage = document.getElementById('preview-image');

        inputImage.onchange = evt => {
            const [selectedImage] = inputImage.files;
            previewImage.innerHTML = '';
            if (selectedImage) {
                previewImage.src = URL.createObjectURL(selectedImage);
                previewImage.classList.remove('hidden')
            }
        };
    </script>
@endpush
