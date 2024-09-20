<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown{{ $key }}"
    class="text-white bg-Sidebar hover:bg-SidebarActive focus:ring-4 focus:outline-none font-medium rounded-md text-sm px-3 py-1 text-center inline-flex items-center "
    type="button">Action <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdown{{ $key }}"
    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
        <li>
            <a href="{{ route('galeri.admin.edit', ['id' => $item->id]) }}"
                class="block px-4 py-2 hover:bg-gray-100 w-full text-Sidebar">Edit Data</a>
        </li>
        <li>
            <form method="POST">
                @csrf
                <button type="submit" class="block px-4 py-2 hover:bg-gray-100 w-full text-left text-red-800">Hapus
                    Data</button>
            </form>
        </li>
    </ul>
</div>
