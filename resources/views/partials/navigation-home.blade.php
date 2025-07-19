<nav class="bg-black/70 backdrop-blur-md border-b border-gray-800 fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center gap-8">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('storage/coding.png') }}" alt="Logo" class="w-10 h-10 object-contain mr-3">
                    <span class="text-2xl font-bold gradient-text">Đàm Nhân Kiệt</span>
                </a>
                <div class="hidden md:flex gap-6">
                    @if(request()->routeIs('home'))
                        {{-- Nếu ở trang chủ, link là dạng anchor --}}
                        <a href="#about" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Về Tôi</span></a>
                        <a href="#projects" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Dự Án</span></a>
                        <a href="#blog" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Blog</span></a>
                        <a href="#skills" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Kỹ Năng</span></a>
                    @else
                        {{-- Nếu ở trang khác (như trang danh sách), link sẽ trỏ về trang tương ứng --}}
                        <a href="{{ route('home') }}#about" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Về Tôi</span></a>
                        <a href="{{ route('projects.index') }}" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Dự Án</span></a>
                        <a href="{{ route('blog.index') }}" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Blog</span></a>
                        <a href="{{ route('home') }}#skills" class="font-medium text-gray-300 hover:text-primary transition-colors primary-underline"><span>Kỹ Năng</span></a>
                    @endif
                </div>
            </div>
            <div class="flex items-center gap-2">
                <div id="theme-toggle-container">
                    <button id="theme-toggle" aria-label="Toggle theme">
                        <i class="fas fa-sun"></i><i class="fas fa-moon"></i>
                    </button>
                    <span id="theme-toggle-text"></span>
                </div>
                    <a href="{{ route('home') }}#contact" class="btn-primary px-5 py-2 rounded-full text-sm flex items-center gap-2 glow-box pulse">
                        <i class="fas fa-paper-plane"></i>
                        <span>Liên Hệ</span>
                    </a>
                    @guest
                        <a href="{{ route('login') }}" class="btn-secondary px-5 py-2 rounded-full text-sm flex items-center gap-2">
                            <i class="fas fa-user-shield"></i>
                            <span>Quản trị</span>
                        </a>
                    @endguest
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="btn-secondary px-5 py-2 rounded-full text-sm flex items-center gap-2">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    @endauth

                <button class="md:hidden text-gray-300 hover:text-primary" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div class="md:hidden hidden bg-black/90 backdrop-blur-lg border-t border-gray-800" id="mobile-menu">
        <div class="px-4 py-3 space-y-4">
             @if(request()->routeIs('home'))
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Về Tôi</a>
                <a href="#projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Dự Án</a>
                <a href="#blog" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Blog</a>
                <a href="#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Kỹ Năng</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Liên Hệ</a>
            @else
                <a href="{{ route('home') }}#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Về Tôi</a>
                <a href="{{ route('projects.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Dự Án</a>
                <a href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Blog</a>
                <a href="{{ route('home') }}#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Kỹ Năng</a>
                <a href="{{ route('home') }}#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-primary hover:bg-gray-900">Liên Hệ</a>
            @endif
        </div>
        {{-- Thêm nút Quản trị vào menu mobile --}}
        <div class="border-t border-gray-700 mt-4 pt-4 px-4 pb-4">
            @guest
                <a href="{{ route('login') }}" class="block text-center w-full btn-secondary px-5 py-3 rounded-full text-base">
                    Đăng nhập Quản trị
                </a>
            @endguest
            @auth
                <a href="{{ route('admin.dashboard') }}" class="block text-center w-full btn-secondary px-5 py-3 rounded-full text-base">
                    Vào trang Quản trị
                </a>
            @endauth
        </div>
    </div>
</nav>