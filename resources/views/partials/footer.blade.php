{{-- resources/views/partials/footer.blade.php --}}

<footer class="bg-black/70 border-t border-gray-800 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        {{-- Bố cục chính: 2 cột trên màn hình vừa và lớn để cân bằng hơn --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            {{-- Cột 1: Brand và Mạng xã hội --}}
            <div class="lg:pr-8">
                <div class="flex items-center mb-6">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('storage/coding.png') }}" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
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

            {{-- Cột 2: Chứa 2 danh sách con (Liên kết và Liên hệ) --}}
            <div>
                {{-- Bố cục con cho 2 danh sách, đặt cạnh nhau trên màn hình nhỏ và lớn --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Liên kết nhanh</h4>
                        <ul class="space-y-3">
                            <li><a href="{{ route('home') }}#about" class="text-gray-400 hover:text-primary transition-colors">Về Tôi</a></li>
                            <li><a href="{{ route('projects.index') }}" class="text-gray-400 hover:text-primary transition-colors">Dự án</a></li>
                            <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-primary transition-colors">Blog</a></li>
                            <li><a href="{{ route('home') }}#skills" class="text-gray-400 hover:text-primary transition-colors">Kỹ Năng</a></li>
                            <li><a href="{{ route('home') }}#contact" class="text-gray-400 hover:text-primary transition-colors">Liên Hệ</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-4">Liên Hệ</h4>
                        <ul class="space-y-3 text-gray-400">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt fa-fw mt-1 mr-3 text-primary"></i>
                                <span>Thành Phố Hà Nội, Việt Nam</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-phone fa-fw mt-1 mr-3 text-primary"></i>
                                <a href="tel:+84934281521" class="hover:text-primary transition-colors">(+84) 934 281 521</a>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-envelope fa-fw mt-1 mr-3 text-primary"></i>
                                <a href="mailto:nhankietkthd@gmail.com" class="hover:text-primary transition-colors">nhankietkthd@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Phần Copyright và đồng hồ --}}
        <div class="border-t border-gray-800 mt-16 pt-8 text-center">
            <div id="real-time-clock" class="text-lg font-mono text-primary mb-4"></div>
            
            <p class="text-gray-400">
                ©2024 Đàm Nhân Kiệt. Tất cả bản quyền đều được lưu.
            </p>
        </div>
    </div>
</footer>

<script>
    // Clock Script
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
    

    // Run scripts on load and set intervals
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('real-time-clock')) {
            updateClock();
            setInterval(updateClock, 1000);
        }
        if (document.getElementById('current-year')) {
            updateYear();
        }
    });
</script>