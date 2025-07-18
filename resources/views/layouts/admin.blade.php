<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    
    {{-- 1. DÁN API KEY CỦA BẠN VÀO ĐÂY --}}
    <script src="https://cdn.tiny.cloud/1/xu86r09wuf41udcyakvrdji942bddatdznr2hp7tscswau2k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root { --primary: #A4FF63; --primary-dark: #85D44F; --dark: #0A0A0A; --darker: #010101; --light: #F5F5F5; --gray: #1E1E1E; }
        body { font-family: 'Inter', sans-serif; background-color: var(--dark); color: white; transition: background-color 0.5s, color 0.5s; }
        .text-primary { color: var(--primary); }
        .gradient-box { background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(1, 1, 1, 0.9)); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(164, 255, 99, 0.1); transition: background 0.5s, border-color 0.5s; }
        .gradient-text { background: linear-gradient(90deg, var(--primary), #B0FF7D); -webkit-background-clip: text; background-clip: text; color: transparent; transition: background 0.5s; }
        .btn-primary { background-color: var(--primary); color: var(--dark); font-weight: 700; transition: all 0.3s ease; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(164, 255, 99, 0.2); }
        .btn-secondary { background-color: var(--gray); color: var(--light); font-weight: 700; transition: all 0.3s ease; }
        .btn-secondary:hover { background-color: #333; transform: translateY(-2px); }
        .btn-danger { background-color: #EF4444; color: white; font-weight: 700; transition: all 0.3s ease; }
        .btn-danger:hover { background-color: #DC2626; transform: translateY(-2px); }
        .sidebar-link.active { background-color: var(--primary); color: var(--dark) !important; }
        .sidebar-link.active i { color: var(--dark); }
        .form-input, .form-select { width: 100%; background-color: var(--gray); border: 1px solid #333; color: white; padding: 10px; border-radius: 6px; margin-top: 5px; transition: border-color 0.3s; }
        .form-input:focus, .form-select:focus { border-color: var(--primary); outline: none; }
        .admin-table { width: 100%; border-collapse: collapse; }
        .admin-table th, .admin-table td { padding: 12px 15px; text-align: left; border-bottom: 1px solid var(--gray); }
        .admin-table th { background-color: var(--darker); font-weight: 600; }
        .admin-table tbody tr:hover { background-color: var(--gray); }
        /* Light Mode Styles */
        body.light-mode { --primary: #2563EB; --primary-dark: #1D4ED8; --dark: #F9FAFB; --darker: #F3F4F6; --light: #F5F5F5; --gray: #E5E7EB; color: #111827; }
        body.light-mode .gradient-text { background: linear-gradient(90deg, var(--primary), #3B82F6); -webkit-background-clip: text; background-clip: text; color: transparent; }
        body.light-mode .gradient-box { background: #FFFFFF; border-color: #E5E7EB; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06); }
        body.light-mode .text-white { color: #1F2937; }
        body.light-mode .text-gray-400 { color: #6B7280; }
        body.light-mode .btn-primary { color: #FFFFFF; }
        body.light-mode .btn-secondary { background-color: #E5E7EB; color: #374151; }
        body.light-mode .btn-secondary:hover { background-color: #D1D5DB; }
        body.light-mode .sidebar-link { color: #374151; }
        body.light-mode .sidebar-link.active { background-color: var(--primary); color: white !important; }
        body.light-mode .sidebar-link.active i { color: white; }
        body.light-mode .form-input, body.light-mode .form-select { background-color: #F3F4F6; border-color: #D1D5DB; color: #111827; }
        body.light-mode .admin-table th, body.light-mode .admin-table td { border-color: #E5E7EB; }
        body.light-mode .admin-table th { background-color: #F9FAFB; }
        body.light-mode .admin-table tbody tr:hover { background-color: #F3F4F6; }
    </style>
</head>
<body class="h-screen overflow-hidden">
    <div class="flex h-full">
        <!-- Sidebar -->
        <aside class="w-64 gradient-box flex-shrink-0 flex flex-col p-4 overflow-y-auto">
            <div class="flex items-center gap-3 mb-8 px-2">
                <i class="fas fa-user-circle text-primary text-2xl"></i>
                <span class="text-xl font-bold text-white">Admin Panel</span>
            </div>
            <nav class="flex-grow">
                <ul class="space-y-2">
                    <li><a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 transition-colors {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt fa-fw"></i><span>Dashboard</span></a></li>
                    <li><a href="{{ route('admin.projects.index') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 transition-colors {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}"><i class="fas fa-project-diagram fa-fw"></i><span>Quản lý Dự án</span></a></li>
                    <li><a href="{{ route('admin.posts.index') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700 transition-colors {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}"><i class="fas fa-newspaper fa-fw"></i><span>Quản lý Blog</span></a></li>
                </ul>
            </nav>
            <div class="mt-auto pt-4">
                <div id="theme-toggle-container" class="mb-4 flex justify-center cursor-pointer bg-gray-700/50 rounded-lg">
                    <button id="theme-toggle" aria-label="Toggle theme" class="w-full py-2 flex items-center justify-center gap-2"><i class="fas fa-sun"></i><i class="fas fa-moon"></i><span id="theme-toggle-text"></span></button>
                </div>
                <!-- Logout Form -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); this.closest('form').submit();"
                       class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-400 hover:bg-red-500 hover:text-white transition-colors">
                       <i class="fas fa-sign-out-alt fa-fw"></i>
                       <span>Đăng xuất</span>
                    </a>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            @yield('content')
        </main>
    </div>

    <script>
        // === THEME TOGGLE LOGIC ===
        const themeToggleContainer = document.getElementById('theme-toggle-container');
        if (themeToggleContainer) {
            const themeToggleText = document.getElementById('theme-toggle-text');
            function updateThemeUI() { document.body.classList.contains('light-mode') ? themeToggleText.textContent = 'Light' : themeToggleText.textContent = 'Dark'; }
            if (localStorage.getItem('theme') === 'light') { document.body.classList.add('light-mode'); }
            updateThemeUI();
            themeToggleContainer.addEventListener('click', () => {
                document.body.classList.toggle('light-mode');
                localStorage.setItem('theme', document.body.classList.contains('light-mode') ? 'light' : 'dark');
                updateThemeUI();
            });
        }
    </script>
    
    {{-- 2. ĐÂY LÀ DÒNG MÃ QUAN TRỌNG ĐỂ KÍCH HOẠT TINYMCE --}}
    @stack('scripts')
</body>
</html>