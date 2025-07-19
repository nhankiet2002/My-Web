
@extends('layouts.app')

@section('title', 'Trang chủ - Đàm Nhân Kiệt')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-8 xl:gap-12">
                <div class="lg:w-1/2">
                    <div class="bg-black/20 border border-gray-800 rounded-full px-4 py-1.5 w-max mb-6 glow-box">
                        <span class="text-primary text-sm font-medium">WEBSITE CÁ NHÂN</span>
                    </div>
                    
                    <h1 class="hero-title mb-6 text-5xl md:text-6xl lg:text-7xl font-bold">
                        <span class="gradient-text">Xin chào, tôi là Đàm Nhân Kiệt</span> 
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-xl">
                        Tôi yêu thích việc tạo ra các giải pháp công nghệ hữu ích, và luôn mong muốn truyền cảm hứng qua từng bài viết – nơi tôi kể lại những điều học được, làm được và đang ấp ủ.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <a href="#projects" class="btn-primary px-8 py-4 rounded-full text-lg flex items-center justify-center gap-2">
                            <i class="fas fa-laptop-code"></i>
                            Xem Dự Án
                        </a>
                        <a href="#contact" class="btn-secondary px-8 py-4 rounded-full text-lg flex items-center justify-center gap-2">
                            <i class="fas fa-handshake"></i>
                            Cùng Hợp Tác
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-6 items-center">
                        <span class="text-gray-400 font-medium">Kết nối với tôi:</span>
                        <div class="flex gap-4">
                            <a href="https://github.com/nhankiet2002" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-github"></i></a>
                            <a href="https://www.tiktok.com/@nhankiet.dam" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-tiktok"></i></a>
                            <a href="https://www.instagram.com/d.nhan_kiet/" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/damnhankiet/" target="_blank" class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center text-gray-300 hover:text-primary transition-colors text-xl"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 relative">
                    <div class="relative floating">
                        <div class="gradient-box rounded-xl w-full max-w-xl mx-auto primary-border p-6">
                            <div class="flex items-center gap-4 mb-6">
                                {{-- SỬA ĐƯỜNG DẪN ẢNH BẰNG HELPER `asset()` --}}
                                <img src="{{ asset('storage/avatar.jpeg') }}" class="w-24 h-24 rounded-full object-cover border-2 border-primary/30">
                                <div>
                                    <h3 class="text-2xl font-bold text-white">Đàm Nhân Kiệt</h3>
                                    <p class="text-primary">Đa lĩnh vực</p>
                                </div>
                            </div>
                            <h4 class="font-bold text-primary mb-2">Giới thiệu nhanh</h4>
                        <p class="text-gray-300">
                            Tôi tin rằng dòng chảy của nước (<strong class="text-white">Thủy Lợi</strong>), dòng chảy của vận mệnh (<strong class="text-white">Tử Vi</strong>) và dòng chảy của dữ liệu (<strong class="text-white">IT</strong>) đều tuân theo những quy luật sâu sắc. 
                            <br>
                            Hành trình của tôi là khám phá và kết nối những quy luật đó – từ kỹ thuật đến yếu tố con người – để tạo ra các giải pháp công nghệ có giá trị thực tiễn.
                            <br>
                            Dù là một hệ thống quản lý phức tạp hay một công cụ phân tích tinh gọn, tôi luôn tập trung vào việc xây dựng sản phẩm tối ưu, đáp ứng đúng nhu cầu với sự thấu hiểu sâu sắc cả về <strong class="text-white">công nghệ</strong> lẫn <strong class="text-white">con người</strong>.
                        </p>

                            <div class="border-t border-gray-800 pt-4 mt-4 flex justify-between items-center text-sm">
                                <div class="flex flex-col">
                                    <span class="text-gray-400">Vị trí</span>
                                    <span class="font-bold">Chùa Bộc, Hà Nội, Việt Nam</span>
                                </div>
                                <div class="flex flex-col text-right">
                                    <span class="text-gray-400">Sẵn sàng</span>
                                    <span class="font-bold text-primary">Cho dự án mới</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Marquee -->
    <div class="py-8 bg-black/30 border-y border-gray-800 relative overflow-hidden">
        <div class="absolute inset-0 gradient-mask z-10"></div>
        <div class="scrolling-text whitespace-nowrap text-gray-500 text-sm font-medium w-max flex gap-14">
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>TƯ VẤN THỦY LỢI</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>LUẬN GIẢI TỬ VI</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>PHÁT TRIỂN PHẦN MỀM</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>PHÂN TÍCH DỮ LIỆU</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>QUẢN LÝ DỰ ÁN</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>TƯ VẤN THỦY LỢI</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>LUẬN GIẢI TỬ VI</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>PHÁT TRIỂN PHẦN MỀM</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>PHÂN TÍCH DỮ LIỆU</span><span class="text-gray-600">•</span>
            <span class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i>QUẢN LÝ DỰ ÁN</span><span class="text-gray-600">•</span>
        </div>
    </div>

   <!-- About Me Section -->
<section id="about" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-black to-gray-900 relative">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-black/30 border border-gray-800 text-primary font-medium mb-4 glow-box">
                HÀNH TRÌNH CỦA TÔI
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Phương Pháp <span class="gradient-text">Tiếp Cận</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Kết hợp góc nhìn hệ thống, sự đồng cảm và tư duy kỹ thuật để đưa ra giải pháp hiệu quả và nhân văn trong mọi hoàn cảnh.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="gradient-box p-8 rounded-2xl feature-card">
                <div class="flex justify-between items-center gap-4 mb-4">
                    <h3 class="text-xl font-bold text-white">
                        Quan Sát Đa Chiều
                    </h3>
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary text-xl flex-shrink-0 flex items-center justify-center">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <p class="text-gray-400">
                    Tôi không nhìn vấn đề ở một chiều — mà phân tích qua kỹ thuật, tâm lý con người và bản chất hệ thống để có cái nhìn toàn cảnh và sâu sắc.
                </p>
            </div>

            <div class="gradient-box p-8 rounded-2xl feature-card">
                <div class="flex justify-between items-center gap-4 mb-4">
                    <h3 class="text-xl font-bold text-white">
                        Kiến Tạo Thực Tiễn
                    </h3>
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary text-xl flex-shrink-0 flex items-center justify-center">
                        <i class="fas fa-tools"></i>
                    </div>
                </div>
                <p class="text-gray-400">
                    Không dừng ở ý tưởng, tôi chuyển hóa hiểu biết thành hành động cụ thể: một công trình, một sản phẩm số hay một định hướng sự nghiệp.
                </p>
            </div>

            <div class="gradient-box p-8 rounded-2xl feature-card">
                <div class="flex justify-between items-center gap-4 mb-4">
                    <h3 class="text-xl font-bold text-white">
                        Trao Quyền & Lan Tỏa
                    </h3>
                    <div class="w-12 h-12 rounded-full bg-primary/10 text-primary text-xl flex-shrink-0 flex items-center justify-center">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                </div>
                <p class="text-gray-400">
                    Tôi không chỉ chia sẻ kiến thức — mà hướng đến trao quyền, giúp người khác hiểu rõ chính mình và làm chủ con đường phía trước.
                </p>
            </div>

        </div>
    </div>
</section>


    <!-- Projects Section -->
    <section id="projects" class="py-24 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 rounded-full bg-black/30 border border-gray-800 text-primary font-medium mb-4 glow-box">PORTFOLIO CỦA TÔI</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Dự Án <span class="gradient-text">Nổi Bật</span></h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Đây là một vài dự án mà tôi tâm đắc nhất, thể hiện kỹ năng và đam mê của tôi.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestProjects as $project)
                    <a href="{{ route('projects.show', $project->slug) }}" class="block gradient-box p-8 rounded-2xl primary-border feature-card tilt-effect animate-fade-in">
                        <div class="mb-4">
                            <img src="{{ $project->image_url ?? 'https://via.placeholder.com/800x600/1E1E1E/A4FF63?text=Project' }}" alt="{{ $project->title }}" class="rounded-lg w-full h-48 object-cover">
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-300 mb-4">{{ Str::limit($project->content, 100) }}</p>
                        <div class="flex flex-wrap gap-2">
                            @if($project->technologies)
                                @foreach(explode(',', $project->technologies) as $tech)
                                    <span class="text-xs bg-primary/10 text-primary px-2 py-1 rounded-full">{{ trim($tech) }}</span>
                                @endforeach
                            @endif
                        </div>
                    </a>
                    
                @empty
                    <p class="text-gray-400 col-span-3 text-center">Chưa có dự án nổi bật nào.</p>
                @endforelse
            </div>
            <div class="mt-16 text-center">
                <a href="{{ route('projects.index') }}" class="btn-secondary px-8 py-4 rounded-full text-lg">
                    <i class="fas fa-arrow-right mr-2"></i>
                    Xem tất cả dự án
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-24 px-4 sm:px-6 lg:px-8 bg-black/20 relative">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1.5 rounded-full bg-black/30 border border-gray-800 text-primary font-medium mb-4 glow-box">GÓC CHIA SẺ</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Bài Viết <span class="gradient-text">Mới Nhất</span></h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Nơi tôi chia sẻ những kiến thức, thủ thuật và câu chuyện về lập trình và cuộc sống.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestPosts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="block group gradient-box rounded-2xl overflow-hidden feature-card">
                        <img src="{{ $post->image_url ?? 'https://via.placeholder.com/800x600/1E1E1E/A4FF63?text=Blog' }}" alt="{{ $post->title }}" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="p-6">
                            <p class="text-primary text-sm font-medium mb-2">{{ $post->published_at->format('d F, Y') }}</p>
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">{{ $post->title }}</h3>
                            <p class="text-gray-400 text-sm">{{ $post->intro }}</p>
                        </div>
                    </a>
                @empty
                    <p class="text-gray-400 col-span-3 text-center">Chưa có bài viết nào.</p>
                @endforelse
            </div>
            <div class="mt-16 text-center">
                <a href="{{ route('projects.index') }}" class="btn-secondary px-8 py-4 rounded-full text-lg">
                    <i class="fas fa-arrow-right mr-2"></i>
                    Xem tất cả bài viết
                </a>
            </div>
        </div>
    </section>

    <!-- Skills/Tech Stack Section -->
<section id="skills" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-black/30 border border-gray-800 text-primary font-medium mb-4 glow-box">
                NĂNG LỰC CỐT LÕI
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Năng Lực <span class="gradient-text">Toàn Diện</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Sự giao thoa giữa khoa học kỹ thuật, khoa học huyền bí và công nghệ hiện đại để tạo ra các giải pháp độc đáo.
            </p>
        </div>

        <!-- === NHÓM 1: KỸ THUẬT THỦY LỢI === -->
        <div class="mb-16">
            <div class="relative mb-12">
                <div class="absolute inset-0 flex items-center" aria-hidden="true"><div class="w-full border-t border-gray-700"></div></div>
                <div class="relative flex justify-center"><span class="bg-gray-900 px-4 text-xl font-medium text-primary">Kỹ Thuật Thủy Lợi</span></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-sitemap text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Quy Hoạch</h3>
                    <p class="text-gray-400 text-sm">Phân tích lưu vực, cân bằng và phân phối tài nguyên nước.</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-calculator text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Quản Lý Công Trình</h3>
                    <p class="text-gray-400 text-sm">Vận hành hệ thống, tính toán định mức và hiệu quả kinh tế.</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-map-marked-alt text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Ứng dụng GIS & CAD</h3>
                    <p class="text-gray-400 text-sm">Phân tích không gian và thiết kế bản vẽ kỹ thuật chi tiết.</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-seedling text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Tưới Hiện Đại</h3>
                    <p class="text-gray-400 text-sm">Thiết kế hệ thống tưới phun mưa, nhỏ giọt và tự động hóa.</p>
                </div>
            </div>
        </div>

        <!-- === NHÓM 2: TƯ VẤN & LUẬN GIẢI TỬ VI === -->
        <div class="mb-16">
            <div class="relative mb-12">
                <div class="absolute inset-0 flex items-center" aria-hidden="true"><div class="w-full border-t border-gray-700"></div></div>
                <div class="relative flex justify-center"><span class="bg-gray-900 px-4 text-xl font-medium text-primary">Tư Vấn & Luận Giải Tử Vi</span></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-scroll text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Lập Lá Số</h3>
                    <p class="text-gray-400 text-sm">An sao và thiết lập lá số chính xác theo ngày giờ sinh.</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-yin-yang text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Luận Giải Chi Tiết</h3>
                    <p class="text-gray-400 text-sm">Phân tích sâu Cung Mệnh, Thân và các mối tương quan sao.</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-calendar-alt text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Xem Vận Hạn</h3>
                    <p class="text-gray-400 text-sm">Dự báo các mốc quan trọng theo Đại Vận, Tiểu Vận, Nguyệt Vận.</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-compass text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Tư Vấn Định Hướng</h3>
                    <p class="text-gray-400 text-sm">Đưa ra lời khuyên về sự nghiệp, tài lộc, tình duyên để tối ưu tiềm năng.</p>
                </div>
            </div>
        </div>

        <!-- === NHÓM 3: PHÁT TRIỂN CÔNG NGHỆ === -->
        <div>
            <div class="relative mb-12">
                <div class="absolute inset-0 flex items-center" aria-hidden="true"><div class="w-full border-t border-gray-700"></div></div>
                <div class="relative flex justify-center"><span class="bg-gray-900 px-4 text-xl font-medium text-primary">Phát Triển Công Nghệ</span></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fab fa-laravel text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Web App (Laravel)</h3>
                    <p class="text-gray-400 text-sm">Xây dựng Backend và các hệ thống web phức tạp.</p>
                </div>
                 <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-mobile-alt text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Ứng dụng Di động</h3>
                    <p class="text-gray-400 text-sm">Phát triển ứng dụng cho iOS & Android (React Native).</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-brain text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Trí Tuệ Nhân Tạo (AI)</h3>
                    <p class="text-gray-400 text-sm">Ứng dụng Machine Learning vào phân tích và dự báo.</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-server text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Hệ Thống & CSDL</h3>
                    <p class="text-gray-400 text-sm">Quản trị Hosting, Supabase và triển khai ứng dụng.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
    <section id="contact" class="py-24 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-black to-gray-900 relative">
        <div class="max-w-7xl mx-auto text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Sẵn Sàng Xây Dựng Điều <span class="gradient-text">Tuyệt Vời</span>?
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10">
                Nếu bạn có một ý tưởng, một dự án, hoặc đơn giản là muốn trò chuyện về công nghệ, đừng ngần ngại liên hệ với tôi.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto: nhankietkthd@gmail.com" class="btn-primary px-8 py-4 rounded-full text-lg">
                    <i class="fas fa-envelope mr-2"></i>
                    Gửi Email cho tôi
                </a>
                <a href="[Link tải CV của bạn]" target="_blank" class="btn-secondary px-8 py-4 rounded-full text-lg">
                    <i class="fas fa-download mr-2"></i>
                    Tải CV của tôi
                </a>
            </div>
        </div>
    </section>
@endsection
