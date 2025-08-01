{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Đàm Nhân Kiệt')</title>
    {{-- THÊM MỚI CÁC THẺ META SEO --}}
    <meta name="description" content="@yield('meta_description', 'Website cá nhân của Đàm Nhân Kiệt, nơi chia sẻ kiến thức về lập trình, tư vấn Thủy Lợi và luận giải Tử Vi.')">
    
    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Đàm Nhân Kiệt')">
    <meta property="og:description" content="@yield('meta_description', 'Website cá nhân của Đàm Nhân Kiệt...')">
    <meta property="og:image" content="@yield('meta_image', asset('storage/avatar.jpeg'))"> {{-- Tạo 1 ảnh đại diện mặc định --}}

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Đàm Nhân Kiệt')">
    <meta property="twitter:description" content="@yield('meta_description', 'Website cá nhân của Đàm Nhân Kiệt...')">
    <meta property="twitter:image" content="@yield('meta_image', asset('storage/avatar.jpeg'))">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #A4FF63; --primary-dark: #85D44F; --dark: #0A0A0A; --darker: #010101; --light: #F5F5F5; --gray: #1E1E1E;
        }
        body {
            font-family: 'Inter', sans-serif; background-color: var(--dark); color: white; overflow-x: hidden; scroll-behavior: smooth; transition: background-color 0.5s, color 0.5s;
        }
        .text-primary { color: var(--primary); }
        .hero-title { line-height: 1.1; letter-spacing: -0.05em; }
        .glow-text { text-shadow: 0 0 10px rgba(164, 255, 99, 0.7); }
        .glow-box { box-shadow: 0 0 20px rgba(164, 255, 99, 0.3); }
        .gradient-box { background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(1, 1, 1, 0.9)); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(164, 255, 99, 0.1); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3); transition: background 0.5s, border-color 0.5s; }
        .primary-border { position: relative; }
        .primary-border::after { content: ''; position: absolute; inset: 0; border-radius: inherit; padding: 2px; background: linear-gradient(45deg, var(--primary), rgba(164, 255, 99, 0.3)); -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); mask-composite: exclude; pointer-events: none; transition: background 0.5s; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-15px); } }
        .floating { animation: float 6s ease-in-out infinite; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(164, 255, 99, 0.7); } 70% { box-shadow: 0 0 0 15px rgba(164, 255, 99, 0); } 100% { box-shadow: 0 0 0 0 rgba(164, 255, 99, 0); } }
        .pulse { animation: pulse 2s infinite; }
        .scrolling-text { animation: scrollText 40s linear infinite; white-space: nowrap; }
        @keyframes scrollText { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .gradient-mask { mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); }
        .gradient-text { background: linear-gradient(90deg, var(--primary), #B0FF7D); -webkit-background-clip: text; background-clip: text; color: transparent; transition: background 0.5s; }
        .grid-pattern { background-image: linear-gradient(rgba(164, 255, 99, 0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(164, 255, 99, 0.05) 1px, transparent 1px); transition: background-image 0.5s; }
        .animated-blob { position: absolute; border-radius: 50%; filter: blur(40px); opacity: 0.2; animation: blob-move 15s infinite alternate; }
        @keyframes blob-move { 0%, 100% { transform: translate(0%, 0%); } 25% { transform: translate(10%, -15%); } 50% { transform: translate(5%, 10%); } 75% { transform: translate(-10%, 5%); } }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(164, 255, 99, 0.2); }
        .feature-card { transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); }
        .primary-underline { position: relative; display: inline-block; }
        .primary-underline::after { content: ''; position: absolute; width: 100%; height: 3px; bottom: -5px; left: 0; background: linear-gradient(90deg, var(--primary), transparent); transform: scaleX(0); transform-origin: left; transition: transform 0.3s, background 0.5s; }
        .primary-underline:hover::after { transform: scaleX(1); }
        .btn-primary { background-color: var(--primary); color: var(--dark); font-weight: 700; position: relative; overflow: hidden; z-index: 1; transition: all 0.3s ease; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(164, 255, 99, 0.3); }
        .btn-primary::before { content: ''; position: absolute; top: 0; left: 0; width: 0; height: 100%; background-color: rgba(255, 255, 255, 0.1); transition: all 0.3s ease; z-index: -1; }
        .btn-primary:hover::before { width: 100%; }
        .btn-secondary { background-color: transparent; border: 2px solid var(--primary); color: var(--primary); font-weight: 700; position: relative; overflow: hidden; z-index: 1; transition: all 0.3s ease; }
        .btn-secondary:hover { color: var(--dark); transform: translateY(-2px); }
        .btn-secondary::before { content: ''; position: absolute; top: 0; left: 0; width: 0; height: 100%; background-color: var(--primary); transition: all 0.3s ease; z-index: -1; }
        .btn-secondary:hover::before { width: 100%; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--darker); }
        ::-webkit-scrollbar-thumb { background: var(--primary); border-radius: 4px; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fade-in { animation: fadeIn 0.6s ease forwards; }
        
        {{-- CSS CHO HIỆU ỨNG CHUỘT (THÊM MỚI) --}}
        .sparkle {
            position: fixed;
            width: 5px; height: 5px;
            background-color: var(--primary); border-radius: 50%;
            pointer-events: none; z-index: 9999;
            opacity: 0; box-shadow: 0 0 10px var(--primary);
        }

        /* Light Mode Styles */
        body.light-mode {
            --primary: #2563EB; --primary-dark: #1D4ED8; --dark: #FFFFFF; --darker: #F9FAFB; --light: #F5F5F5; --gray: #E5E7EB; color: #111827;
        }
        body.light-mode .gradient-text { background: linear-gradient(90deg, var(--primary), #3B82F6); -webkit-background-clip: text; background-clip: text; color: transparent; }
        body.light-mode .gradient-box { background: linear-gradient(135deg, rgba(255, 255, 255, 0.8), rgba(249, 250, 251, 0.9)); border-color: rgba(0, 0, 0, 0.1); box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1); }
        body.light-mode .text-gray-300, body.light-mode .text-gray-400, body.light-mode .text-gray-500 { color: #4B5563; }
        body.light-mode .text-white { color: #1F2937; }
        body.light-mode .btn-primary { color: #FFFFFF; }
        body.light-mode nav, body.light-mode footer, body.light-mode #mobile-menu { background-color: rgba(255, 255, 255, 0.7); border-color: #E5E7EB; }
        body.light-mode .bg-black\/30 { background-color: rgba(243, 244, 246, 0.5); }
        body.light-mode .bg-gradient-to-b.from-black.to-gray-900 { background: linear-gradient(to bottom, #FFFFFF, #F9FAFB); }
        body.light-mode .bg-gradient-to-b.from-gray-900.to-black { background: linear-gradient(to bottom, #F9FAFB, #FFFFFF); }
        body.light-mode .bg-gradient-to-r.from-black.to-gray-900 { background: linear-gradient(to right, #FFFFFF, #F9FAFB); }
        body.light-mode .bg-gray-900 { background-color: #F3F4F6; }
        body.light-mode a.hover\:text-primary:hover { color: var(--primary-dark); }
        body.light-mode .btn-secondary:hover { color: white; }
        body.light-mode ::-webkit-scrollbar-track { background: #E5E7EB; }
        body.light-mode ::-webkit-scrollbar-thumb { background: var(--primary-dark); }
        body.light-mode .grid-pattern { background-image: linear-gradient(rgba(107, 114, 128, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(107, 114, 128, 0.1) 1px, transparent 1px); }
        body.light-mode .border-gray-800 { border-color: #E5E7EB; }
        body.light-mode .primary-border::after { background: linear-gradient(45deg, var(--primary), rgba(59, 130, 246, 0.3)); }
        body.light-mode .feature-card:hover { box-shadow: 0 15px 30px rgba(59, 130, 246, 0.2); }

        /* Prose Custom Styles for Markdown Content */
        .prose-custom {
            color: #E5E7EB;
            line-height: 1.75;
        }
        .prose-custom h1, .prose-custom h2, .prose-custom h3, .prose-custom h4, .prose-custom h5, .prose-custom h6 {
            color: #FFFFFF;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        .prose-custom h1 { font-size: 2.25rem; }
        .prose-custom h2 { font-size: 1.875rem; }
        .prose-custom h3 { font-size: 1.5rem; }
        .prose-custom h4 { font-size: 1.25rem; }
        .prose-custom p {
            margin-bottom: 1.5rem;
            color: #D1D5DB;
        }
        .prose-custom ul, .prose-custom ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        .prose-custom li {
            margin-bottom: 0.5rem;
            color: #D1D5DB;
        }
        .prose-custom blockquote {
            border-left: 4px solid var(--primary);
            padding-left: 1rem;
            margin: 1.5rem 0;
            font-style: italic;
            color: #9CA3AF;
            background-color: rgba(164, 255, 99, 0.05);
        }
        .prose-custom hr {
            border: none;
            height: 1px;
            background-color: #374151;
            margin: 2rem 0;
        }
        .prose-custom code {
            background-color: rgba(164, 255, 99, 0.1);
            color: var(--primary);
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
        }
        .prose-custom pre {
            background-color: #1F2937;
            border: 1px solid #374151;
            border-radius: 0.5rem;
            padding: 1rem;
            overflow-x: auto;
            margin: 1.5rem 0;
        }
        .prose-custom pre code {
            background-color: transparent;
            color: #E5E7EB;
            padding: 0;
        }
        .prose-custom a {
            color: var(--primary);
            text-decoration: underline;
            text-decoration-color: rgba(164, 255, 99, 0.3);
        }
        .prose-custom a:hover {
            color: #B0FF7D;
            text-decoration-color: var(--primary);
        }
        .prose-custom strong {
            color: #FFFFFF;
            font-weight: 700;
        }
        .prose-custom em {
            color: #9CA3AF;
        }
        .prose-custom img {
            border-radius: 0.5rem;
            margin: 1.5rem auto;
            max-width: 100%;
            height: auto;
            display: block;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s ease-in-out;
        }
        .prose-custom img:hover {
            transform: scale(1.02);
        }
        
        /* Styling for HTML content */
        .prose-custom div {
            margin-bottom: 1rem;
        }
        .prose-custom div[style*="text-align: center"] {
            text-align: center;
        }
        .prose-custom div[style*="text-align: left"] {
            text-align: left;
        }
        .prose-custom div[style*="text-align: right"] {
            text-align: right;
        }
        .prose-custom div strong {
            color: #FFFFFF;
            font-weight: 700;
            display: block;
            margin-top: 0.5rem;
            text-align: center;
        }
        .prose-custom div[style*="margin"] {
            margin: 1.5rem 0;
        }
        /* Đảm bảo ảnh trong div căn giữa được căn giữa */
        .prose-custom div[style*="text-align: center"] img {
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Styling for video iframes */
        .prose-custom div[style*="text-align: center"] iframe {
            margin-left: auto;
            margin-right: auto;
        }
        .prose-custom table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }
        .prose-custom th, .prose-custom td {
            border: 1px solid #374151;
            padding: 0.75rem;
            text-align: left;
        }
        .prose-custom th {
            background-color: #374151;
            color: #FFFFFF;
            font-weight: 600;
        }
        .prose-custom td {
            color: #D1D5DB;
        }

        /* Light mode styles for prose */
        body.light-mode .prose-custom {
            color: #374151;
        }
        body.light-mode .prose-custom h1, body.light-mode .prose-custom h2, body.light-mode .prose-custom h3, 
        body.light-mode .prose-custom h4, body.light-mode .prose-custom h5, body.light-mode .prose-custom h6 {
            color: #1F2937;
        }
        body.light-mode .prose-custom p, body.light-mode .prose-custom li {
            color: #4B5563;
        }
        body.light-mode .prose-custom blockquote {
            color: #6B7280;
            border-left-color: var(--primary);
        }
        body.light-mode .prose-custom pre {
            background-color: #F3F4F6;
            border-color: #D1D5DB;
        }
        body.light-mode .prose-custom pre code {
            color: #374151;
        }
        body.light-mode .prose-custom th {
            background-color: #F3F4F6;
            color: #1F2937;
        }
        body.light-mode .prose-custom td {
            color: #4B5563;
        }
        body.light-mode .prose-custom strong {
            color: #1F2937;
        }
        body.light-mode .prose-custom em {
            color: #6B7280;
        }
        body.light-mode .prose-custom div strong {
            color: #1F2937;
        }
        body.light-mode .prose-custom img {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin-left: auto;
            margin-right: auto;
        }
        body.light-mode .prose-custom div[style*="text-align: center"] img {
            margin-left: auto;
            margin-right: auto;
        }
        body.light-mode .prose-custom iframe {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin-left: auto;
            margin-right: auto;
        }
        body.light-mode .prose-custom hr {
            border-color: #E5E7EB;
            background-color: #E5E7EB;
        }
        body.light-mode .prose-custom blockquote {
            border-left-color: var(--primary);
            background-color: #F9FAFB;
        }

        /* Theme Switcher */
        #theme-toggle-container { background-color: var(--gray); border: 1px solid #4a4a4a; border-radius: 9999px; padding: 4px; display: flex; align-items: center; gap: 8px; cursor: pointer; transition: all 0.3s; }
        body.light-mode #theme-toggle-container { background-color: #E5E7EB; border-color: #D1D5DB; color: #1F2937; }
        #theme-toggle { width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s; color: #f5f5f5; }
        body.light-mode #theme-toggle { color: #1F2937; }
        #theme-toggle .fa-sun { display: none; }
        #theme-toggle .fa-moon { display: block; }
        body.light-mode #theme-toggle .fa-sun { display: block; }
        body.light-mode #theme-toggle .fa-moon { display: none; }
        #theme-toggle-text { padding-right: 8px; font-size: 12px; font-weight: 600; white-space: nowrap; }
    </style>
</head>
<body class="grid-pattern">
    <!-- Animated background elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="animated-blob w-96 h-96 bg-primary -left-20 -top-20 opacity-10" style="animation-delay: 0s;"></div>
        <div class="animated-blob w-80 h-80 bg-purple-500 top-1/4 -right-40 opacity-10" style="animation-delay: 2s;"></div>
        <div class="animated-blob w-96 h-96 bg-teal-500 bottom-0 left-1/2 opacity-10" style="animation-delay: 4s;"></div>
    </div>

    @if(request()->routeIs('*.show'))
        @include('partials.navigation-detail')
    @else
        @include('partials.navigation-home')
    @endif

    <main class="relative z-10">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // === DARK/LIGHT MODE LOGIC ===
        const themeToggleContainer = document.getElementById('theme-toggle-container');
        if (themeToggleContainer) {
            const themeToggleText = document.getElementById('theme-toggle-text');
            function updateThemeUI() {
                if (document.body.classList.contains('light-mode')) {
                    themeToggleText.textContent = 'Light Mode';
                } else {
                    themeToggleText.textContent = 'Dark Mode';
                }
            }
            if (localStorage.getItem('theme') === 'light') {
                document.body.classList.add('light-mode');
            }
            updateThemeUI();
            themeToggleContainer.addEventListener('click', () => {
                document.body.classList.toggle('light-mode');
                if (document.body.classList.contains('light-mode')) {
                    localStorage.setItem('theme', 'light');
                } else {
                    localStorage.removeItem('theme');
                }
                updateThemeUI();
            });
        }
        
        // === SMOOTH SCROLLING FOR ANCHOR LINKS ===
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // === SET CURRENT YEAR IN FOOTER ===
        const currentYearEl = document.getElementById('current-year');
        if(currentYearEl) {
            currentYearEl.textContent = new Date().getFullYear();
        }

        // === MOBILE MENU ===
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // === SPARKLE EFFECT ON MOUSE MOVE (THÊM MỚI - HOẠT ĐỘNG TRÊN CẢ 2 CHẾ ĐỘ) ===
        document.addEventListener('mousemove', function(e) {
            // Chỉ chạy hiệu ứng trên trang chủ
            if (!document.querySelector('#home')) {
                return;
            }
            
            const sparkle = document.createElement('div');
            sparkle.className = 'sparkle';
            document.body.appendChild(sparkle);
            
            sparkle.style.left = e.clientX + 'px';
            sparkle.style.top = e.clientY + 'px';
            
            sparkle.animate([
                { opacity: 1, transform: 'scale(1) translate(-50%, -50%)' },
                { opacity: 0, transform: `scale(2) translate(${Math.random()*100-50}px, ${Math.random()*100-50}px)` }
            ], {
                duration: 800,
                easing: 'ease-out'
            });
            
            setTimeout(() => {
                sparkle.remove();
            }, 800);
        });
    </script>
</body>
</html>