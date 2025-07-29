<nav x-data="{ open: false }" class="bg-black/70 backdrop-blur-md border-b border-gray-800 fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                <img src="{{ asset('storage/coding.png') }}" alt="Logo" class="w-10 h-10 object-contain mr-3">
                <span class="text-2xl font-bold gradient-text">Đàm Nhân Kiệt</span>
            </a>

            {{-- Navigation Links (Center) - Hidden on mobile --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="font-medium {{ request()->routeIs('home') ? 'text-primary' : 'text-gray-300' }} hover:text-primary transition-colors">
                    Trang chủ
                </a>
                <a href="{{ route('projects.index') }}" class="font-medium {{ request()->routeIs('projects.*') ? 'text-primary' : 'text-gray-300' }} hover:text-primary transition-colors">
                    Dự án
                </a>
                <a href="{{ route('blog.index') }}" class="font-medium {{ request()->routeIs('blog.*') ? 'text-primary' : 'text-gray-300' }} hover:text-primary transition-colors">
                    Blog
                </a>
            </div>

            {{-- Right side icons & buttons --}}
            <div class="flex items-center gap-4">
                {{-- Nút Quay lại - Hiển thị trên desktop --}}
                <a href="{{ url()->previous() }}" class="hidden sm:flex font-medium text-gray-300 hover:text-primary transition-colors items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Quay lại
                </a>

                {{-- Theme Switcher --}}
                <div id="theme-toggle-container">
                    <button id="theme-toggle" aria-label="Toggle theme">
                        <i class="fas fa-sun"></i><i class="fas fa-moon"></i>
                    </button>
                    <span id="theme-toggle-text"></span>
                </div>

                {{-- Nút Dashboard chỉ hiển thị khi đã đăng nhập (Desktop) --}}
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="hidden sm:flex btn-secondary px-5 py-2 rounded-full text-sm items-center gap-2">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                @endauth

                {{-- Mobile Menu Button --}}
                <div class="md:hidden">
                    <button @click="open = !open" type="button" class="text-gray-300 hover:text-primary focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        {{-- Icon Bars khi menu đóng --}}
                        <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        {{-- Icon X khi menu mở --}}
                        <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" @click.away="open = false" x-transition class="md:hidden bg-black/90 backdrop-blur-lg border-t border-gray-800" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-primary bg-gray-900' : 'text-gray-300' }} hover:text-primary hover:bg-gray-700">Trang chủ</a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('projects.*') ? 'text-primary bg-gray-900' : 'text-gray-300' }} hover:text-primary hover:bg-gray-700">Dự án</a>
            <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('blog.*') ? 'text-primary bg-gray-900' : 'text-gray-300' }} hover:text-primary hover:bg-gray-700">Blog</a>
             <a href="{{ url()->previous() }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-700">Quay lại</a>
        </div>
        
        {{-- Nút Dashboard/Auth trong menu mobile --}}
        @auth
            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5">
                    <div class="ml-auto">
                        <a href="{{ route('admin.dashboard') }}" class="btn-secondary px-4 py-2 rounded-full text-sm items-center gap-2">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </div>
                </div>
            </div>
        @endauth
    </div>
</nav>

{{-- QUAN TRỌNG: Thêm AlpineJS vào dự án của bạn --}}
{{-- Thêm dòng này vào trong thẻ <head> của layout chính --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>