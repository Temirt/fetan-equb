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

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='46' fill='%23064e3b'/><path d='M20 50 Q 50 15, 80 50 Q 50 85, 20 50' stroke='%23facc15' stroke-width='6' fill='none'/><circle cx='50' cy='50' r='10' fill='%23ffffff'/></svg>">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-[#02180d] text-slate-100 font-sans antialiased selection:bg-amber-400 selection:text-emerald-950 flex flex-col min-h-screen">

    <!-- Top Announcement Strip -->
    <div class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 border-b border-emerald-800/40 py-2 px-4 text-xs font-medium text-emerald-200">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-amber-400/20 text-amber-300 border border-amber-400/30">
                    ETHIOPIAN PATENT
                </span>
                <span>Patent No. ET UM 1170B1 • INSA Certified • NBE Cleared • DUNS: 764070770</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="tel:+251911287374" class="hover:text-amber-300 transition-colors flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    +251911287374
                </a>
                <span class="text-emerald-700">|</span>
                <!-- Language Switcher -->
                <div class="flex items-center gap-1 bg-emerald-900/60 rounded-full p-0.5 border border-emerald-700/50">
                    <a href="{{ route('switch-language', 'en') }}" class="px-2 py-0.5 rounded-full text-[11px] font-bold transition-all {{ app()->getLocale() === 'en' ? 'bg-amber-400 text-emerald-950 shadow-sm' : 'text-emerald-300 hover:text-white' }}">
                        EN
                    </a>
                    <a href="{{ route('switch-language', 'am') }}" class="px-2 py-0.5 rounded-full text-[11px] font-bold transition-all {{ app()->getLocale() === 'am' ? 'bg-amber-400 text-emerald-950 shadow-sm' : 'text-emerald-300 hover:text-white' }}">
                        አማርኛ
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 backdrop-blur-xl bg-[#02180d]/85 border-b border-emerald-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand / Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative w-11 h-11 rounded-xl bg-gradient-to-tr from-emerald-900 to-emerald-700 border border-amber-400/50 flex items-center justify-center shadow-lg shadow-emerald-950/50 group-hover:border-amber-300 transition-all">
                        <!-- Glowing infinite knot / line logo -->
                        <svg class="w-6 h-6 text-amber-300 group-hover:scale-110 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>
                        <div class="absolute -inset-0.5 rounded-xl bg-amber-400/20 blur opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <div>
                        <div class="text-xl font-extrabold tracking-tight text-white flex items-center gap-1.5">
                            FETAN <span class="text-amber-400">EQUB</span>
                            <span class="text-[9px] px-1.5 py-0.5 rounded bg-emerald-800/60 text-emerald-300 font-mono font-semibold border border-emerald-700/60">OPEN-LINE</span>
                        </div>
                        <div class="text-[11px] tracking-wide text-emerald-300/80 font-medium">ፈጣን እቁብ • Patent ET UM 1170B1</div>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-6">
                    <a href="{{ route('home') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('home') ? 'text-amber-300 font-bold' : 'text-slate-300 hover:text-white' }}">
                        {{ __('messages.nav.home') }}
                    </a>
                    <a href="{{ route('how-it-works') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('how-it-works') ? 'text-amber-300 font-bold' : 'text-slate-300 hover:text-white' }}">
                        {{ __('messages.nav.how_it_works') }}
                    </a>
                    <a href="{{ route('asset-equbs') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('asset-equbs') ? 'text-amber-300 font-bold' : 'text-slate-300 hover:text-white' }}">
                        {{ __('messages.nav.asset_equbs') }}
                    </a>
                    <a href="{{ route('platinum') }}" class="text-sm font-semibold transition-colors flex items-center gap-1 {{ request()->routeIs('platinum') ? 'text-amber-300 font-bold' : 'text-slate-300 hover:text-amber-300' }}">
                        <span>{{ __('messages.nav.platinum') }}</span>
                        <span class="px-1.5 py-0.2 rounded text-[10px] font-bold bg-amber-400 text-emerald-950 uppercase">VIP</span>
                    </a>
                    <a href="{{ route('faq') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('faq') ? 'text-amber-300 font-bold' : 'text-slate-300 hover:text-white' }}">
                        {{ __('messages.nav.faq') }}
                    </a>
                    <a href="{{ route('contact') }}" class="text-sm font-semibold transition-colors {{ request()->routeIs('contact') ? 'text-amber-300 font-bold' : 'text-slate-300 hover:text-white' }}">
                        {{ __('messages.nav.contact') }}
                    </a>
                </nav>

                <!-- Action Button & Language Switcher -->
                <div class="hidden sm:flex items-center gap-3">
                    <button data-open-equb-modal class="relative inline-flex items-center justify-center px-5 py-2.5 rounded-xl font-bold text-sm text-emerald-950 bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 shadow-lg shadow-amber-500/20 hover:shadow-amber-400/40 hover:scale-[1.02] active:scale-[0.98] transition-all">
                        <span>{{ __('messages.nav.start_equb') }}</span>
                        <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center gap-2">
                    <button data-open-equb-modal class="px-3 py-1.5 rounded-lg text-xs font-bold text-emerald-950 bg-amber-400">
                        {{ __('messages.nav.start_equb') }}
                    </button>
                    <button id="mobileMenuToggle" class="p-2 rounded-lg bg-emerald-900/60 text-emerald-200 hover:text-white hover:bg-emerald-800/80 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-emerald-800/40 bg-[#032012]/95 px-4 pt-3 pb-6 space-y-3">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('home') ? 'bg-emerald-900/80 text-amber-300' : 'text-slate-200 hover:bg-emerald-900/40' }}">{{ __('messages.nav.home') }}</a>
            <a href="{{ route('how-it-works') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('how-it-works') ? 'bg-emerald-900/80 text-amber-300' : 'text-slate-200 hover:bg-emerald-900/40' }}">{{ __('messages.nav.how_it_works') }}</a>
            <a href="{{ route('asset-equbs') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('asset-equbs') ? 'bg-emerald-900/80 text-amber-300' : 'text-slate-200 hover:bg-emerald-900/40' }}">{{ __('messages.nav.asset_equbs') }}</a>
            <a href="{{ route('platinum') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('platinum') ? 'bg-emerald-900/80 text-amber-300' : 'text-slate-200 hover:bg-emerald-900/40' }}">{{ __('messages.nav.platinum') }} (VIP)</a>
            <a href="{{ route('faq') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('faq') ? 'bg-emerald-900/80 text-amber-300' : 'text-slate-200 hover:bg-emerald-900/40' }}">{{ __('messages.nav.faq') }}</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-lg text-base font-semibold {{ request()->routeIs('contact') ? 'bg-emerald-900/80 text-amber-300' : 'text-slate-200 hover:bg-emerald-900/40' }}">{{ __('messages.nav.contact') }}</a>
            <div class="pt-2 border-t border-emerald-800/40 flex justify-between items-center">
                <span class="text-xs text-emerald-300">Language / ቋንቋ:</span>
                <div class="flex items-center gap-2">
                    <a href="{{ route('switch-language', 'en') }}" class="px-3 py-1 rounded text-xs font-bold {{ app()->getLocale() === 'en' ? 'bg-amber-400 text-emerald-950' : 'bg-emerald-900 text-emerald-300' }}">English</a>
                    <a href="{{ route('switch-language', 'am') }}" class="px-3 py-1 rounded text-xs font-bold {{ app()->getLocale() === 'am' ? 'bg-amber-400 text-emerald-950' : 'bg-emerald-900 text-emerald-300' }}">አማርኛ</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Interactive Registration / Join Modal -->
    <div id="equbModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-md p-4">
        <div class="relative w-full max-w-lg rounded-2xl bg-gradient-to-b from-[#06331e] to-[#02180d] border border-amber-400/40 p-6 sm:p-8 shadow-2xl shadow-emerald-950/80">
            <!-- Close button -->
            <button id="closeModalBtn" class="absolute top-4 right-4 text-emerald-300 hover:text-white p-1 rounded-lg hover:bg-emerald-800/50 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <!-- Form State -->
            <form id="modalEqubForm" class="space-y-4">
                <div class="mb-5">
                    <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-amber-400/10 text-amber-400 text-xs font-bold border border-amber-400/30 mb-2">
                        <span>✨</span> {{ __('messages.modal.start_title') }}
                    </div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-white">{{ __('messages.hero.cta_primary') }}</h3>
                    <p class="text-xs text-emerald-300/80 mt-1">{{ __('messages.modal.start_subtitle') }}</p>
                </div>

                <div>
                    <label class="block text-xs font-bold text-emerald-200 mb-1">{{ __('messages.modal.full_name') }}</label>
                    <input type="text" name="name" required placeholder="Abebe Bikila" class="w-full px-4 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white placeholder-emerald-600 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 text-sm">
                </div>

                <div>
                    <label class="block text-xs font-bold text-emerald-200 mb-1">{{ __('messages.modal.phone') }}</label>
                    <input type="tel" name="phone" required placeholder="0911287374" class="w-full px-4 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white placeholder-emerald-600 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 text-sm">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-bold text-emerald-200 mb-1">{{ __('messages.modal.goal_type') }}</label>
                        <select name="goal" class="w-full px-3 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white focus:outline-none focus:border-amber-400 text-sm">
                            <option value="Car">🚗 Car / መኪና (1.5M ETB)</option>
                            <option value="Motorcycle">🏍️ Motorcycle / ሞተር (250K ETB)</option>
                            <option value="Business">💼 Business / ንግድ (500K ETB)</option>
                            <option value="Home">🏠 Furnished Home / ቤት (3M ETB)</option>
                            <option value="Custom">💰 Custom Savings / ብጁ ቁጠባ</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-emerald-200 mb-1">{{ __('messages.modal.daily_saving') }}</label>
                        <input type="number" name="daily_amount" required min="20" step="10" value="250" class="w-full px-4 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white focus:outline-none focus:border-amber-400 text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-emerald-200 mb-1">{{ __('messages.modal.payment_method') }}</label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                        <label class="cursor-pointer border border-emerald-800 rounded-xl p-2.5 bg-emerald-950/40 text-center hover:border-amber-400 flex flex-col items-center justify-center transition-all">
                            <input type="radio" name="payment_method" value="Telebirr" checked class="sr-only">
                            <span class="text-xs font-bold text-amber-300">Telebirr</span>
                            <span class="text-[9px] text-emerald-400">ቴሌብር</span>
                        </label>
                        <label class="cursor-pointer border border-emerald-800 rounded-xl p-2.5 bg-emerald-950/40 text-center hover:border-amber-400 flex flex-col items-center justify-center transition-all">
                            <input type="radio" name="payment_method" value="CBE Birr" class="sr-only">
                            <span class="text-xs font-bold text-white">CBE Birr</span>
                            <span class="text-[9px] text-emerald-400">ሲቢኢ ብር</span>
                        </label>
                        <label class="cursor-pointer border border-emerald-800 rounded-xl p-2.5 bg-emerald-950/40 text-center hover:border-amber-400 flex flex-col items-center justify-center transition-all">
                            <input type="radio" name="payment_method" value="M-PESA" class="sr-only">
                            <span class="text-xs font-bold text-red-400">M-PESA</span>
                            <span class="text-[9px] text-emerald-400">ሳፋሪኮም</span>
                        </label>
                        <label class="cursor-pointer border border-emerald-800 rounded-xl p-2.5 bg-emerald-950/40 text-center hover:border-amber-400 flex flex-col items-center justify-center transition-all">
                            <input type="radio" name="payment_method" value="Chapa" class="sr-only">
                            <span class="text-xs font-bold text-green-400">Chapa</span>
                            <span class="text-[9px] text-emerald-400">ቻፓ</span>
                        </label>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 text-emerald-950 font-extrabold text-sm shadow-xl shadow-amber-400/20 hover:scale-[1.01] active:scale-[0.99] transition-all">
                        {{ __('messages.modal.submit') }}
                    </button>
                    <p class="text-[10px] text-center text-emerald-400/70 mt-2">
                        🔒 Funds kept in partner bank segregated custodial escrow. Patent No. ET UM 1170B1.
                    </p>
                </div>
            </form>

            <!-- Success State -->
            <div id="modalSuccessState" class="hidden text-center py-6 space-y-4">
                <div class="w-16 h-16 mx-auto rounded-full bg-emerald-500/20 border-2 border-emerald-400 flex items-center justify-center text-emerald-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                </div>
                <h4 class="text-2xl font-extrabold text-white">{{ __('messages.modal.success_title') }}</h4>
                <p class="text-sm text-emerald-200/90 max-w-sm mx-auto">{{ __('messages.modal.success_desc') }}</p>

                <div class="bg-emerald-950/80 border border-emerald-700/60 rounded-xl p-4 text-left max-w-xs mx-auto space-y-2 text-xs">
                    <div class="flex justify-between">
                        <span class="text-emerald-400">Open-Line Ticket:</span>
                        <span id="resLineNumber" class="font-mono font-bold text-amber-300">ET-EQB-849201</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-emerald-400">Estimated Payout:</span>
                        <span id="resPayoutDate" class="font-bold text-white">Jul 18, 2026</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-emerald-400">Consistency Multiplier:</span>
                        <span class="font-bold text-emerald-300">100% Active</span>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="https://play.google.com/store" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-amber-400 text-emerald-950 font-bold text-sm hover:bg-amber-300 transition-colors">
                        <span>{{ __('messages.cta.btn_google_play') }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Official Footer -->
    <footer class="bg-[#011208] border-t border-emerald-900/60 pt-16 pb-12 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
                <!-- Col 1: Company Profile -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-900 to-emerald-700 border border-amber-400/50 flex items-center justify-center">
                            <svg class="w-6 h-6 text-amber-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <div>
                            <div class="text-lg font-extrabold text-white">FETAN <span class="text-amber-400">EQUB</span></div>
                            <div class="text-xs text-emerald-400 font-medium">{{ __('messages.footer.trading_name') }}</div>
                        </div>
                    </div>

                    <p class="text-sm text-slate-400 leading-relaxed max-w-md">
                        {{ __('messages.security.body') }}
                    </p>

                    <div class="space-y-1.5 text-xs text-slate-400 pt-2 border-t border-emerald-900/60">
                        <div class="font-semibold text-slate-200">{{ __('messages.footer.company_name') }}</div>
                        <div>{{ __('messages.footer.address') }}</div>
                        <div class="flex flex-wrap gap-x-4 gap-y-1 text-emerald-400">
                            <span>{{ __('messages.footer.tin') }}</span>
                            <span>•</span>
                            <span>{{ __('messages.footer.license') }}</span>
                        </div>
                        <div class="text-amber-300 font-medium">Patent Protected: Granted Patent No. ET UM 1170B1</div>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-amber-400 pl-2">Navigation</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-amber-300 transition-colors">{{ __('messages.footer.links.home') }}</a></li>
                        <li><a href="{{ route('how-it-works') }}" class="hover:text-amber-300 transition-colors">{{ __('messages.footer.links.how_it_works') }}</a></li>
                        <li><a href="{{ route('asset-equbs') }}" class="hover:text-amber-300 transition-colors">{{ __('messages.footer.links.asset_equbs') }}</a></li>
                        <li><a href="{{ route('platinum') }}" class="hover:text-amber-300 transition-colors flex items-center gap-1.5">
                            <span>{{ __('messages.footer.links.platinum') }}</span>
                            <span class="px-1 py-0.2 rounded text-[9px] bg-amber-400 text-emerald-950 font-bold">VIP</span>
                        </a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-amber-300 transition-colors">{{ __('messages.footer.links.faq') }}</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amber-300 transition-colors">{{ __('messages.footer.links.contact') }}</a></li>
                    </ul>
                </div>

                <!-- Col 3: Legal & Regulatory -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-emerald-400 pl-2">Legal & Trust</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('terms') }}" class="hover:text-amber-300 transition-colors">{{ __('messages.footer.links.terms') }}</a></li>
                        <li><a href="{{ route('privacy') }}" class="hover:text-amber-300 transition-colors">{{ __('messages.footer.links.privacy') }}</a></li>
                        <li><span class="text-xs text-slate-400">INSA Certified Compliance</span></li>
                        <li><span class="text-xs text-slate-400">National Bank Cleared</span></li>
                        <li><span class="text-xs text-slate-400">Segregated Custodial Escrow</span></li>
                        <li><span class="text-xs text-slate-400">DUNS: 764070770</span></li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Channels -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-amber-400 pl-2">Contact Us</h4>
                    <div class="space-y-3 text-sm">
                        <a href="tel:{{ __('messages.footer.phone') }}" class="flex items-center gap-2.5 text-slate-300 hover:text-amber-300 transition-colors">
                            <span class="p-2 rounded-lg bg-emerald-950 border border-emerald-800 text-amber-300">📞</span>
                            <span>{{ __('messages.footer.phone') }}</span>
                        </a>
                        <a href="mailto:{{ __('messages.footer.email') }}" class="flex items-center gap-2.5 text-slate-300 hover:text-amber-300 transition-colors">
                            <span class="p-2 rounded-lg bg-emerald-950 border border-emerald-800 text-amber-300">📧</span>
                            <span>{{ __('messages.footer.email') }}</span>
                        </a>
                        <div class="pt-2">
                            <button data-open-equb-modal class="w-full py-2 px-3 rounded-lg bg-emerald-900/80 hover:bg-emerald-800 border border-emerald-700/60 text-xs font-bold text-amber-300 transition-colors">
                                {{ __('messages.cta.btn_web') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Badges -->
            <div class="pt-8 border-t border-emerald-900/60 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-slate-400">
                <p>{{ __('messages.footer.copyright') }}</p>
                <div class="flex items-center gap-6">
                    <span class="text-emerald-400 flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        Bank Custodial Escrow Active
                    </span>
                    <span>AES-256 Encrypted</span>
                    <span>INSA Verified</span>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
