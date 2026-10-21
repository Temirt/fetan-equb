@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የፕላቲነም እቁብ (Platinum Upgrade) | ፈጣን እቁብ' : 'Platinum Upgrade | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#02180d] min-h-screen relative overflow-hidden">
    <!-- Ambient gold and emerald glows -->
    <div class="absolute -top-40 right-0 w-[500px] h-[500px] bg-amber-400/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-400/20 border border-amber-400/50 text-amber-300 text-xs font-bold uppercase tracking-wider mb-4 shadow-lg shadow-amber-400/10">
                <span>👑</span> {{ __('messages.platinum.badge') }}
            </div>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white mb-6">
                {{ __('messages.platinum.headline') }}
            </h1>
            <p class="text-emerald-100/90 text-base sm:text-xl leading-relaxed">
                {{ __('messages.platinum.body') }}
            </p>
        </div>

        <!-- Platinum Feature Pillars -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- Pillar 1 -->
            <div class="glow-card rounded-3xl p-8 border-2 border-amber-400/40 bg-gradient-to-br from-[#063b22] to-[#032012]">
                <div class="w-14 h-14 rounded-2xl bg-amber-400/20 border border-amber-400/50 text-amber-300 flex items-center justify-center text-2xl font-bold mb-6">
                    ⚡
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    {{ app()->getLocale() === 'am' ? 'የወረፋ ቅድሚያ (Queue Leapfrog)' : 'Algorithmic Queue Leapfrog' }}
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    {{ __('messages.platinum.feature1') }}
                </p>
                <div class="text-xs text-amber-300 font-mono">
                    • Advance payment credits inject instant velocity into your payout timeline.
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="glow-card rounded-3xl p-8 border-2 border-amber-400/40 bg-gradient-to-br from-[#063b22] to-[#032012]">
                <div class="w-14 h-14 rounded-2xl bg-amber-400/20 border border-amber-400/50 text-amber-300 flex items-center justify-center text-2xl font-bold mb-6">
                    🛡️
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    {{ app()->getLocale() === 'am' ? 'የ6 ወር ሙሉ ዋስትና' : '6-Month Maximum Guarantee' }}
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    {{ __('messages.platinum.feature2') }}
                </p>
                <div class="text-xs text-amber-300 font-mono">
                    • Maximum 180 calendar days before pot disbursement is legally sealed.
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="glow-card rounded-3xl p-8 border-2 border-amber-400/40 bg-gradient-to-br from-[#063b22] to-[#032012]">
                <div class="w-14 h-14 rounded-2xl bg-amber-400/20 border border-amber-400/50 text-amber-300 flex items-center justify-center text-2xl font-bold mb-6">
                    💼
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    {{ app()->getLocale() === 'am' ? 'የግል ፖርትፎሊዮ አስተዳዳሪ' : 'Dedicated Executive Liaison' }}
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    {{ __('messages.platinum.feature3') }}
                </p>
                <div class="text-xs text-amber-300 font-mono">
                    • Direct phone hotline and customized bank RTGS settlement instructions.
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="glow-card rounded-3xl p-8 border-2 border-amber-400/40 bg-gradient-to-br from-[#063b22] to-[#032012]">
                <div class="w-14 h-14 rounded-2xl bg-amber-400/20 border border-amber-400/50 text-amber-300 flex items-center justify-center text-2xl font-bold mb-6">
                    📈
                </div>
                <h3 class="text-2xl font-bold text-white mb-3">
                    {{ app()->getLocale() === 'am' ? 'እስከ 10 ሚሊዮን ብር ከፍተኛ እቁብ' : 'Expanded Pots to 10,000,000 ETB' }}
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed mb-4">
                    {{ __('messages.platinum.feature4') }}
                </p>
                <div class="text-xs text-amber-300 font-mono">
                    • Structured for equipment procurement, commercial import, and inventory restocking.
                </div>
            </div>
        </div>

        <!-- Upgrade Action Card -->
        <div class="rounded-3xl p-8 sm:p-12 bg-gradient-to-r from-amber-400 via-amber-300 to-amber-500 text-emerald-950 text-center shadow-2xl">
            <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">
                {{ app()->getLocale() === 'am' ? 'ዛሬውኑ ወደ ፕላቲነም ያሳድጉ' : 'Activate Your Platinum Account Today' }}
            </h2>
            <p class="text-emerald-950/80 font-medium max-w-xl mx-auto mb-8 text-sm sm:text-base">
                {{ app()->getLocale() === 'am' ? 'የንግድ ድርጅትዎን የገንዘብ አቅም ያፋጥኑ። የቪአይፒ ድጋፍ ሰጪ ቡድናችን የ6 ወር ዋስትናዎን ለማዘጋጀት ዝግጁ ነው።' : 'Accelerate your financial milestone. Speak directly with a dedicated corporate portfolio manager or start on web.' }}
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <button data-open-equb-modal class="w-full sm:w-auto px-8 py-4 rounded-xl font-extrabold text-white bg-emerald-950 hover:bg-emerald-900 transition-all shadow-xl">
                    {{ __('messages.nav.start_equb') }}
                </button>
                <a href="tel:+251911287374" class="w-full sm:w-auto px-8 py-4 rounded-xl font-bold text-emerald-950 border-2 border-emerald-950/40 hover:bg-amber-400 transition-colors">
                    📞 Call VIP Desk (+251911287374)
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
