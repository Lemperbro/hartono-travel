@extends('admin.layouts.main')

@section('container')
    <section>
        @include('admin.tiket_kapal._header')

        <div class="pt-24">
            <form action="{{ route('galeri.admin.store') }}" method="POST" enctype="multipart/form-data" id="form"
                class="max-w-[800px] mx-auto">
                @csrf
                <div class="mt-10">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('title')
                        perr
                    @enderror"
                        value="{{ old('title') }}">
                </div>
                <div class="mt-3">
                    <label for="image">Gambar</label>
                    <textarea name="image" id="image" class="hidden">
                    </textarea>
                    <input type="file" id="imageUploader"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 bg-white @error('image')
                            peer
                        @enderror "
                        value="{{ old('image') }}">
                    @error('image')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex gap-2 mt-10">
                    <a href="{{ route('galeri.admin') }}"
                        class="inline-block py-2 px-3 rounded-md bg-red-800 text-white font-medium">Batal</a>
                    <button type="submit" class="inline-block py-2 px-3 rounded-md bg-Sidebar text-white font-medium"
                        id="submitBtn">Simpan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('admincss')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    {{-- plugin filepond --}}
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <style>
        .filepond--credits {
            display: none;
        }

        .filepond--panel-root {
            background-color: transparent;
        }
    </style>
@endpush
@push('scripts')
    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    {{-- plugin filepond --}}
    <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="{{ asset('js/filePondSingleConfig.js') }}"></script>


    <script>
        $(document).ready(function() {
            FilePond.registerPlugin(FilePondPluginFileEncode, FilePondPluginImagePreview,
                FilePondPluginFileValidateType, FilePondPluginFileValidateSize);

            $('#imageUploader').filepond({
                allowMultiple: false,
                name: 'imageName',
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg'],
                labelFileTypeNotAllowed: 'Hanya diperbolehkan file JPG,PNG dan JPEG',
                maxFileSize: '1MB',
                labelMaxFileSizeExceeded: 'Ukuran file melebihi batas maksimum (1MB)',
            });
            filePondConfig('galeri', '{{ csrf_token() }}', '#image', '#submitBtn');
        });
    </script>
@endpush
