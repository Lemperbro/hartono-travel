        // $(document).ready(function() {

        //     // Turn input element into a pond with configuration options
        //     $('#image').filepond({
        //         allowMultiple: true,
        //         name: 'image',
        //     });

        //     // Listen for addfile event
        //     $('#image').on('FilePond:addfile', function(e) {});

        //     var nameImage = [];
        //     var deleteImage = [];
        //     FilePond.setOptions({
        //         maxFiles: 4,
        //         server: {
        //             process: {
        //                 url: '{{ route('filePond.post') }}',
        //                 onload: (response) => {
        //                     console.log('res ' + response)
        //                     nameImage.push(response);
        //                     console.log(nameImage);
        //                     return response;
        //                 },
        //                 headers: {
        //                     'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //                 }
        //             },
        //             revert: (uniqueFileId, load, error) => {
        //                 console.log(uniqueFileId);
        //                 if (uniqueFileId !== null) {
        //                     // Hapus file dari nameImage dan tambahkan ke deleteImage
        //                     var deletedFileName = nameImage.find((fileName) => fileName ===
        //                         uniqueFileId);
        //                     if (deletedFileName) {
        //                         axios.post('{{ route('filePond.delete', ['folder' => ':folder']) }}'
        //                                 .replace(':folder', 'TiketKapalImage'), {
        //                                     imageName: deletedFileName,
        //                                 })
        //                             .then(response => {
        //                                 console.log(response.data);
        //                                 // Hapus dari nameImage dan tambahkan ke deleteImage
        //                                 deleteImage.push(deletedFileName);
        //                                 nameImage = nameImage.filter((fileName) => fileName !==
        //                                     uniqueFileId);
        //                                 console.log(nameImage);
        //                                 console.log(deleteImage);
        //                             })
        //                             .catch(error => {
        //                                 console.error(error);
        //                             });
        //                     }
        //                 }
        //             }


        //         },
        //         undo: false
        //     });

        // });