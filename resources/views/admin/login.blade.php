<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#F7F9F8]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Fetan Equb Portal</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo-icon.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased text-[#444B48] flex items-center justify-center p-4 selection:bg-[#20BF78] selection:text-white">

    <div class="w-full max-w-md">
        <!-- Brand Logo Header -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 mb-4 group">
                <img src="{{ asset('images/logo-light.jpg') }}" alt="Fetan Equb" class="h-12 w-auto object-contain rounded-lg shadow-xs group-hover:scale-105 transition-transform">
            </a>
            <h1 class="text-2xl font-extrabold text-[#111111] tracking-tight">Administrative Console</h1>
            <p class="text-xs text-[#444B48] mt-1">
                Secure access for Fetan Equb customer support and operations desk
            </p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-3xl border border-[#E5EAE7] shadow-xl p-8 space-y-6">

            <!-- Alerts -->
            @if(session('success'))
                <div class="p-3.5 rounded-xl bg-[#EAFBF2] border border-[#20BF78]/40 text-xs font-semibold text-[#15965C] flex items-center gap-2">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="p-3.5 rounded-xl bg-red-50 border border-red-200 text-xs font-semibold text-red-700 space-y-1">
                    @foreach($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-bold text-[#111111] uppercase tracking-wider mb-1.5">
                        Administrator Email
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        required 
                        autocomplete="email"
                        value="{{ old('email', 'admin@fetanequb.com') }}" 
                        placeholder="admin@fetanequb.com"
                        class="w-full px-4 py-3 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] focus:bg-white text-sm transition-all"
                    >
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-xs font-bold text-[#111111] uppercase tracking-wider">
                            Password
                        </label>
                        <span class="text-[11px] text-[#15965C] font-semibold">Protected Portal</span>
                    </div>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        required 
                        autocomplete="current-password"
                        placeholder="••••••••••••"
                        class="w-full px-4 py-3 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] focus:bg-white text-sm transition-all"
                    >
                </div>

                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-[#20BF78] focus:ring-[#20BF78] border-[#E5EAE7]">
                        <span class="text-[#444B48] font-medium">Keep me signed in</span>
                    </label>
                </div>

                <button 
                    type="submit" 
                    class="w-full py-3.5 px-4 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-extrabold text-sm shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 cursor-pointer"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    <span>Sign In to Admin Console</span>
                </button>
            </form>

            <!-- Quick Demo Credentials Box -->
            <div class="pt-4 border-t border-[#E5EAE7] bg-[#F7F9F8] p-3.5 rounded-2xl text-[11px] text-[#444B48] space-y-1">
                <div class="font-bold text-[#111111] flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-[#20BF78]"></span>
                    <span>Default Administrator Access:</span>
                </div>
                <div class="flex justify-between font-mono text-[11px] text-[#111111]">
                    <span>Email: <strong>admin@fetanequb.com</strong></span>
                    <span>Pass: <strong>password123</strong></span>
                </div>
            </div>
        </div>

        <!-- Back to Website Link -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-xs font-semibold text-[#444B48] hover:text-[#20BF78] inline-flex items-center gap-1.5 transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                <span>Return to Fetan Equb Homepage</span>
            </a>
        </div>
    </div>

</body>
</html>
