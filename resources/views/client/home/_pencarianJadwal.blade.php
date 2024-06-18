<div class="absolute left-[50%] -translate-x-[50%] w-full -top-36 z-30">
    <div class="md:container mx-4">
        <form class="bg-white rounded-md shadow-lg px-8 pt-4 pb-6" method="POST" id="formJadwal"
            action="{{ route('cari-jadwal-pesawat') }}">
            <h1 class="text-center font-semibold my-2 text-2xl text-gray-700">Cari Jadwal Pesawat</h1>
            <div id="alert-error"
                class="hidden flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div class="ms-3 text-sm font-medium" id="error_text">

                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-error" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            @csrf
            <div class="flex flex-col md:flex-row gap-4">

                <select id="tipe_tiket"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 peer"
                    name="tipe_tiket">
                    <option value="sekali_jalan">Sekali Jalan</option>
                    <option value="pulang_pergi" selected>Pulang Pergi</option>
                </select>


                <select id="kelas"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-900 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0  peer"
                    name="kelas">
                    <option value="1" class="" selected>Kelas Ekonomi</option>
                    <option value="2" class="">Kelas Ekonomi Premium</option>
                    <option value="3" class="">Bisnis</option>
                    <option value="4" class="">Kelas Satu</option>
                </select>

            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 w-full justify-evenly mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 w-full">
                    <div class="relative">
                        <input type="text"
                            class="p-3 h-14 rounded-md w-full pl-12 focus:outline-none focus:ring-0 focus:border-orange-400 focus:shadow-shadow1 focus:shadow-orange-600 border-gray-600"
                            placeholder="Dari Mana?" id="from" autocomplete="off" name="from">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="absolute w-4 top-[22px] left-5">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z">
                            </path>
                        </svg>
                        <div id="from-suggestions"
                            class="absolute z-50 w-full  bg-white border border-orange-600 shadow-shadow1 shadow-orange-400 hidden max-h-[250px] overflow-y-auto">
                        </div>
                    </div>
                    <div class="relative">
                        <input type="text"
                            class="p-3 h-14 rounded-md w-full pl-12 focus:outline-none focus:ring-0 focus:border-orange-400 focus:shadow-shadow1 focus:shadow-orange-600 border-gray-600"
                            placeholder="Ke Mana?" id="to" name="to">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="absolute w-5 top-[20px] left-5">
                            <path
                                d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z">
                            </path>
                        </svg>
                        <div id="to-suggestions"
                            class="absolute z-50 w-full  bg-white border border-orange-600 shadow-shadow1 shadow-orange-400 hidden max-h-[250px] overflow-y-auto">
                        </div>
                    </div>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div>
                        <div class="relative ">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" id="dateStart"
                                class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-0 focus:border-orange-400 focus:shadow-shadow1 focus:shadow-orange-600 block w-full ps-10 p-3 h-14 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Berangkat" autocomplete="off" name="dateStart">
                        </div>


                    </div>
                    <div>
                        <div class="relative " id="dateEndArea">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker type="text" id="dateEnd"
                                class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-0 focus:border-orange-400 focus:shadow-shadow1 focus:shadow-orange-600 block w-full ps-10 p-3 h-14 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pulang" autocomplete="off" name="dateEnd">
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex gap-4 mt-8">
                <a href="{{ route('home') }}"
                    class="text-white bg-black p-2 text-center rounded-md w-full inline-block">Reset</a>
                <button id="btnSubmitFormJadwal" type="submit"
                    class="bg-orange-600 text-white p-2 rounded-md  inline-block w-full">Cari Sekarang</button>
            </div>
        </form>
    </div>
</div>
@push('style')
    <style>
        .datepicker-grid .disabled {
            color: #888;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('js/showSuggestJadwal.js') }}"></script>
    <script src="{{ asset('js/datePickerConfg.js') }}"></script>
    <script src="{{ asset('js/collapse.js') }}"></script>
    <script>
        //datepicker start
        window.addEventListener('load', function() {
            const dateStart = document.getElementById("dateStart");
            const dateEnd = document.getElementById("dateEnd");
            const today = new Date();
            datePickerConfg(dateStart, today)
            datePickerConfg(dateEnd, today)
        });
        //datepicker end 

        //dynamic tipe ticker start
        var tipeTiket = document.getElementById('tipe_tiket');
        tipeTiket.addEventListener('change', function() {
            var dateEnd = document.getElementById('dateEndArea');
            if (tipeTiket.value == 'pulang_pergi') {
                dateEnd.classList.remove('hidden');
            } else if (tipeTiket.value == 'sekali_jalan') {
                dateEnd.classList.add('hidden');
            }
        });
        //dynamic tipe ticker end

        //suggest for destination start
        const airports = '{{ asset('airports.json') }}';
        fetch(airports)
            .then(response => response.json())
            .then(data => {
                var from = document.getElementById('from');
                var Fromsuggest = document.getElementById('from-suggestions');
                showSuggestions(from, data, Fromsuggest);

                var to = document.getElementById('to');
                var Tosuggest = document.getElementById('to-suggestions');
                showSuggestions(to, data, Tosuggest);
            });
        //suggest for destination end


        //send Request start
        $(document).ready(function() {

            $('#formJadwal').on('submit', function(event) {
                // Matikan aksi default formulir
                event.preventDefault();

                var formData = $(this).serialize();
                // Dapatkan token CSRF dari meta tag
                var csrfToken = $('input[name="_token"]').val();

                // Tambahkan token CSRF ke dalam data formulir
                formData += '&_token=' + csrfToken;
                $.ajax({
                    method: 'POST', // Sesuaikan metode dengan formulir Anda
                    url: $(this).attr('action'), // Mengambil URL action dari formulir
                    data: formData,
                    beforeSend: function() {
                        hideBtnSubmit();
                        removeCardArea();
                        hidden_no_data();
                        showLoading();

                    },
                    success: function(response) {
                        hideLoading();
                        hiddenAlertError();
                        removeCardArea();
                        showBtnSubmit();
                        if (!response.data.error && !response.error) {
                            hidden_no_data();
                            htmlJadwalPesawatCard(response.data);
                            addEventListenersToNewElements();
                        } else {
                            no_data();
                        }
                    },
                    error: function(error) {
                        hideLoading();
                        showBtnSubmit();
                        if (error || error.responseJSON.error || error.responseJSON.message ===
                            'The to field is required.') {
                            hidden_no_data();
                            showAlertError();
                            $('#error_text').html(error.responseJSON.error ??
                                'Mohon Lengkapi Data');
                        }
                        // Handle error jika diperlukan
                    }
                });
            });

            function hideBtnSubmit() {
                $('#btnSubmitFormJadwal').prop('disabled', true);
            }

            function showBtnSubmit() {
                $('#btnSubmitFormJadwal').prop('disabled', false);
            }

            function showLoading() {
                $('#loadingArea').removeClass('hidden');
            }

            function hideLoading() {
                $('#loadingArea').addClass('hidden');
            }

            function showAlertError() {
                if (!$('#other_flights').hasClass('hidden') || !$('#best_flights').hasClass('hidden')) {
                    $('#other_flights').addClass('hidden');
                    $('#best_flights').addClass('hidden');
                }
                $('#alert-error').removeClass('hidden');
                $('#alert-error').removeClass('opacity-0');
            }

            function hiddenAlertError() {
                $('#alert-error').addClass('hidden');
                $('#alert-error').addClass('opacity-0');
            }

            function removeCardArea() {
                if (!$('#other_flights').hasClass('hidden') || !$('#best_flights').hasClass('hidden')) {
                    $('#other_flights').addClass('hidden');
                    $('#best_flights').addClass('hidden');
                }
                $('#best_flights_area').html("");
                $('#other_flights_area').html("");
            }

            function hidden_no_data() {
                $('#no_data_area').addClass('hidden');
            }

            function no_data() {
                if (!$('#other_flights').hasClass('hidden') || !$('#best_flights').hasClass('hidden')) {
                    $('#other_flights').addClass('hidden');
                    $('#best_flights').addClass('hidden');
                }

                $('#no_data_area').removeClass('hidden');
            }

            function formatDateToIndonesian(dateString) {
                const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
                    'September',
                    'Oktober', 'November', 'Desember'
                ];

                const date = new Date(dateString);
                const dayOfWeek = days[date.getDay()];
                const dayOfMonth = date.getDate();
                const month = months[date.getMonth()];

                return `${dayOfWeek} ${dayOfMonth} ${month}`;
            }

            function convertDateFormat24Hours(inputDate) {
                const dateParts = inputDate.split(' ');
                const timeParts = dateParts[1].split(':');

                const hours = parseInt(timeParts[0], 10);
                const minutes = parseInt(timeParts[1], 10);

                // Menghasilkan format "hh:mm"
                const formattedTime = `${(hours < 10 ? '0' : '') + hours}:${(minutes < 10 ? '0' : '') + minutes}`;
                return formattedTime;
            }

            function card(item, collapseTarget) {
                // Buat salinan dari item.flights[0]
                const data = { ...item.flights[0] };

                // Convert nested objects to JSON strings
                data.departure_airport = JSON.stringify(data.departure_airport);
                data.arrival_airport = JSON.stringify(data.arrival_airport);

                // Convert data object to query string
                const queryString = new URLSearchParams(data).toString();

                // Create card with the href attribute set with the query string
                var card = `<div class="relative mb-3 bg-white rounded-xl" id="card_flights">
                    <h6 class="mb-0">
                        <button
                            class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
                            data-collapse-target="${collapseTarget}">
                            <div class="gap-4 items-center justify-between flex flex-wrap w-full">
                                <div class="flex gap-4 items-center">
                                    <img src="${item.airline_logo}" alt=""
                                        class="w-12 h-12 object-contain">
                                    <div>
                                        <h1 class="text-xl font-semibold">${item.flights[0].airplane || item.flights[0].airline}</h1>
                                        <h3 class="font-normal">${item.flights[0].airline}</h3>
                                        <h3 class="font-normal">${formatDateToIndonesian(item.flights[0].departure_airport.time)}</h3>
                                        <h3 class="font-semibold">${convertDateFormat24Hours(item.flights[0].departure_airport.time)}</h3>
                                    </div>
                                </div>
                                <a href="/pesawat/redirect?${queryString}" target="_blank"
                                    class="inline-block mr-10 bg-orange-600 py-2 px-3 rounded-lg text-white ml-auto">Pesan
                                    Sekarang</a>
                            </div>
                            <i
                                class="absolute right-5 pt-1 text-base transition-transform fa fa-chevron-down group-open:rotate-180"></i>
                        </button>
                    </h6>
                    <div data-collapse="${collapseTarget}" class="h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="flex gap-4">
                                <div class="relative min-h-1  border-r-2 border-dashed border-black my-1">
                                    <div
                                        class="w-3 h-3 rounded-full bg-white border border-black absolute top-0 left-[50%] -translate-x-[45%]">
                                    </div>
                                    <div
                                        class="w-3 h-3 rounded-full bg-white border border-black absolute bottom-0 left-[50%] -translate-x-[45%]">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div>
                                        <h1 class="text-lg font-semibold">${convertDateFormat24Hours(item.flights[0].departure_airport.time)} • ${item.flights[0].departure_airport.name}</h1>
                                    </div>
                                    <div>
                                        <ul class="list-disc ml-5">
                                            <li>${item.flights[0].travel_class}</li>
                                            <li>${item.flights[0].flight_number}</li>
                                            <li>${item.type}</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h1 class="text-lg font-semibold">${convertDateFormat24Hours(item.flights[0].arrival_airport.time)} • ${item.flights[0].arrival_airport.name}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;

                return card;
            }


            function htmlJadwalPesawatCard(data) {
                if (data.best_flights !== null) {
                    data.best_flights.forEach(function(item, index) {
                        const collapseTarget = `animated-collapse-${index + 1}`;
                        $('#best_flights_area').append(card(item, collapseTarget));
                        $('#best_flights').removeClass('hidden');
                    });
                }
                if (data.other_flights !== null) {
                    data.other_flights.forEach(function(item, index) {
                        const indexs = index + 1;
                        const collapseTarget = `animated-collapse-${data.best_flights.length + indexs}`;
                        $("#other_flights_area").append(card(item, collapseTarget));
                        $('#other_flights').removeClass('hidden');

                    });
                }
            }
        });
        //send Request End
    </script>
@endpush
