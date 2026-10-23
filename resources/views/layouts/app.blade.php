<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Fetan Equb | The First Open-Line Equb in the World')</title>
    <meta name="description" content="Join anytime. Exit anytime. See your exact payout date. No lottery. No last person. Patent Protected ET UM 1170B1. Dolce Technologies One Member PLC.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Ethiopic:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon using official icon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo-icon.jpg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-white text-[#444B48] font-sans antialiased selection:bg-[#20BF78] selection:text-white flex flex-col min-h-screen">

    <!-- Top Announcement Strip (Soft Gray, Minimalist) -->
    <div class="bg-[#F7F9F8] border-b border-[#E5EAE7] py-2 px-4 text-xs font-medium text-[#444B48]">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-[#EAFBF2] text-[#15965C] border border-[#20BF78]/30">
                    ETHIOPIAN PATENT
                </span>
                <span class="text-[#444B48] font-medium">Patent No. ET UM 1170B1 • INSA Certified • NBE Cleared</span>
                <span class="text-[#E5EAE7] hidden sm:inline">|</span>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="text-[#15965C] hover:text-[#20BF78] hidden sm:inline-flex items-center gap-1 font-semibold transition-colors">
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>Google Play App (DUNS: 764070770)</span>
                </a>
            </div>
            <div class="flex items-center gap-4">
                <!-- Admin Portal Quick Link in Top Strip -->
                <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-1.5 text-[11px] font-bold text-[#111111] hover:text-[#15965C] px-2.5 py-0.5 rounded-full bg-white border border-[#E5EAE7] shadow-xs hover:border-[#20BF78] transition-all">
                    <span>🔐</span>
                    <span>Admin Portal</span>
                </a>
                <span class="text-[#E5EAE7] hidden sm:inline">|</span>
                <a href="tel:+251911287374" class="hover:text-[#20BF78] transition-colors flex items-center gap-1.5 text-[#444B48]">
                    <svg class="w-3.5 h-3.5 text-[#20BF78]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>+251911287374</span>
                </a>
                <span class="text-[#E5EAE7]">|</span>
                <!-- Language Switcher -->
                <div class="flex items-center gap-1 bg-white rounded-full p-0.5 border border-[#E5EAE7]">
                    <a href="{{ route('switch-language', 'en') }}" class="px-2 py-0.5 rounded-full text-[11px] font-bold transition-all {{ app()->getLocale() === 'en' ? 'bg-[#20BF78] text-white shadow-xs' : 'text-[#444B48] hover:text-[#111111]' }}">
                        EN
                    </a>
                    <a href="{{ route('switch-language', 'am') }}" class="px-2 py-0.5 rounded-full text-[11px] font-bold transition-all {{ app()->getLocale() === 'am' ? 'bg-[#20BF78] text-white shadow-xs' : 'text-[#444B48] hover:text-[#111111]' }}">
                        አማርኛ
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar (Clean White Background, Premium Sticky) -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-white/95 border-b border-[#E5EAE7] transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand / Logo (Using Actual Fetan Equb Logo) -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo-light.jpg') }}" alt="Fetan Equb" class="h-11 w-auto object-contain rounded-md">
                    <div class="hidden sm:block">
                        <div class="text-xs font-semibold text-[#15965C] tracking-wide uppercase">Open-Line Equb</div>
                        <div class="text-[10px] text-[#444B48] tracking-tight">Patent No. ET UM 1170B1</div>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('home') ? 'text-[#20BF78] font-bold' : 'text-[#111111] hover:text-[#20BF78]' }}">
                        Home
                    </a>
                    <a href="{{ route('how-it-works') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('how-it-works') ? 'text-[#20BF78] font-bold' : 'text-[#111111] hover:text-[#20BF78]' }}">
                        How It Works
                    </a>
                    <a href="{{ route('asset-equbs') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('asset-equbs') ? 'text-[#20BF78] font-bold' : 'text-[#111111] hover:text-[#20BF78]' }}">
                        Asset Equbs
                    </a>
                    <a href="{{ route('platinum') }}" class="text-sm font-semibold transition-colors flex items-center gap-1.5 {{ request()->routeIs('platinum') ? 'text-[#20BF78] font-bold' : 'text-[#111111] hover:text-[#20BF78]' }}">
                        <span>Platinum</span>
                        <span class="px-1.5 py-0.2 rounded text-[10px] font-bold bg-[#EAFBF2] text-[#15965C] border border-[#20BF78]/40 uppercase">VIP</span>
                    </a>
                    <a href="{{ route('home') }}#trust-security" class="text-sm font-semibold transition-colors text-[#111111] hover:text-[#20BF78]">
                        Trust & Security
                    </a>
                    <a href="{{ route('contact') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('contact') ? 'text-[#20BF78] font-bold' : 'text-[#111111] hover:text-[#20BF78]' }}">
                        Contact
                    </a>
                    <a href="{{ route('admin.dashboard') }}" class="text-xs font-bold transition-all flex items-center gap-1.5 px-3 py-1.5 rounded-xl border border-[#E5EAE7] bg-[#F7F9F8] text-[#111111] hover:border-[#20BF78] hover:bg-[#EAFBF2] hover:text-[#15965C] shadow-2xs">
                        <span>🔐</span>
                        <span>Admin Portal</span>
                    </a>
                </nav>

                <!-- Primary CTA Button -->
                <div class="hidden sm:flex items-center gap-3">
                    <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl font-bold text-sm text-white bg-[#20BF78] hover:bg-[#15965C] shadow-sm hover:shadow transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                        <span>Start Your Equb Today</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center gap-2">
                    <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="px-3 py-1.5 rounded-lg text-xs font-bold text-white bg-[#20BF78] hover:bg-[#15965C] flex items-center gap-1">
                        <span>Start Today</span>
                    </a>
                    <button id="mobileMenuToggle" class="p-2 rounded-lg bg-[#F7F9F8] text-[#111111] hover:bg-[#E5EAE7] transition-colors" aria-label="Toggle Navigation Menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-[#E5EAE7] bg-white px-4 pt-3 pb-6 space-y-3 shadow-lg">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('home') ? 'bg-[#EAFBF2] text-[#15965C]' : 'text-[#111111] hover:bg-[#F7F9F8]' }}">Home</a>
            <a href="{{ route('how-it-works') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('how-it-works') ? 'bg-[#EAFBF2] text-[#15965C]' : 'text-[#111111] hover:bg-[#F7F9F8]' }}">How It Works</a>
            <a href="{{ route('asset-equbs') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('asset-equbs') ? 'bg-[#EAFBF2] text-[#15965C]' : 'text-[#111111] hover:bg-[#F7F9F8]' }}">Asset Equbs</a>
            <a href="{{ route('platinum') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('platinum') ? 'bg-[#EAFBF2] text-[#15965C]' : 'text-[#111111] hover:bg-[#F7F9F8]' }}">Platinum (VIP)</a>
            <a href="{{ route('home') }}#trust-security" class="block px-3 py-2 rounded-lg text-base font-semibold text-[#111111] hover:bg-[#F7F9F8]">Trust & Security</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('contact') ? 'bg-[#EAFBF2] text-[#15965C]' : 'text-[#111111] hover:bg-[#F7F9F8]' }}">Contact</a>
            <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2.5 rounded-xl text-base font-bold text-[#15965C] bg-[#EAFBF2] border border-[#20BF78]/40 flex items-center justify-between">
                <span class="flex items-center gap-2">
                    <span>🔐</span>
                    <span>Admin Operations Console</span>
                </span>
                <span class="text-xs bg-[#20BF78] text-white px-2 py-0.5 rounded-full font-bold">Desk</span>
            </a>
            <div class="pt-2 border-t border-[#E5EAE7] flex justify-between items-center">
                <span class="text-xs text-[#444B48]">Language / ቋንቋ:</span>
                <div class="flex items-center gap-2">
                    <a href="{{ route('switch-language', 'en') }}" class="px-3 py-1 rounded text-xs font-bold {{ app()->getLocale() === 'en' ? 'bg-[#20BF78] text-white' : 'bg-[#F7F9F8] text-[#111111]' }}">English</a>
                    <a href="{{ route('switch-language', 'am') }}" class="px-3 py-1 rounded text-xs font-bold {{ app()->getLocale() === 'am' ? 'bg-[#20BF78] text-white' : 'bg-[#F7F9F8] text-[#111111]' }}">አማርኛ</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Official Footer (Primary Black #111111, Pure White Text, Emerald Accents) -->
    <footer class="bg-[#111111] border-t border-white/10 pt-16 pb-12 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
                <!-- Col 1: Company Profile (Using Actual Dark Logo) -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logo-dark.jpg') }}" alt="Fetan Equb" class="h-12 w-auto object-contain rounded-md">
                        <div>
                            <div class="text-lg font-extrabold text-white">FETAN <span class="text-[#20BF78]">EQUB</span></div>
                            <div class="text-xs text-slate-400 font-medium">Trading as Fetan Equb Technologies</div>
                        </div>
                    </div>

                    <p class="text-sm text-slate-400 leading-relaxed max-w-md">
                        Fetan Equb operates as a secure technology platform. Funds are held in a segregated custodial account with our partner commercial banking institution.
                    </p>

                    <div class="space-y-1.5 text-xs text-slate-400 pt-2 border-t border-white/10">
                        <div class="font-semibold text-white">
                            {{ app()->getLocale() === 'am' ? 'ዶልቼ ቴክኖሎጂስ የአንድ አባል ኃ/የተ/የግ/ማህበር' : 'Dolce Technologies One Member PLC' }}
                        </div>
                        <div>
                            {{ app()->getLocale() === 'am' ? 'አዲስ አበባ፣ ቂርቆስ ክፍለ ከተማ፣ ወረዳ 01፣ የቤት ቁጥር 10' : 'Addis Ababa, Kirkos Sub-city, Woreda 01, House No. 10' }}
                        </div>
                        <div class="flex flex-wrap gap-x-4 gap-y-1 text-[#20BF78]">
                            <span>TIN: 0104256231</span>
                            <span>•</span>
                            <span>Business License: AACATB/14/706/50187949/2018</span>
                        </div>
                        <div class="text-white font-medium">Granted Patent No. ET UM 1170B1 (FDRE)</div>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-[#20BF78] pl-2">Navigation</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-[#20BF78] transition-colors">Home</a></li>
                        <li><a href="{{ route('how-it-works') }}" class="hover:text-[#20BF78] transition-colors">How It Works</a></li>
                        <li><a href="{{ route('asset-equbs') }}" class="hover:text-[#20BF78] transition-colors">Asset Equbs</a></li>
                        <li><a href="{{ route('platinum') }}" class="hover:text-[#20BF78] transition-colors flex items-center gap-1.5">
                            <span>Platinum</span>
                            <span class="px-1 py-0.2 rounded text-[9px] bg-[#20BF78] text-[#111111] font-bold">VIP</span>
                        </a></li>
                        <li><a href="{{ route('home') }}#trust-security" class="hover:text-[#20BF78] transition-colors">Trust & Security</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-[#20BF78] transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Legal & Trust -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-[#15965C] pl-2">Legal & Trust</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('terms') }}" class="hover:text-[#20BF78] transition-colors">Terms of Service</a></li>
                        <li><a href="{{ route('privacy') }}" class="hover:text-[#20BF78] transition-colors">Privacy Policy</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-[#20BF78] transition-colors">Frequently Asked Questions</a></li>
                        <li><a href="{{ route('admin.dashboard') }}" class="text-[#20BF78] hover:underline transition-colors flex items-center gap-1.5 font-semibold"><span>🔐</span> Admin Portal</a></li>
                        <li><span class="text-xs text-slate-400">INSA Certified Compliance</span></li>
                        <li><span class="text-xs text-slate-400">National Bank Cleared</span></li>
                        <li><span class="text-xs text-slate-400">DUNS: 764070770</span></li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Channels -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-[#20BF78] pl-2">Contact Us</h4>
                    <div class="space-y-3 text-sm">
                        <a href="tel:+251911287374" class="flex items-center gap-2.5 text-slate-300 hover:text-[#20BF78] transition-colors">
                            <span class="p-2 rounded-lg bg-white/5 border border-white/10 text-[#20BF78]">📞</span>
                            <span>+251911287374</span>
                        </a>
                        <a href="mailto:fetanequb@gmail.com" class="flex items-center gap-2.5 text-slate-300 hover:text-[#20BF78] transition-colors">
                            <span class="p-2 rounded-lg bg-white/5 border border-white/10 text-[#20BF78]">📧</span>
                            <span>fetanequb@gmail.com</span>
                        </a>
                        <div class="pt-2">
                            <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full py-2.5 px-3 rounded-lg bg-white/10 hover:bg-[#20BF78] hover:text-[#111111] border border-white/20 flex items-center justify-center gap-2 text-xs font-bold text-white transition-all shadow">
                                <svg class="w-4 h-4 fill-current text-[#20BF78]" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                                <span>Download on Google Play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Badges -->
            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-400">
                <p>© 2026 Fetan Equb Technologies. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <span class="text-[#20BF78] flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-[#20BF78] animate-ping"></span>
                        Segregated Custodial Escrow
                    </span>
                    <span>AES-256 Encrypted</span>
                    <span>INSA Verified</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Feedback Trigger Button -->
    <div class="fixed bottom-6 right-6 z-40">
        <button 
            type="button" 
            onclick="openFeedbackModal()" 
            class="flex items-center gap-2 px-4 py-3 rounded-full bg-[#111111] hover:bg-[#20BF78] text-white text-xs font-extrabold shadow-xl hover:shadow-2xl transition-all duration-300 border border-white/20 cursor-pointer group"
            title="Send us your feedback"
        >
            <span class="text-base group-hover:scale-110 transition-transform">💬</span>
            <span class="tracking-wide">Feedback</span>
            <span class="w-2 h-2 rounded-full bg-[#20BF78] group-hover:bg-white animate-pulse"></span>
        </button>
    </div>

    <!-- Global Feedback Modal -->
    <div id="globalFeedbackModal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-3xl max-w-lg w-full border border-[#E5EAE7] shadow-2xl p-6 sm:p-8 space-y-5 relative max-h-[90vh] overflow-y-auto">
            
            <div class="flex items-start justify-between border-b border-[#E5EAE7] pb-4">
                <div>
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-[#EAFBF2] text-[#15965C] uppercase tracking-wider mb-1">
                        User Voice
                    </span>
                    <h3 class="text-xl font-extrabold text-[#111111]">Fetan Equb Feedback</h3>
                    <p class="text-xs text-[#444B48] mt-0.5">Your review directly helps our team improve the open-line experience.</p>
                </div>
                <button type="button" onclick="closeFeedbackModal()" class="p-2 rounded-xl hover:bg-[#F7F9F8] text-[#444B48] hover:text-[#111111] transition-colors cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <form action="{{ route('feedback.submit') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Rating -->
                <div>
                    <label class="block text-xs font-bold text-[#111111] mb-1.5">How satisfied are you?</label>
                    <div class="flex items-center gap-2">
                        @for($i = 5; $i >= 1; $i--)
                            <label class="flex items-center gap-1 cursor-pointer px-3 py-1.5 rounded-xl border border-[#E5EAE7] hover:border-[#20BF78] bg-[#F7F9F8] text-xs font-bold transition-colors">
                                <input type="radio" name="rating" value="{{ $i }}" {{ $i === 5 ? 'checked' : '' }} class="text-[#20BF78] focus:ring-[#20BF78]">
                                <span class="text-amber-500">★</span> {{ $i }}
                            </label>
                        @endfor
                    </div>
                </div>

                <!-- Name -->
                <div>
                    <label class="block text-xs font-bold text-[#111111] mb-1">Your Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" required placeholder="Abebe or Selam" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">
                </div>

                <!-- Contact -->
                <div>
                    <label class="block text-xs font-bold text-[#111111] mb-1">Email or Phone Number (Optional)</label>
                    <input type="text" name="email_or_phone" placeholder="+251911287374 or your@email.com" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">
                </div>

                <!-- Topic -->
                <div>
                    <label class="block text-xs font-bold text-[#111111] mb-1">Category</label>
                    <select name="subject" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] focus:outline-none focus:border-[#20BF78] text-sm">
                        <option value="Mobile App Experience">Mobile App Experience</option>
                        <option value="Payment Speed & CBE / Telebirr">Payment Speed & CBE / Telebirr</option>
                        <option value="Savings Queue Transparency">Savings Queue Transparency</option>
                        <option value="Feature Request">Feature Request</option>
                        <option value="General Encouragement">General Feedback</option>
                    </select>
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-xs font-bold text-[#111111] mb-1">Your Thoughts / Suggestions <span class="text-red-500">*</span></label>
                    <textarea name="message" rows="3" required placeholder="What do you think of Fetan Equb? What can we do better?" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm"></textarea>
                </div>

                <div class="flex items-center justify-end gap-3 pt-2">
                    <button type="button" onclick="closeFeedbackModal()" class="px-4 py-2.5 rounded-xl border border-[#E5EAE7] text-xs font-bold text-[#444B48] hover:bg-[#F7F9F8] transition-colors cursor-pointer">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white text-xs font-extrabold shadow-sm hover:shadow transition-all cursor-pointer">
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openFeedbackModal() {
            document.getElementById('globalFeedbackModal').classList.remove('hidden');
        }
        function closeFeedbackModal() {
            document.getElementById('globalFeedbackModal').classList.add('hidden');
        }
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeFeedbackModal();
        });
        document.getElementById('globalFeedbackModal')?.addEventListener('click', function(e) {
            if (e.target === this) closeFeedbackModal();
        });
    </script>

    @stack('scripts')
</body>
</html>
