{{-- resources/views/partials/footer.blade.php --}}

<footer class="bg-black/70 border-t border-gray-800 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <div class="flex items-center mb-6">
                     <a href="{{ route('home') }}" class="flex items-center">
                        <i class="fas fa-user-circle text-primary text-3xl mr-3"></i>
                        <span class="text-2xl font-bold gradient-text">Đàm Nhân Kiệt</span>
                    </a>
                </div>
                <p class="text-gray-400 mb-6 max-w-md">
                    Luôn tự tin mỗi khi đối mặt với thách thức. 
                    <br>Cảm ơn bạn đã ghé thăm.
                </p>
                <div class="flex gap-4">
                    <a href="https://github.com/nhankiet2002" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-github"></i></a>
                    <a href="https://www.tiktok.com/@nhankiet.dam" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/d.nhan_kiet/" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/damnhankiet/" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-white mb-4">Điều Hướng</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}#about" class="text-gray-400 hover:text-primary transition-colors">Về Tôi</a></li>
                    <li><a href="{{ route('projects.index') }}" class="text-gray-400 hover:text-primary transition-colors">Dự án</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-primary transition-colors">Blog</a></li>
                    <li><a href="{{ route('home') }}#skills" class="text-gray-400 hover:text-primary transition-colors">Kỹ Năng</a></li>
                    <li><a href="{{ route('home') }}#contact" class="text-gray-400 hover:text-primary transition-colors">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-16 pt-8 text-center">
            <div id="real-time-clock" class="text-lg font-mono text-primary mb-4"></div>
            
            <p class="text-gray-400">
                © <span id="current-year"></span> Đàm Nhân Kiệt. All rights reserved.
                <span class="mx-2 text-gray-600">|</span>
                 @guest
                    <a href="{{ route('login') }}" class="text-gray-500 hover:text-primary transition-colors">Đăng nhập Quản trị</a>
                @endguest
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-primary transition-colors">Vào trang Quản trị</a>
                @endauth
            </p>
        </div>
    </div>
</footer>

<script>
    function updateClock() {
        const clockElement = document.getElementById('real-time-clock');
        if (clockElement) {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            clockElement.textContent = `${hours}:${minutes}:${seconds}`;
        }
    }
    // Chạy ngay khi tải trang và lặp lại mỗi giây
    if (document.getElementById('real-time-clock')) {
        updateClock();
        setInterval(updateClock, 1000);
    }
</script>