@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የፕላቲነም እቁብ (Platinum Upgrade) | ፈጣን እቁብ' : 'Platinum Upgrade | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#111111] text-white min-h-screen relative overflow-hidden">
    <!-- Subtle emerald ambient glow -->
    <div class="absolute -top-40 right-0 w-[500px] h-[500px] bg-[#20BF78]/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#20BF78]/10 border border-[#20BF78]/40 text-[#20BF78] text-xs font-bold uppercase tracking-wider mb-4">
                <span>👑</span> VIP Program
            </div>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-6">
                Want to get paid faster? Upgrade to Platinum.
            </h1>
            <p class="text-slate-300 text-base sm:text-xl leading-relaxed">
                For business owners and professionals who want speed. Platinum members can make unlimited advance payments to jump the queue and secure a 6-month guarantee.
            </p>
        </div>

        <!-- Platinum Feature Pillars -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- Pillar 1 -->
            <div class="rounded-3xl p-8 border border-[#20BF78]/30 bg-[#0B1B13] shadow-md">
                <div class="w-12 h-12 rounded-2xl bg-[#20BF78]/20 border border-[#20BF78]/40 text-[#20BF78] flex items-center justify-center text-2xl font-bold mb-6">
                    ⚡
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    Algorithmic Queue Priority
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    Advance contributions mathematically advance your slot in the payout queue, backed by verified pool liquidity rules.
                </p>
                <div class="text-xs text-[#20BF78] font-mono">
                    • Advance payment credits inject instant velocity into your payout timeline.
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="rounded-3xl p-8 border border-[#20BF78]/30 bg-[#0B1B13] shadow-md">
                <div class="w-12 h-12 rounded-2xl bg-[#20BF78]/20 border border-[#20BF78]/40 text-[#20BF78] flex items-center justify-center text-2xl font-bold mb-6">
                    🛡️
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    6-Month Payout Milestone
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    Platinum schedules cap the maximum wait window at 180 calendar days subject to program participation criteria.
                </p>
                <div class="text-xs text-[#20BF78] font-mono">
                    • Clear milestones governed under contractual program terms.
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="rounded-3xl p-8 border border-[#20BF78]/30 bg-[#0B1B13] shadow-md">
                <div class="w-12 h-12 rounded-2xl bg-[#20BF78]/20 border border-[#20BF78]/40 text-[#20BF78] flex items-center justify-center text-2xl font-bold mb-6">
                    💼
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    Dedicated Portfolio Manager
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    Executive 24/7 VIP desk, priority phone routing, and direct bank liaison for RTGS and escrow disbursement.
                </p>
                <div class="text-xs text-[#20BF78] font-mono">
                    • Direct hotline and institutional support desk.
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="rounded-3xl p-8 border border-[#20BF78]/30 bg-[#0B1B13] shadow-md">
                <div class="w-12 h-12 rounded-2xl bg-[#20BF78]/20 border border-[#20BF78]/40 text-[#20BF78] flex items-center justify-center text-2xl font-bold mb-6">
                    📈
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    Pots up to ETB 10,000,000
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    Access high-limit capital lines engineered for inventory restocking, heavy equipment purchases, and commercial import.
                </p>
                <div class="text-xs text-[#20BF78] font-mono">
                    • Structured commercial savings limits for registered enterprises.
                </div>
            </div>
        </div>

        <!-- Upgrade Action Card -->
        <div class="rounded-3xl p-8 sm:p-12 bg-white text-[#111111] text-center shadow-2xl border border-[#E5EAE7]">
            <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">
                Activate Your Platinum Membership
            </h2>
            <p class="text-[#444B48] font-medium max-w-xl mx-auto mb-8 text-sm sm:text-base">
                Speak directly with an enterprise portfolio manager or download the app to enroll.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl font-bold text-white bg-[#20BF78] hover:bg-[#15965C] transition-all shadow-md">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>Download on Google Play</span>
                </a>
                <a href="tel:+251911287374" class="w-full sm:w-auto px-8 py-4 rounded-xl font-bold text-[#111111] border border-[#E5EAE7] hover:border-[#20BF78] hover:text-[#20BF78] transition-colors">
                    📞 Call VIP Desk (+251911287374)
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
