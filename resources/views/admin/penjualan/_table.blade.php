<div class="relative overflow-x-auto ">
    <table class="w-full overflow-auto text-sm text-left rtl:text-right text-gray-500 table-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3 whitespace-nowrap w-5 text-center">
                    No
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Nama Pemesan
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    No Tiket
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Telphone
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Keberangkatan
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Tanggal Pemesanan
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Status Pembayaran
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach (json_decode($data->toJson()) as $index => $item)
                <tr class="bg-white border-b  hover:bg-gray-50 ">
                    <th class="px-6 py-4 w-5 text-center">
                        {{ $data->firstItem() + $index }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $item->nama }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->no_tiket }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->telp }}
                    </td>
                    <td class="px-6 py-4 ">
                        {{ $item->alamat }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->keberangkatan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->tgl_pemesanan }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $item->harga }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->status }}
                    </td>
                    <td class="px-6 py-4 flex gap-2 justify-center">
                        <button type="button" onclick="show_data{{ $index }}.showModal()" class="p-1 rounded-md bg-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 fill-white">
                                <path
                                    d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 11.4872 7.07719 10.9925 7.22057 10.5268C7.61175 11.3954 8.48527 12 9.5 12C10.8807 12 12 10.8807 12 9.5C12 8.48527 11.3954 7.61175 10.5269 7.21995C10.9925 7.07719 11.4872 7 12 7Z">
                                </path>
                            </svg>
                        </button>
                        <a href="{{ route('penjualan.edit', ['id' => $item->id]) }}" class="p-1 rounded-md bg-black inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 fill-white">
                                <path
                                    d="M12.8995 6.85453L17.1421 11.0972L7.24264 20.9967H3V16.754L12.8995 6.85453ZM14.3137 5.44032L16.435 3.319C16.8256 2.92848 17.4587 2.92848 17.8492 3.319L20.6777 6.14743C21.0682 6.53795 21.0682 7.17112 20.6777 7.56164L18.5563 9.68296L14.3137 5.44032Z">
                                </path>
                            </svg>
                        </a>
                        <button type="button" onclick="delete_data{{ $index }}.showModal()" class="p-1 rounded-md bg-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 fill-white">
                                <path
                                    d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                </path>
                            </svg>
                        </button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@include('admin.penjualan._modalShow')
@include('admin.penjualan._modalDelete')


