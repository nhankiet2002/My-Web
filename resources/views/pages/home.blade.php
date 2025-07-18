
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
                        Tôi đam mê xây dựng các giải pháp công nghệ sáng tạo và chia sẻ trải nghiệm, kiến thức qua những bài viết blog.
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
                                Tôi là một người đam mê lập trình, nghiên cứu các vấn đề liên quan đến <strong style="font-size: 1.2em;" class="text-white">Thuỷ Lợi</strong> và là một nhà tư vấn 
                                <strong style="font-size: 1.2em;" class="text-white">Tử Vi</strong>.
                                <br> Tôi thích khám phá các kiến thức, công nghệ mới và chia sẻ qua blog cá nhân.
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
                <span class="inline-block px-4 py-1.5 rounded-full bg-black/30 border border-gray-800 text-primary font-medium mb-4 glow-box">HÀNH TRÌNH CỦA TÔI</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Triết Lý Làm Việc <span class="gradient-text">Của Tôi</span></h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Tôi tin vào sức mạnh của việc học hỏi liên tục, xây dựng sản phẩm chất lượng và chia sẻ kiến thức.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="gradient-box p-8 rounded-2xl feature-card"><div class="w-12 h-12 rounded-full bg-primary/10 text-primary text-xl flex items-center justify-center mb-6"><i class="fas fa-book-open"></i></div><h3 class="text-xl font-bold text-white mb-4">Học Hỏi Không Ngừng</h3><p class="text-gray-400">Thế giới công nghệ luôn thay đổi. Tôi dành thời gian mỗi ngày để cập nhật xu hướng, công nghệ và phương pháp mới.</p></div>
                <div class="gradient-box p-8 rounded-2xl feature-card"><div class="w-12 h-12 rounded-full bg-primary/10 text-primary text-xl flex items-center justify-center mb-6"><i class="fas fa-cogs"></i></div><h3 class="text-xl font-bold text-white mb-4">Xây Dựng Bền Vững</h3><p class="text-gray-400">Tôi tập trung vào việc viết mã sạch, dễ bảo trì và có khả năng mở rộng, tạo ra những sản phẩm có giá trị lâu dài.</p></div>
                <div class="gradient-box p-8 rounded-2xl feature-card"><div class="w-12 h-12 rounded-full bg-primary/10 text-primary text-xl flex items-center justify-center mb-6"><i class="fas fa-share-alt"></i></div><h3 class="text-xl font-bold text-white mb-4">Chia Sẻ Để Cùng Nhau Phát Triển</h3><p class="text-gray-400">Kiến thức trở nên giá trị hơn khi được chia sẻ. Tôi viết blog để ghi lại hành trình và giúp đỡ cộng đồng.</p></div>
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
                    Xem tất cả dự án
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
                    Bộ Công Cụ <span class="gradient-text">Công Nghệ</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Những công nghệ và công cụ tôi sử dụng hàng ngày để biến ý tưởng thành hiện thực.
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fab fa-react text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">React & Next.js</h3>
                    <p class="text-gray-400 text-sm">Frontend Development</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fab fa-node-js text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Node.js & Express</h3>
                    <p class="text-gray-400 text-sm">Backend Development</p>
                </div>
                <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-database text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">SQL & NoSQL</h3>
                    <p class="text-gray-400 text-sm">Database Management</p>
                </div>
                 <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fab fa-docker text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Docker & CI/CD</h3>
                    <p class="text-gray-400 text-sm">DevOps</p>
                </div>
                 <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fab fa-aws text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Cloud (AWS/GCP)</h3>
                    <p class="text-gray-400 text-sm">Cloud Computing</p>
                </div>
                 <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fab fa-figma text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Figma</h3>
                    <p class="text-gray-400 text-sm">UI/UX Design</p>
                </div>
                 <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fab fa-python text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">Python</h3>
                    <p class="text-gray-400 text-sm">Scripting & AI</p>
                </div>
                 <div class="gradient-box p-6 rounded-xl feature-card text-center">
                    <i class="fas fa-mobile-alt text-5xl text-primary mb-4"></i>
                    <h3 class="text-lg font-bold text-white">React Native</h3>
                    <p class="text-gray-400 text-sm">Mobile Development</p>
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
