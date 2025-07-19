<nav class="bg-black/70 backdrop-blur-md border-b border-gray-800 fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('storage/coding.png') }}" alt="Logo" class="w-10 h-10 object-contain mr-3">
                <span class="text-2xl font-bold gradient-text">Đàm Nhân Kiệt</span>
            </a>
            
            <div class="flex items-center gap-4">
                {{-- Nút Quay lại --}}
                <a href="{{ url()->previous() }}" class="font-medium text-gray-300 hover:text-primary transition-colors flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Quay lại
                </a>
                
                {{-- Theme Switcher --}}
                <div id="theme-toggle-container">
                    <button id="theme-toggle" aria-label="Toggle theme">
                        <i class="fas fa-sun"></i><i class="fas fa-moon"></i>
                    </button>
                    <span id="theme-toggle-text"></span>
                </div>

                {{-- Nút Dashboard chỉ hiển thị khi đã đăng nhập --}}
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="hidden sm:flex btn-secondary px-5 py-2 rounded-full text-sm items-center gap-2">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>