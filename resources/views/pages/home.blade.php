@extends('layouts.app')

@section('title', __('messages.hero.headline') . ' | Fetan Equb')

@section('content')

<!-- 🟢 HERO SECTION: Deep green with gold/white glowing line extending infinitely -->
<section class="relative min-h-[92vh] flex items-center justify-center overflow-hidden bg-[#02180d] pt-12 pb-24 border-b border-emerald-900/50">
    <!-- Infinite Glowing Line Canvas -->
    <canvas id="heroLineCanvas" class="absolute inset-0 w-full h-full pointer-events-none z-0"></canvas>

    <!-- Ambient glowing backdrop lighting -->
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-emerald-500/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-10 right-10 w-[400px] h-[400px] bg-amber-400/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Trust badge pill -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-950/80 border border-amber-400/40 text-amber-300 text-xs sm:text-sm font-semibold mb-8 shadow-xl backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
            <span>{{ __('messages.hero.badge') }}</span>
        </div>

        <!-- Headline -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white mb-6 leading-[1.15]">
            {!! str_replace('Open-Line', '<span class="gold-gradient-text">Open-Line</span>', str_replace('ክፍት መስመር', '<span class="gold-gradient-text">ክፍት መስመር</span>', __('messages.hero.headline'))) !!}
        </h1>

        <!-- Sub-headline -->
        <p class="text-lg sm:text-2xl text-emerald-100/90 font-medium max-w-3xl mx-auto mb-10 leading-relaxed">
            {{ __('messages.hero.subheadline') }}
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            <button data-open-equb-modal class="w-full sm:w-auto px-8 py-4 rounded-xl font-extrabold text-base text-emerald-950 bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 shadow-xl shadow-amber-500/25 hover:shadow-amber-400/40 hover:scale-105 active:scale-95 transition-all">
                {{ __('messages.hero.cta_primary') }}
            </button>
            <a href="#how-it-works" class="w-full sm:w-auto px-8 py-4 rounded-xl font-bold text-base text-white bg-emerald-950/70 border border-emerald-600/50 hover:bg-emerald-900/60 hover:border-amber-400/60 shadow-lg transition-all backdrop-blur-md">
                {{ __('messages.hero.cta_secondary') }}
            </a>
        </div>

        <!-- Visual representation of the infinite glowing line -->
        <div class="relative max-w-3xl mx-auto my-6 px-4">
            <div class="h-1 w-full rounded-full glow-line"></div>
            <div class="flex justify-between items-center text-[11px] text-amber-200/80 font-mono mt-2 uppercase tracking-widest">
                <span>← Continuous Entry (Anytime)</span>
                <span class="text-white font-bold">Algorithmic Payout Line</span>
                <span>Infinite Horizon (1M+ Capacity) →</span>
            </div>
        </div>

        <!-- Metric Stat Cards -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mt-12">
            <div class="glow-card rounded-2xl p-4 text-center">
                <div class="text-2xl sm:text-3xl font-extrabold gold-gradient-text">{{ __('messages.hero.disbursed_val') }}</div>
                <div class="text-xs text-emerald-300/80 mt-1 font-medium">{{ __('messages.hero.disbursed_label') }}</div>
            </div>
            <div class="glow-card rounded-2xl p-4 text-center">
                <div class="text-2xl sm:text-3xl font-extrabold text-white">{{ __('messages.hero.members_val') }}</div>
                <div class="text-xs text-emerald-300/80 mt-1 font-medium">{{ __('messages.hero.members_label') }}</div>
            </div>
            <div class="glow-card rounded-2xl p-4 text-center">
                <div class="text-2xl sm:text-3xl font-extrabold gold-gradient-text">{{ __('messages.hero.capacity_val') }}</div>
                <div class="text-xs text-emerald-300/80 mt-1 font-medium">{{ __('messages.hero.capacity_label') }}</div>
            </div>
            <div class="glow-card rounded-2xl p-4 text-center">
                <div class="text-2xl sm:text-3xl font-extrabold text-emerald-400">{{ __('messages.hero.guarantee_val') }}</div>
                <div class="text-xs text-emerald-300/80 mt-1 font-medium">{{ __('messages.hero.guarantee_label') }}</div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Partners Strip -->
<div class="bg-[#01140a] border-b border-emerald-900/60 py-6 px-4">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider">
            Directly Integrated With Ethiopia's Leading Payment Rail:
        </span>
        <div class="flex flex-wrap items-center justify-center gap-6 text-sm font-semibold">
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-950/60 border border-emerald-800 text-amber-300">
                <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                <span>Telebirr (ቴሌብር)</span>
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-950/60 border border-emerald-800 text-white">
                <span class="w-2.5 h-2.5 rounded-full bg-blue-400"></span>
                <span>CBE Birr (ሲቢኢ ብር)</span>
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-950/60 border border-emerald-800 text-red-300">
                <span class="w-2.5 h-2.5 rounded-full bg-red-400"></span>
                <span>Safaricom M-PESA</span>
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-emerald-950/60 border border-emerald-800 text-emerald-300">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                <span>Chapa Gateway</span>
            </div>
        </div>
    </div>
</div>

<!-- 🟢 SECTION 1: THE PROBLEM (The Old Way) -->
<section id="the-problem" class="py-24 bg-[#031d10] border-b border-emerald-900/60 relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-950/60 border border-red-800/60 text-red-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>⚠️</span> {{ __('messages.problem.badge') }}
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                {{ __('messages.problem.headline') }}
            </h2>
            <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                {{ __('messages.problem.body') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Problem 1 -->
            <div class="p-6 rounded-2xl bg-red-950/20 border border-red-900/40 hover:border-red-600/50 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-red-900/40 text-red-400 flex items-center justify-center text-xl font-bold mb-4">
                    ❌
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.problem.item1_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.problem.item1_desc') }}</p>
            </div>

            <!-- Problem 2 -->
            <div class="p-6 rounded-2xl bg-red-950/20 border border-red-900/40 hover:border-red-600/50 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-red-900/40 text-red-400 flex items-center justify-center text-xl font-bold mb-4">
                    ❌
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.problem.item2_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.problem.item2_desc') }}</p>
            </div>

            <!-- Problem 3 -->
            <div class="p-6 rounded-2xl bg-red-950/20 border border-red-900/40 hover:border-red-600/50 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-red-900/40 text-red-400 flex items-center justify-center text-xl font-bold mb-4">
                    ❌
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.problem.item3_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.problem.item3_desc') }}</p>
            </div>

            <!-- Problem 4 -->
            <div class="p-6 rounded-2xl bg-red-950/20 border border-red-900/40 hover:border-red-600/50 transition-all hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-red-900/40 text-red-400 flex items-center justify-center text-xl font-bold mb-4">
                    ❌
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.problem.item4_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.problem.item4_desc') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- 🟢 SECTION 2: THE SOLUTION (The Fetan Equb Way) -->
<section id="the-solution" class="py-24 bg-[#02180d] border-b border-emerald-900/60 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-amber-400/50 text-amber-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>✨</span> {{ __('messages.solution.badge') }}
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                {{ __('messages.solution.headline') }}
            </h2>
            <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                {{ __('messages.solution.body') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Feature 1 -->
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-emerald-900/60 text-emerald-300 flex items-center justify-center text-xl font-bold mb-4 border border-emerald-700/60">
                    ✅
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.solution.item1_title') }}</h3>
                <p class="text-sm text-emerald-200/80 leading-relaxed">{{ __('messages.solution.item1_desc') }}</p>
            </div>

            <!-- Feature 2 -->
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-emerald-900/60 text-emerald-300 flex items-center justify-center text-xl font-bold mb-4 border border-emerald-700/60">
                    ✅
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.solution.item2_title') }}</h3>
                <p class="text-sm text-emerald-200/80 leading-relaxed">{{ __('messages.solution.item2_desc') }}</p>
            </div>

            <!-- Feature 3 -->
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-emerald-900/60 text-emerald-300 flex items-center justify-center text-xl font-bold mb-4 border border-emerald-700/60">
                    ✅
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.solution.item3_title') }}</h3>
                <p class="text-sm text-emerald-200/80 leading-relaxed">{{ __('messages.solution.item3_desc') }}</p>
            </div>

            <!-- Feature 4 -->
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-emerald-900/60 text-emerald-300 flex items-center justify-center text-xl font-bold mb-4 border border-emerald-700/60">
                    ✅
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.solution.item4_title') }}</h3>
                <p class="text-sm text-emerald-200/80 leading-relaxed">{{ __('messages.solution.item4_desc') }}</p>
            </div>

            <!-- Feature 5 (Wide card) -->
            <div class="glow-card p-6 rounded-2xl md:col-span-2 lg:col-span-2 bg-gradient-to-r from-emerald-950/80 via-emerald-900/40 to-emerald-950/80">
                <div class="w-12 h-12 rounded-xl bg-amber-400/20 text-amber-300 flex items-center justify-center text-xl font-bold mb-4 border border-amber-400/40">
                    ✅
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.solution.item5_title') }}</h3>
                <p class="text-sm text-emerald-200/80 leading-relaxed">{{ __('messages.solution.item5_desc') }}</p>
                <div class="mt-4 flex items-center gap-3 text-xs text-amber-300">
                    <span class="px-2 py-0.5 rounded bg-amber-400/10 border border-amber-400/30">Patent No. ET UM 1170B1</span>
                    <span>Mathematical queue stability verified under Ethiopian patent office examination.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🟢 SECTION 3: HOW IT WORKS (3 Simple Steps) -->
<section id="how-it-works" class="py-24 bg-[#032012] border-b border-emerald-900/60 relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-amber-400/40 text-amber-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>🔄</span> {{ __('messages.how_it_works.badge') }}
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                {{ __('messages.how_it_works.headline') }}
            </h2>
            <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                {{ __('messages.how_it_works.subheadline') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <!-- Connecting line for desktop -->
            <div class="hidden md:block absolute top-1/2 left-0 right-0 h-0.5 bg-gradient-to-r from-emerald-700 via-amber-400 to-emerald-700 -translate-y-12 z-0 opacity-40"></div>

            <!-- Step 1 -->
            <div class="relative z-10 glow-card p-8 rounded-2xl text-center group">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-emerald-900 border-2 border-amber-400 flex items-center justify-center text-amber-300 font-extrabold text-xl shadow-lg mb-6 group-hover:scale-110 transition-transform">
                    1
                </div>
                <div class="text-xs font-bold uppercase tracking-wider text-amber-400 mb-2">{{ __('messages.how_it_works.step1_tag') }}</div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('messages.how_it_works.step1_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.how_it_works.step1_desc') }}</p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 glow-card p-8 rounded-2xl text-center group">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-emerald-900 border-2 border-amber-400 flex items-center justify-center text-amber-300 font-extrabold text-xl shadow-lg mb-6 group-hover:scale-110 transition-transform">
                    2
                </div>
                <div class="text-xs font-bold uppercase tracking-wider text-amber-400 mb-2">{{ __('messages.how_it_works.step2_tag') }}</div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('messages.how_it_works.step2_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.how_it_works.step2_desc') }}</p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 glow-card p-8 rounded-2xl text-center group">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-emerald-900 border-2 border-amber-400 flex items-center justify-center text-amber-300 font-extrabold text-xl shadow-lg mb-6 group-hover:scale-110 transition-transform">
                    3
                </div>
                <div class="text-xs font-bold uppercase tracking-wider text-amber-400 mb-2">{{ __('messages.how_it_works.step3_tag') }}</div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('messages.how_it_works.step3_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.how_it_works.step3_desc') }}</p>
            </div>
        </div>

        <div class="mt-14 text-center">
            <button data-open-equb-modal class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-extrabold text-base text-emerald-950 bg-amber-400 hover:bg-amber-300 shadow-xl transition-all">
                <span>{{ __('messages.hero.cta_primary') }}</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
        </div>
    </div>
</section>

<!-- 🟢 INTERACTIVE EQUB SIMULATOR & CALCULATOR -->
<section id="simulator" class="py-24 bg-[#02180d] border-b border-emerald-900/60 relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400/10 border border-amber-400/30 text-amber-300 text-xs font-bold uppercase tracking-wider mb-3">
                ⚡ Algorithmic Projection Engine
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3">{{ __('messages.calculator.title') }}</h2>
            <p class="text-emerald-200/80 text-sm sm:text-base">{{ __('messages.calculator.subtitle') }}</p>
        </div>

        <div class="glow-card rounded-3xl p-6 sm:p-10 border border-emerald-700/50">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Inputs Side -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-white mb-2">{{ __('messages.calculator.choose_goal') }}</label>
                        <select id="calcGoal" class="w-full px-4 py-3 rounded-xl bg-emerald-950/80 border border-emerald-700 text-white font-medium focus:outline-none focus:border-amber-400">
                            <option value="1500000" selected>🚗 Automobile / መኪና (1,500,000 ETB)</option>
                            <option value="250000">🏍️ Motorbike / ሞተር ሳይክል (250,000 ETB)</option>
                            <option value="500000">💼 Business Capital / ንግድ ማስፋፊያ (500,000 ETB)</option>
                            <option value="3000000">🏠 Furnished Apartment / ሙሉ ቤት (3,000,000 ETB)</option>
                            <option value="custom">⚙️ Custom Target / ብጁ መጠን</option>
                        </select>
                    </div>

                    <div id="calcCustomAmount" class="hidden">
                        <label class="block text-sm font-bold text-white mb-2">{{ __('messages.calculator.custom_goal') }} (ETB)</label>
                        <input type="number" step="5000" value="100000" class="w-full px-4 py-3 rounded-xl bg-emerald-950/80 border border-emerald-700 text-white focus:outline-none focus:border-amber-400">
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="text-sm font-bold text-white">{{ __('messages.calculator.daily_amount') }}</label>
                            <span id="calcDailyDisplay" class="text-base font-extrabold text-amber-400">250 ETB</span>
                        </div>
                        <input id="calcDailySlider" type="range" min="50" max="5000" step="50" value="250" class="w-full accent-amber-400 h-2 bg-emerald-900 rounded-lg cursor-pointer">
                        <div class="flex justify-between text-[11px] text-emerald-400/80 mt-1">
                            <span>50 ETB / day</span>
                            <span>500 ETB / day</span>
                            <span>5,000 ETB / day</span>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-emerald-950/60 border border-emerald-800/80 text-xs space-y-1 text-emerald-200">
                        <div class="font-bold text-amber-300">💡 The Open-Line Advantage:</div>
                        <p>Unlike traditional small circles, you don't wait for your turn in a year. The continuous stream of contributors accelerates payout queues.</p>
                    </div>
                </div>

                <!-- Projection Result Card -->
                <div class="rounded-2xl bg-gradient-to-br from-[#063b22] to-[#021f11] border-2 border-amber-400/40 p-6 sm:p-8 text-center relative overflow-hidden shadow-2xl">
                    <div class="text-xs uppercase font-bold text-amber-300 tracking-wider mb-2">{{ __('messages.calculator.estimated_payout') }}</div>
                    <div id="calcDateDisplay" class="text-3xl sm:text-4xl font-extrabold text-white mb-2">
                        --
                    </div>
                    <div id="calcSpeedupDisplay" class="inline-block px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-xs font-bold border border-emerald-400/30 mb-6">
                        65% Faster than solo saving
                    </div>

                    <div class="grid grid-cols-2 gap-3 pt-4 border-t border-emerald-800/80 text-left text-xs mb-6">
                        <div>
                            <span class="text-emerald-400 block">{{ __('messages.calculator.total_target') }}</span>
                            <span id="calcTargetDisplay" class="font-bold text-white text-sm">1,500,000 ETB</span>
                        </div>
                        <div>
                            <span class="text-emerald-400 block">{{ __('messages.calculator.days_needed') }}</span>
                            <span id="calcDaysDisplay" class="font-bold text-amber-300 text-sm">-- Days</span>
                        </div>
                    </div>

                    <button data-open-equb-modal class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 text-emerald-950 font-extrabold text-sm shadow-xl shadow-amber-400/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
                        {{ __('messages.calculator.simulate_btn') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🟢 SECTION 4: WHY TRUST US? (Traction & Security) -->
<section id="why-trust-us" class="py-24 bg-[#031d10] border-b border-emerald-900/60 relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-amber-400/40 text-amber-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>🛡️</span> {{ __('messages.trust.badge') }}
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                {{ __('messages.trust.headline') }}
            </h2>
            <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                {{ __('messages.trust.subheadline') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Trust 1 -->
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-amber-400/10 border border-amber-400/40 text-amber-300 flex items-center justify-center text-2xl mb-4">
                    🛡️
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.trust.item1_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.trust.item1_desc') }}</p>
            </div>

            <!-- Trust 2 -->
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-amber-400/10 border border-amber-400/40 text-amber-300 flex items-center justify-center text-2xl mb-4">
                    📜
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.trust.item2_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.trust.item2_desc') }}</p>
            </div>

            <!-- Trust 3 (Google Play App) -->
            <div class="glow-card p-6 rounded-2xl border border-amber-400/40 relative">
                <div class="w-12 h-12 rounded-xl bg-amber-400/10 border border-amber-400/40 text-amber-300 flex items-center justify-center text-2xl mb-4">
                    📱
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.trust.item3_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">{{ __('messages.trust.item3_desc') }}</p>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-300 hover:text-white transition-colors">
                    <span>View on Google Play Store</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>

            <!-- Trust 4 -->
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-amber-400/10 border border-amber-400/40 text-amber-300 flex items-center justify-center text-2xl mb-4">
                    🤝
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.trust.item4_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.trust.item4_desc') }}</p>
            </div>

            <!-- Trust 5 (Double wide) -->
            <div class="glow-card p-6 rounded-2xl md:col-span-2 lg:col-span-2 bg-gradient-to-r from-emerald-950/80 via-emerald-900/50 to-emerald-950/80">
                <div class="w-12 h-12 rounded-xl bg-amber-400/10 border border-amber-400/40 text-amber-300 flex items-center justify-center text-2xl mb-4">
                    🌍
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ __('messages.trust.item5_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.trust.item5_desc') }}</p>
                <div class="mt-4 text-xs text-amber-300 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                    <span>Fully audited ledger consistency with instant bank settlement.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🟢 SECTION 5: THE PLATINUM UPGRADE (Optional) -->
<section id="platinum" class="py-24 bg-gradient-to-b from-[#02180d] via-[#052917] to-[#02180d] border-b border-amber-400/30 relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glow-card rounded-3xl p-8 sm:p-14 border-2 border-amber-400/50 bg-gradient-to-br from-[#063d23] via-[#042416] to-[#02180d] relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-amber-400/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-400/20 border border-amber-400/40 text-amber-300 text-xs font-bold uppercase tracking-wider mb-4">
                    <span>👑</span> {{ __('messages.platinum.badge') }}
                </div>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                    {{ __('messages.platinum.headline') }}
                </h2>
                <p class="text-emerald-100/90 text-base sm:text-lg leading-relaxed mb-8">
                    {{ __('messages.platinum.body') }}
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-amber-400/20 text-amber-400 flex items-center justify-center text-xs mt-0.5">✓</div>
                        <span class="text-xs sm:text-sm text-slate-200">{{ __('messages.platinum.feature1') }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-amber-400/20 text-amber-400 flex items-center justify-center text-xs mt-0.5">✓</div>
                        <span class="text-xs sm:text-sm text-slate-200">{{ __('messages.platinum.feature2') }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-amber-400/20 text-amber-400 flex items-center justify-center text-xs mt-0.5">✓</div>
                        <span class="text-xs sm:text-sm text-slate-200">{{ __('messages.platinum.feature3') }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-amber-400/20 text-amber-400 flex items-center justify-center text-xs mt-0.5">✓</div>
                        <span class="text-xs sm:text-sm text-slate-200">{{ __('messages.platinum.feature4') }}</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('platinum') }}" class="px-8 py-4 rounded-xl font-extrabold text-base text-emerald-950 bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 shadow-xl shadow-amber-400/25 hover:scale-105 active:scale-95 transition-all">
                        {{ __('messages.platinum.button') }}
                    </a>
                    <button data-open-equb-modal class="px-6 py-4 rounded-xl font-bold text-base text-amber-300 border border-amber-400/60 hover:bg-amber-400/10 transition-colors">
                        Apply for VIP Platinum
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🟢 SECTION 6: TRUST & SECURITY -->
<section id="trust-security" class="py-24 bg-[#031d10] border-b border-emerald-900/60 relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-emerald-500/50 text-emerald-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>🔒</span> {{ __('messages.security.badge') }}
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                {{ __('messages.security.headline') }}
            </h2>
            <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                {{ __('messages.security.body') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-emerald-900/80 border border-emerald-700 text-emerald-300 flex items-center justify-center text-xl mb-4">
                    🏦
                </div>
                <h3 class="text-lg font-bold text-white mb-2">{{ __('messages.security.point1_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.security.point1_desc') }}</p>
            </div>

            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-emerald-900/80 border border-emerald-700 text-emerald-300 flex items-center justify-center text-xl mb-4">
                    🔐
                </div>
                <h3 class="text-lg font-bold text-white mb-2">{{ __('messages.security.point2_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.security.point2_desc') }}</p>
            </div>

            <div class="glow-card p-6 rounded-2xl">
                <div class="w-12 h-12 rounded-xl bg-emerald-900/80 border border-emerald-700 text-emerald-300 flex items-center justify-center text-xl mb-4">
                    ⚖️
                </div>
                <h3 class="text-lg font-bold text-white mb-2">{{ __('messages.security.point3_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.security.point3_desc') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- 🟢 SECTION 7: THE CALL TO ACTION (Bottom of Page) -->
<section class="py-24 bg-gradient-to-b from-[#02180d] to-[#011409] text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
            {{ __('messages.cta.headline') }}
        </h2>
        <p class="text-lg sm:text-xl text-emerald-100/90 max-w-2xl mx-auto mb-10 leading-relaxed">
            {{ __('messages.cta.body') }}
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl font-extrabold text-base text-emerald-950 bg-gradient-to-r from-amber-300 via-amber-400 to-amber-500 shadow-xl shadow-amber-500/25 hover:scale-105 active:scale-95 transition-all">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/>
                </svg>
                <span>{{ __('messages.cta.btn_google_play') }}</span>
            </a>
            <button data-open-equb-modal class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl font-bold text-base text-white bg-emerald-950/80 border border-emerald-600/70 hover:bg-emerald-900/80 hover:border-amber-400 transition-all shadow-lg">
                <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg>
                <span>{{ __('messages.cta.btn_web') }}</span>
            </button>
        </div>

        <div class="mt-8 text-xs text-emerald-400/80">
            Organization Account DUNS: 764070770 • Verified Developer on Google Play
        </div>
    </div>
</section>

@endsection
