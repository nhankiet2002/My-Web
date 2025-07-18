<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Quản trị</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0A0A0A; color: white; }
        .form-input { background-color: #1E1E1E; border: 1px solid #333; }
        .form-input:focus { border-color: #A4FF63; outline: none; }
        .btn-primary { background-color: #A4FF63; color: #0A0A0A; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-8 bg-[#1E1E1E]/50 rounded-xl shadow-lg border border-gray-800 backdrop-blur-sm">
        <div>
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-white">
                Đăng nhập Bảng điều khiển
            </h2>
        </div>
        <form class="mt-8 space-y-6" action="/login" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Địa chỉ Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                           class="form-input appearance-none rounded-none relative block w-full px-3 py-2 placeholder-gray-500 rounded-t-md focus:z-10 sm:text-sm"
                           placeholder="Địa chỉ Email" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="password" class="sr-only">Mật khẩu</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="form-input appearance-none rounded-none relative block w-full px-3 py-2 placeholder-gray-500 rounded-b-md focus:z-10 sm:text-sm"
                           placeholder="Mật khẩu">
                </div>
            </div>

            @if ($errors->any())
                <div class="text-red-500 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-md btn-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-green-500">
                    Đăng nhập
                </button>
            </div>
        </form>
    </div>
</body>
</html>