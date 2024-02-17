<div
    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-52 lg:h-full lg:w-48 lg:rounded-none lg:rounded-s-lg"
        src="{{ asset('bgImage/bg1.jpg') }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <div class="flex gap-4 justify-between">
            @include('admin.tiket_kapal._actionCard')
            <div class="flex gap-1 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 fill-SidebarActive">
                    <path
                        d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z">
                    </path>
                </svg>
                <h1 class="text-SidebarActive text-sm">100</h1>
            </div>
        </div>
        <h1 class="mt-2 text-sm text-red-600 hidden">Tiket Habis</h1>
        <h5 class="mb-2 text-xl lg:text-2xl font-bold tracking-tight text-Sidebar">Noteworthy technology
            acquisitions 2021</h5>
        <div class="flex flex-col gap-4">
            <div>
                <h1 class="text-Sidebar font-semibold">Keberangkatan</h1>
                <h3 class="text-sm text-gray-600">Pelabuhan Surabaya</h3>
                <h3 class="text-sm text-gray-600">Sabtu, 17 Februari 2024</h3>
            </div>
            <div>
                <h1 class="text-Sidebar font-semibold">Kedatangan</h1>
                <h3 class="text-sm text-gray-600">Pelabuhan Surabaya</h3>
                <h3 class="text-sm text-gray-600">Selasa, 20 Februari 2024</h3>
            </div>
        </div>
    </div>
</div>
