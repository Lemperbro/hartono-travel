<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-[999] w-64 h-screen -translate-x-full bg-Sidebar md:translate-x-0 transition-all duration-500"
    aria-label="Sidebar">
    {{-- logo area --}}
    <div class="h-20 mb-2 border-b-[1px] border-main2 px-3 relative">
        <div class="flex gap-x-4 absolute top-[50%] -translate-y-[50%] p-2">
            <img src="{{ asset('img/logo.png') }}" alt="" class="object-contain w-7 h-7 my-auto">
            <h1 class="font-semibold text-white text-[21px] my-auto">Hartono Travel</h1>
        </div>
    </div>
    <div class="h-full px-3 pb-[290px] overflow-y-auto bg-Sidebar relative w-64 scrollbar">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center p-2 text-gray-400 rounded-lg group {{ request()->routeIs('admin.dashboard') ? 'bg-SidebarActive' : '' }}
                    ">
                    <svg class="w-5 h-5 text-gray-400 transition duration-75" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ml-3 font-semibold">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('penjualan') }}"
                    class="flex items-center p-2 text-gray-400 rounded-lg group {{ request()->routeIs('penjualan') || request()->routeIs('penjualan.*') ? 'bg-SidebarActive' : '' }}
                    ">
                    <i class="ri-database-2-fill fill-gray-400 text-xl"></i>

                    <span class="ml-3 font-semibold">Data Transaksi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('banner') }}"
                    class="flex items-center p-2 text-gray-400 rounded-lg group {{ request()->routeIs('banner') || request()->routeIs('banner.*') ? 'bg-SidebarActive' : '' }}
                    ">
                    <i class="ri-image-fill fill-gray-400 text-xl"></i>
                    <span class="ml-3 font-semibold">Manage Banner</span>
                </a>
            </li>
            <li>
                <a href="{{ route('kapal.admin') }}"
                    class="flex items-center p-2 text-gray-400 rounded-lg group {{ request()->routeIs('kapal.admin') || request()->routeIs('kapal.*') ? 'bg-SidebarActive' : '' }}">
                    <i class="ri-sailboat-fill fill-gray-400 text-xl"></i>
                    <span class="ml-3 font-semibold">Manage Tiket Kapal</span>
                </a>
            </li>
            <li>
                <a href="/admin" class="flex items-center p-2 text-gray-400 rounded-lg group">
                    <i class="ri-calendar-event-fill fill-gray-400 text-xl"></i>
                    <span class="ml-3 font-semibold">Manage Promo</span>
                </a>
            </li>
            <li>
                <a href="{{ route('galeri.admin') }}" class="flex items-center p-2 text-gray-400 rounded-lg group">
                    <i class="ri-gallery-view fill-gray-400 text-xl"></i>
                    <span class="ml-3 font-semibold">Manage Galeri</span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" class="flex items-center justify-center p-2 text-gray-400 rounded-lg group bg-SidebarActive">
                    <span class="text-center font-semibold">Lihat Halaman Client</span>
                </a>
            </li>
        </ul>

        {{-- menu bawa --}}
        <div class="fixed w-64 bottom-0 bg-Sidebar left-0 pt-2 px-3 pb-4 ">
            <a href="{{ route('logout') }}" class="flex items-center p-2 text-gray-400 rounded-lg group">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="w-5 h-5 fill-gray-400 transition duration-75"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                </svg>

                <span class="ml-3 font-semibold">Logout</span>

            </a>
            <a href="" class="max-h-[50px] h-full w-full border-t-[1px] border-main2 flex gap-x-3 pt-2">
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img src="{{ asset('DefaultImage/user_image.jpg') }}" alt=""
                        class="object-center object-cover w-14 h-14  rounded-full my-auto">
                </div>
                <div class="my-auto">
                    <h1 class="text-lg text-white capitalize">{{ auth()->user()->name }}</h1>
                    <h1 class="text-sm text-gray-300">Admin</h1>
                </div>
            </a>
        </div>
    </div>
</aside>



@push('scripts')
    <script>
        var dropdownSidebar = document.querySelectorAll('.dropdownSidebar');
        var arrowSidebar = document.querySelectorAll('.arrowSidebar');

        dropdownSidebar.forEach(function(element, index) {
            element.addEventListener('click', function() {
                arrowSidebar[index].classList.toggle('rotate-180');
            });
        });
    </script>
@endpush
