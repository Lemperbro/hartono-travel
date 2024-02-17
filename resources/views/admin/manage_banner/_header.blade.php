<div class="fixed w-full top-0 left-0 px-4 border-b-[1px] border-main3 bg-main">
    <div class="h-20 relative md:ml-64">
        <div class="absolute top-[50%] -translate-y-[50%] w-full overflow-hidden">
            <div class="flex flex-row  justify-between">
                <div class="flex gap-x-2">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <h1 class="font-semibold text-Sidebar my-auto text-xl">Manage Banner</h1>
                </div>

            </div>
        </div>
    </div>
</div>



{{-- notifikasi page --}}
@include('admin.partials.norifikasi')

@push('scripts')
    <script>
        var search = document.getElementById('search');
        var btnSearch = document.getElementById('btn-search');

        btnSearch.addEventListener('click', function() {
            search.classList.add('fixed');
            search.classList.add('top-24');
            search.classList.add('right-5');
            if (search.classList.contains('fixed')) {
                search.classList.toggle('hidden');
            }
        });
    </script>
@endpush
