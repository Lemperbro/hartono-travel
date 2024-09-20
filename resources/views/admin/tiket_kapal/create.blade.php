@extends('admin.layouts.main')


@section('container')
    <section>
        @include('admin.tiket_kapal._header')

        <div class="pt-24">
            <form action="{{ route('kapal.create.post') }}" method="POST" enctype="multipart/form-data" id="form"
                class="max-w-[800px] mx-auto">
                @csrf

                <div>
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 @error('title')
                            perr
                        @enderror"
                        value="{{ old('title') }}">
                    @error('title')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
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
                    <label for="waktu_keberangkatan">Tanggal Keberangkatan</label>
                    <div class="relative ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input type="text" id="waktu_keberangkatan" name="waktu_keberangkatan"
                            class="border-[1px] border-main3 text-gray-900 text-sm rounded-md block w-full ps-10 p-2.5 mt-1 focus:ring-0 focus:outline-none focus:border-main2 @error('waktu_keberangkatan')
                        peer
                    @enderror"
                            placeholder="Pilih Tanggal" value="{{ old('waktu_keberangkatan') }}" autocomplete="off">

                    </div>
                    @error('waktu_keberangkatan')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="waktu_kedatangan">Tanggal Sampai</label>
                    <div class="relative ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input type="text" id="waktu_kedatangan" name="waktu_kedatangan"
                            class="border-[1px] border-main3 text-gray-900 text-sm rounded-md block w-full ps-10 p-2.5 mt-1 focus:ring-0 focus:outline-none focus:border-main2 @error('waktu_kedatangan')
                        peer
                    @enderror"
                            placeholder="Pilih Tanggal" value="{{ old('waktu_kedatangan') }}" autocomplete="off">
                    </div>
                    @error('waktu_kedatangan')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="expired">Expired</label>
                    <div class="relative ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input type="text" id="expired" name="expired"
                            class="border-[1px] border-main3 text-gray-900 text-sm rounded-md block w-full ps-10 p-2.5 mt-1 focus:ring-0 focus:outline-none focus:border-main2 @error('expired')
                        peer
                    @enderror"
                            placeholder="Pilih Tanggal" value="{{ old('expired') }}" autocomplete="off">

                    </div>
                    @error('expired')
                        <p class="peer-invalid:visible text-red-700 font-light">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" id="deskripsi"
                        class="border-[1px] border-main3 rounded-md w-full focus:ring-0 focus:outline-none focus:border-main2 mt-1 ">{{ old('deskripsi') }}</textarea>
                </div>


                <div class="flex gap-2 mt-5">
                    <a href="{{ route('kapal.admin') }}"
                        class="inline-block py-2 px-3 rounded-md bg-red-800 text-white font-medium">Batal</a>
                    <button type="submit"
                        class="inline-block py-2 px-3 rounded-md bg-Sidebar text-white font-medium" id="submitBtn">Simpan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('admincss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    {{-- plugin filepond --}}
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
            filePondConfig('TiketKapalImage', '{{ csrf_token() }}', '#image', '#submitBtn');
        });


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
            flatpickr("#waktu_keberangkatan", datepicker1);
            flatpickr("#waktu_kedatangan", datepicker1);
            flatpickr("#expired", datepicker1);

        });
    </script>
@endpush
