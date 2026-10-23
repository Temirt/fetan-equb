@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'በዓለም የመጀመሪያው ክፍት መስመር እቁብ | ፈጣን እቁብ' : 'The First Open-Line Equb in the World | Fetan Equb'))

@section('content')

<!-- ==================================================
     3. HERO SECTION (Dark Green / Near-Black Background, Glowing Line)
     ================================================== -->
<section class="relative min-h-[88vh] flex items-center justify-center overflow-hidden bg-[#0B1B13] text-white pt-12 pb-24 border-b border-[#20BF78]/20">
    <!-- Subtle Infinite Glowing Line Canvas -->
    <canvas id="heroLineCanvas" class="absolute inset-0 w-full h-full pointer-events-none z-0"></canvas>

    <!-- Subtle ambient lighting -->
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-[#20BF78]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Trust badge pill -->
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-[#20BF78]/40 text-[#20BF78] text-xs sm:text-sm font-semibold mb-8 backdrop-blur-sm">
            <span class="w-2 h-2 rounded-full bg-[#20BF78] animate-pulse"></span>
            <span>Granted Patent No. ET UM 1170B1 • INSA Certified • NBE Cleared</span>
        </div>

        <!-- Headline -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white mb-6 leading-[1.15]">
            @if(app()->getLocale() === 'am')
                በዓለም የመጀመሪያው <span class="text-[#20BF78]">ክፍት መስመር እቁብ</span>።
            @else
                The First <span class="text-[#20BF78]">Open-Line Equb</span> in the World.
            @endif
        </h1>

        <!-- Supporting Text -->
        <p class="text-lg sm:text-2xl text-slate-200 font-medium max-w-3xl mx-auto mb-10 leading-relaxed">
            @if(app()->getLocale() === 'am')
                በማንኛውም ጊዜ ይቀላቀሉ። በማንኛውም ጊዜ ይውጡ። ትክክለኛ የክፍያ ቀንዎን አስቀድመው ይወቁ። እጣ የለም። የመጨረሻ ተረካቢ የለም።
            @else
                Join anytime. Exit anytime. See your exact payout date. No lottery. No last person.
            @endif
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
            <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl font-bold text-base text-white bg-[#20BF78] hover:bg-[#15965C] shadow-lg shadow-[#20BF78]/25 hover:scale-[1.02] active:scale-[0.98] transition-all">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                <span>{{ app()->getLocale() === 'am' ? 'ዛሬውኑ እቁብዎን ይጀምሩ' : 'Start Your Equb Today' }}</span>
            </a>
            <a href="#how-it-works" class="w-full sm:w-auto px-8 py-4 rounded-xl font-semibold text-base text-white bg-white/10 border border-white/20 hover:bg-white/15 hover:border-[#20BF78]/60 transition-all backdrop-blur-sm">
                {{ app()->getLocale() === 'am' ? 'እንዴት እንደሚሰራ ይመልከቱ' : 'See How It Works' }}
            </a>
        </div>

        <!-- Open-Line Graphic representation -->
        <div class="relative max-w-2xl mx-auto px-4">
            <div class="h-1 w-full rounded-full open-equb-line"></div>
            <div class="flex justify-between items-center text-[11px] text-slate-300 font-mono mt-3 uppercase tracking-wider">
                <span>← Continuous Entry</span>
                <span class="text-[#20BF78] font-bold">Patented Open-Line Queue</span>
                <span>Infinite Horizon →</span>
            </div>
        </div>

        <!-- Metric Stat Cards (Minimalist, Trustworthy) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mt-14">
            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center backdrop-blur-xs">
                <div class="text-2xl sm:text-3xl font-extrabold text-[#20BF78]">1,000,000</div>
                <div class="text-xs text-slate-300 mt-1 font-medium">Single Pot Capacity</div>
            </div>
            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center backdrop-blur-xs">
                <div class="text-2xl sm:text-3xl font-extrabold text-white">100%</div>
                <div class="text-xs text-slate-300 mt-1 font-medium">Calculated Payout Accuracy</div>
            </div>
            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center backdrop-blur-xs">
                <div class="text-xl sm:text-2xl font-extrabold text-[#20BF78]">Advance Pay</div>
                <div class="text-xs text-slate-300 mt-1 font-medium">Advanced payment gets you to your pot</div>
            </div>
            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-center backdrop-blur-xs">
                <div class="text-xl sm:text-2xl font-extrabold text-white">AI Consistency</div>
                <div class="text-xs text-slate-300 mt-1 font-medium">Consistency score with AI</div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Partners Strip (Clean Soft Gray) -->
<div class="bg-[#F7F9F8] border-b border-[#E5EAE7] py-6 px-4">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <span class="text-xs font-bold text-[#444B48] uppercase tracking-wider">
            Integrated With Ethiopia's Major Payment Networks:
        </span>
        <div class="flex flex-wrap items-center justify-center gap-4 text-xs font-semibold">
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-[#E5EAE7] text-[#111111] shadow-xs">
                <span class="w-2 h-2 rounded-full bg-[#15965C]"></span>
                <span>Telebirr (ቴሌብር)</span>
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-[#E5EAE7] text-[#111111] shadow-xs">
                <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                <span>CBE Birr (ሲቢኢ ብር)</span>
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-[#E5EAE7] text-[#111111] shadow-xs">
                <span class="w-2 h-2 rounded-full bg-red-500"></span>
                <span>Safaricom M-PESA</span>
            </div>
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-white border border-[#E5EAE7] text-[#111111] shadow-xs">
                <span class="w-2 h-2 rounded-full bg-[#20BF78]"></span>
                <span>Chapa Gateway</span>
            </div>
        </div>
    </div>
</div>

<!-- ==================================================
     4. THE PROBLEM — THE OLD WAY (Soft Gray Background #F7F9F8)
     ================================================== -->
<section id="the-problem" class="py-24 bg-[#F7F9F8] border-b border-[#E5EAE7]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-50 border border-red-200 text-red-700 text-xs font-bold uppercase tracking-wider mb-4">
                The Problem
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-6">
                Why Traditional Equb Traps You.
            </h2>
            <p class="text-[#444B48] text-base sm:text-lg leading-relaxed">
                For generations, Ethiopians have saved through Equb. But the traditional system was built for small, closed circles. It forces you to wait for a group to fill, it locks your money in, and someone always loses at the end. Banks ignore the unbanked, and microfinance traps you in high-interest debt.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="card-problem p-6 rounded-2xl shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center font-bold text-sm mb-4 border border-red-100">
                    ✕
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Closed Circles</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">You can't join until a group forms.</p>
            </div>

            <!-- Card 2 -->
            <div class="card-problem p-6 rounded-2xl shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center font-bold text-sm mb-4 border border-red-100">
                    ✕
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">The Lottery</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">You don't know your payout date.</p>
            </div>

            <!-- Card 3 -->
            <div class="card-problem p-6 rounded-2xl shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center font-bold text-sm mb-4 border border-red-100">
                    ✕
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Trapped Savings</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">You can't exit without losing your money.</p>
            </div>

            <!-- Card 4 -->
            <div class="card-problem p-6 rounded-2xl shadow-xs">
                <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center font-bold text-sm mb-4 border border-red-100">
                    ✕
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">The Last Person</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">Someone always loses their savings to inflation.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================================================
     5. THE SOLUTION — THE FETAN EQUB WAY (Pure White Background #FFFFFF)
     ================================================== -->
<section id="the-solution" class="py-24 bg-white border-b border-[#E5EAE7]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4">
                The Solution
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-6">
                Equb with Freedom.
            </h2>
            <p class="text-[#444B48] text-base sm:text-lg leading-relaxed">
                We took the cultural trust of Equb and rebuilt it for the digital age. Fetan Equb replaces the closed circle with an infinite open line. You don't wait for others. You start today.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Feature 1 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center font-bold text-lg mb-5 border border-[#20BF78]/30">
                    ✓
                </div>
                <h3 class="text-xl font-bold text-[#111111] mb-2">Join Anytime</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">Start alone or with millions. The line is always open.</p>
            </div>

            <!-- Feature 2 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center font-bold text-lg mb-5 border border-[#20BF78]/30">
                    ✓
                </div>
                <h3 class="text-xl font-bold text-[#111111] mb-2">Visible Payout Date</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">See exactly when you get paid from day one. No guessing.</p>
            </div>

            <!-- Feature 3 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center font-bold text-lg mb-5 border border-[#20BF78]/30">
                    ✓
                </div>
                <h3 class="text-xl font-bold text-[#111111] mb-2">Exit Anytime</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">Your savings come with you. No penalties. No traps.</p>
            </div>

            <!-- Feature 4 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center font-bold text-lg mb-5 border border-[#20BF78]/30">
                    ✓
                </div>
                <h3 class="text-xl font-bold text-[#111111] mb-2">No Last Person</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">As long as people join, everyone wins.</p>
            </div>

            <!-- Feature 5 (Wide card) -->
            <div class="card-premium p-7 rounded-2xl md:col-span-2 lg:col-span-2 bg-gradient-to-br from-white to-[#EAFBF2]/30">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center font-bold text-lg mb-5 border border-[#20BF78]/30">
                    ✓
                </div>
                <h3 class="text-xl font-bold text-[#111111] mb-2">Scalable</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">The first system capable of holding 1 million people in one pot.</p>
                <div class="mt-4 pt-4 border-t border-[#E5EAE7] flex items-center gap-2 text-xs font-semibold text-[#15965C]">
                    <span>🛡️ Patent No. ET UM 1170B1</span>
                    <span class="text-[#444B48] font-normal">• Mathematical queue model verified under Ethiopian patent examination.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================================================
     6. HOW IT WORKS (Connected Process Steps)
     ================================================== -->
<section id="how-it-works" class="py-24 bg-[#F7F9F8] border-b border-[#E5EAE7]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-[#E5EAE7] text-[#111111] text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
                Simple & Transparent
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-6">
                Three Steps to Financial Freedom.
            </h2>
            <p class="text-[#444B48] text-base sm:text-lg leading-relaxed">
                Reinventing community savings with an algorithmic open line accessible on your mobile phone.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <!-- Step 1 -->
            <div class="card-premium p-8 rounded-2xl relative">
                <div class="w-12 h-12 rounded-full bg-[#20BF78] text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    1
                </div>
                <div class="text-xs font-bold uppercase tracking-wider text-[#15965C] mb-2">Step 1</div>
                <h3 class="text-xl font-bold text-[#111111] mb-3">Choose Your Goal</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    Save for a car, a motorcycle, a business, or a fully furnished home. Choose the daily amount that fits your life.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="card-premium p-8 rounded-2xl relative">
                <div class="w-12 h-12 rounded-full bg-[#20BF78] text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    2
                </div>
                <div class="text-xs font-bold uppercase tracking-wider text-[#15965C] mb-2">Step 2</div>
                <h3 class="text-xl font-bold text-[#111111] mb-3">Save Daily</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    Make your daily contributions using Telebirr, M-PESA, CBE Birr, or Chapa. Watch your Consistency Score rise with AI optimization.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="card-premium p-8 rounded-2xl relative">
                <div class="w-12 h-12 rounded-full bg-[#20BF78] text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    3
                </div>
                <div class="text-xs font-bold uppercase tracking-wider text-[#15965C] mb-2">Step 3</div>
                <h3 class="text-xl font-bold text-[#111111] mb-3">Get Paid</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    When the pot fills, you receive your life-changing lump sum. The more people join, the faster your payout date moves forward.
                </p>
            </div>
        </div>

        <div class="mt-14 text-center">
            <a href="{{ route('how-it-works') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl font-bold text-sm text-[#111111] bg-white border border-[#E5EAE7] hover:border-[#20BF78] hover:text-[#20BF78] transition-colors shadow-xs">
                <span>Learn more about the open-line model</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ==================================================
     INTERACTIVE EQUB SIMULATOR (Redesigned with White Cards & Brand Theme)
     ================================================== -->
<section id="simulator" class="py-24 bg-white border-b border-[#E5EAE7]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-3">
                ⚡ Algorithmic Projection Engine
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#111111] mb-3">Interactive Equb Simulator</h2>
            <p class="text-[#444B48] text-sm sm:text-base">Calculate your payout date and see how the open line works in real time.</p>
        </div>

        <div class="card-premium rounded-3xl p-6 sm:p-10 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Inputs Side -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-[#111111] mb-2">Select Your Goal</label>
                        <select id="calcGoal" class="w-full px-4 py-3 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] font-medium focus:outline-none focus:border-[#20BF78]">
                            <option value="1500000" selected>🚗 Automobile / መኪና (1,500,000 ETB)</option>
                            <option value="250000">🏍️ Motorbike / ሞተር ሳይክል (250,000 ETB)</option>
                            <option value="500000">💼 Business Capital / ንግድ ማስፋፊያ (500,000 ETB)</option>
                            <option value="3000000">🏠 Furnished Apartment / ሙሉ ቤት (3,000,000 ETB)</option>
                            <option value="custom">⚙️ Custom Target / ብጁ መጠን</option>
                        </select>
                    </div>

                    <div id="calcCustomAmount" class="hidden">
                        <label class="block text-sm font-bold text-[#111111] mb-2">Custom Target Amount (ETB)</label>
                        <input type="number" step="5000" value="100000" class="w-full px-4 py-3 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] focus:outline-none focus:border-[#20BF78]">
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="text-sm font-bold text-[#111111]">Daily Contribution (ETB)</label>
                            <span id="calcDailyDisplay" class="text-base font-extrabold text-[#15965C]">250 ETB</span>
                        </div>
                        <input id="calcDailySlider" type="range" min="50" max="5000" step="50" value="250" class="w-full accent-[#20BF78] h-2 bg-[#E5EAE7] rounded-lg cursor-pointer">
                        <div class="flex justify-between text-[11px] text-[#444B48] mt-1 font-medium">
                            <span>50 ETB / day</span>
                            <span>500 ETB / day</span>
                            <span>5,000 ETB / day</span>
                        </div>
                    </div>

                    <div class="p-4 rounded-xl bg-[#EAFBF2] border border-[#20BF78]/30 text-xs text-[#15965C] leading-relaxed">
                        <span class="font-bold">💡 Open-Line Velocity:</span>
                        Because thousands join an aggregated line rather than a closed circle, contributions continuously accelerate overall payout timelines.
                    </div>
                </div>

                <!-- Projection Result Card -->
                <div class="rounded-2xl bg-[#0B1B13] text-white p-7 sm:p-8 text-center relative overflow-hidden shadow-md">
                    <div class="text-xs uppercase font-bold text-[#20BF78] tracking-wider mb-2">Estimated Payout Date</div>
                    <div id="calcDateDisplay" class="text-3xl sm:text-4xl font-extrabold text-white mb-2">
                        --
                    </div>
                    <div id="calcSpeedupDisplay" class="inline-block px-3 py-1 rounded-full bg-[#20BF78]/20 text-[#20BF78] text-xs font-bold border border-[#20BF78]/40 mb-6">
                        65% Faster than solo saving
                    </div>

                    <div class="grid grid-cols-2 gap-3 pt-4 border-t border-white/10 text-left text-xs mb-6">
                        <div>
                            <span class="text-slate-400 block">Total Target Pool</span>
                            <span id="calcTargetDisplay" class="font-bold text-white text-sm">1,500,000 ETB</span>
                        </div>
                        <div>
                            <span class="text-slate-400 block">Days to Maturity</span>
                            <span id="calcDaysDisplay" class="font-bold text-[#20BF78] text-sm">-- Days</span>
                        </div>
                    </div>

                    <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-4 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-bold text-sm shadow-md transition-all">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                        <span>Start This Equb in App</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================================================
     7. TRUST AND CREDIBILITY (Clean White Background)
     ================================================== -->
<section id="trust" class="py-24 bg-[#F7F9F8] border-b border-[#E5EAE7]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-[#E5EAE7] text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
                Traction & Security
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-6">
                Built for Trust. Backed by Innovation.
            </h2>
            <p class="text-[#444B48] text-base sm:text-lg leading-relaxed">
                Operating with institutional-grade compliance and legal clarity in East Africa.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Credibility 1 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    🛡️
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Patent Protected</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    Granted Patent No. ET UM 1170B1 in Ethiopia. (Provisional filed in the USA).
                </p>
            </div>

            <!-- Credibility 2 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    📜
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Fully Certified</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    INSA Certified and NBE Cleared.
                </p>
            </div>

            <!-- Credibility 3 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    📱
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Live on Google Play</h3>
                <p class="text-sm text-[#444B48] leading-relaxed mb-3">
                    Download the app today with a verified Organization Account (DUNS: 764070770).
                </p>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="text-xs font-bold text-[#15965C] hover:text-[#20BF78] inline-flex items-center gap-1">
                    <span>View Listing</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>

            <!-- Credibility 4 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    🤝
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Integrated</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    Powered by Telebirr, M-PESA, CBE Birr, and Chapa.
                </p>
            </div>

            <!-- Credibility 5 (Double wide) -->
            <div class="card-premium p-7 rounded-2xl md:col-span-2 lg:col-span-2 bg-gradient-to-br from-white to-[#EAFBF2]/40">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    🌍
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">The Million-Person Equb</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    We are the only platform mathematically capable of hosting 1,000,000+ people in a single savings pool.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==================================================
     8. PLATINUM UPGRADE (Premium Dark Background #111111)
     ================================================== -->
<section id="platinum" class="py-24 bg-[#111111] text-white border-b border-white/10 relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl p-8 sm:p-14 border border-white/10 bg-[#0B1B13] relative overflow-hidden shadow-2xl">
            <!-- Subtle emerald glow -->
            <div class="absolute -right-20 -top-20 w-72 h-72 bg-[#20BF78]/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#20BF78]/10 border border-[#20BF78]/40 text-[#20BF78] text-xs font-bold uppercase tracking-wider mb-4">
                    <span>👑</span> Platinum Upgrade
                </div>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                    Want to get paid faster? Upgrade to Platinum.
                </h2>
                <p class="text-slate-300 text-base sm:text-lg leading-relaxed mb-8">
                    For business owners and professionals who want speed. Platinum members can make unlimited advance payments to jump the queue and secure a 6-month guarantee.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8 text-sm text-slate-200">
                    <div class="flex items-start gap-2.5">
                        <span class="text-[#20BF78] font-bold">✓</span>
                        <span>Queue Priority: Advance contributions advance payout queues.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-[#20BF78] font-bold">✓</span>
                        <span>6-Month Guarantee: Maximum payout timeline capped strictly at 180 days.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-[#20BF78] font-bold">✓</span>
                        <span>Dedicated Portfolio Manager: VIP desk and bank settlement liaisons.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-[#20BF78] font-bold">✓</span>
                        <span>Higher Pot Limits: Access pots up to ETB 10,000,000 for procurement.</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('platinum') }}" class="px-8 py-4 rounded-xl font-bold text-base text-white bg-[#20BF78] hover:bg-[#15965C] transition-all shadow-md">
                        Explore Platinum
                    </a>
                    <a href="tel:+251911287374" class="px-6 py-4 rounded-xl font-semibold text-base text-white border border-white/20 hover:bg-white/10 transition-colors">
                        Call VIP Line (+251911287374)
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================================================
     9. TRUST AND SECURITY SECTION (Pure White Background #FFFFFF)
     ================================================== -->
<section id="trust-security" class="py-24 bg-white border-b border-[#E5EAE7]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4">
                <span>🔒</span> Bank-Level Security
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-6">
                Your Money is Safe.
            </h2>
            <p class="text-[#444B48] text-base sm:text-lg leading-relaxed">
                Fetan Equb operates as a secure technology platform. Funds are held in a segregated custodial account with our partner commercial banking institution. We use bank-level encryption (AES-256), Web Application Firewalls (WAF), and daily reconciliation to protect your savings. We do not operate as a bank or take external loans; your savings are always yours.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Security Pillar 1 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    🏦
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Segregated Custodial Accounts</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    User funds are maintained in segregated escrow at regulated commercial banks in Ethiopia, completely partitioned from operational capital.
                </p>
            </div>

            <!-- Security Pillar 2 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    🔐
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">AES-256 Military Encryption</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    All transactions, database records, and API communications are secured with industry-standard cryptographic protocols and active firewalls.
                </p>
            </div>

            <!-- Security Pillar 3 -->
            <div class="card-premium p-7 rounded-2xl">
                <div class="w-11 h-11 rounded-xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl mb-4 border border-[#20BF78]/30">
                    ⚖️
                </div>
                <h3 class="text-lg font-bold text-[#111111] mb-2">Daily Bank Reconciliation</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    Every Birr deposited or disbursed is verified and reconciled against commercial banking statements on a strict 24-hour cycle.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==================================================
     10. BOTTOM CALL TO ACTION (Emerald Green #20BF78 or Deep Green)
     ================================================== -->
<section class="py-24 bg-[#0B1B13] text-white text-center relative overflow-hidden">
    <!-- Subtle Open-Line Graphic -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
        <div class="w-full h-0.5 bg-gradient-to-r from-transparent via-[#20BF78] to-transparent"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
            Financial Access Should Not Be a Lottery. It Should Be a Guarantee.
        </h2>
        <p class="text-lg sm:text-xl text-slate-200 max-w-2xl mx-auto mb-10 leading-relaxed">
            Stop waiting for a circle. Start your open line today and take control of your financial future.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-10 py-4 rounded-xl font-extrabold text-base text-white bg-[#20BF78] hover:bg-[#15965C] shadow-lg shadow-[#20BF78]/30 hover:scale-105 active:scale-95 transition-all">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                    <path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/>
                </svg>
                <span>Download on Google Play</span>
            </a>
        </div>

        <div class="mt-8 text-xs text-slate-400">
            Organization Account DUNS: 764070770 • Verified Developer on Google Play
        </div>
    </div>
</section>

@endsection
