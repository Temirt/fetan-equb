@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'እንዴት እንደሚሰራ | ፈጣን እቁብ' : 'How It Works | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#02180d] min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-amber-400/40 text-amber-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>⚡</span> {{ __('messages.how_it_works.badge') }}
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                {{ __('messages.how_it_works.headline') }}
            </h1>
            <p class="text-emerald-200/80 text-base sm:text-lg leading-relaxed">
                {{ __('messages.how_it_works.subheadline') }}
            </p>
        </div>

        <!-- Visual Step Progression -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="glow-card p-8 rounded-2xl relative">
                <div class="w-14 h-14 rounded-xl bg-amber-400 text-emerald-950 font-black text-2xl flex items-center justify-center mb-6 shadow-lg shadow-amber-400/20">
                    1
                </div>
                <div class="text-xs uppercase font-extrabold text-amber-400 tracking-wider mb-2">{{ __('messages.how_it_works.step1_tag') }}</div>
                <h3 class="text-2xl font-bold text-white mb-3">{{ __('messages.how_it_works.step1_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.how_it_works.step1_desc') }}</p>
            </div>

            <div class="glow-card p-8 rounded-2xl relative">
                <div class="w-14 h-14 rounded-xl bg-amber-400 text-emerald-950 font-black text-2xl flex items-center justify-center mb-6 shadow-lg shadow-amber-400/20">
                    2
                </div>
                <div class="text-xs uppercase font-extrabold text-amber-400 tracking-wider mb-2">{{ __('messages.how_it_works.step2_tag') }}</div>
                <h3 class="text-2xl font-bold text-white mb-3">{{ __('messages.how_it_works.step2_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.how_it_works.step2_desc') }}</p>
            </div>

            <div class="glow-card p-8 rounded-2xl relative">
                <div class="w-14 h-14 rounded-xl bg-amber-400 text-emerald-950 font-black text-2xl flex items-center justify-center mb-6 shadow-lg shadow-amber-400/20">
                    3
                </div>
                <div class="text-xs uppercase font-extrabold text-amber-400 tracking-wider mb-2">{{ __('messages.how_it_works.step3_tag') }}</div>
                <h3 class="text-2xl font-bold text-white mb-3">{{ __('messages.how_it_works.step3_title') }}</h3>
                <p class="text-sm text-slate-300 leading-relaxed">{{ __('messages.how_it_works.step3_desc') }}</p>
            </div>
        </div>

        <!-- Comparison Table: Traditional Equb vs Fetan Equb -->
        <div class="mb-20">
            <div class="text-center mb-10">
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white mb-3">
                    {{ app()->getLocale() === 'am' ? 'ባህላዊ እቁብ ከፈጣን እቁብ ጋር ሲነጻጸር' : 'Traditional Equb vs. Fetan Equb Open-Line' }}
                </h2>
                <p class="text-sm text-emerald-300/80">
                    {{ app()->getLocale() === 'am' ? 'የፈጠራ ባለቤትነት መብት የተሰጠው ቴክኖሎጂ ጥቅሞች በጨረፍታ' : 'Why our patented open-line model changes community finance' }}
                </p>
            </div>

            <div class="overflow-x-auto glow-card rounded-2xl border border-emerald-800/80">
                <table class="w-full text-left text-sm">
                    <thead class="bg-emerald-950/90 text-xs uppercase tracking-wider text-emerald-300 border-b border-emerald-800">
                        <tr>
                            <th class="p-4 sm:p-5">Feature / ባህሪ</th>
                            <th class="p-4 sm:p-5 text-red-400">Traditional Equb (የድሮው)</th>
                            <th class="p-4 sm:p-5 text-amber-300">Fetan Equb (ፈጣን እቁብ)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-emerald-900/50 text-slate-300">
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Group Joining / መቀላቀል</td>
                            <td class="p-4 sm:p-5 text-red-300/90">❌ Must wait for circle of 10-20 to assemble</td>
                            <td class="p-4 sm:p-5 text-emerald-300 font-bold">✅ Join anytime instantly; the line never closes</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Payout Timing / የክፍያ ቀን</td>
                            <td class="p-4 sm:p-5 text-red-300/90">❌ Lottery drawing; unpredictable date</td>
                            <td class="p-4 sm:p-5 text-emerald-300 font-bold">✅ Exact calculated date visible from day one</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Withdrawal & Exit / ገንዘብ ማውጣት</td>
                            <td class="p-4 sm:p-5 text-red-300/90">❌ Money trapped; heavy exit penalties</td>
                            <td class="p-4 sm:p-5 text-emerald-300 font-bold">✅ Exit anytime with 100% of your savings intact</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Inflation Vulnerability / የዋጋ ግሽበት</td>
                            <td class="p-4 sm:p-5 text-red-300/90">❌ Last person loses substantial purchasing power</td>
                            <td class="p-4 sm:p-5 text-emerald-300 font-bold">✅ Dynamic liquidity pooling ensures no disadvantaged last person</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-white">Security & Regulation / ህጋዊነት</td>
                            <td class="p-4 sm:p-5 text-red-300/90">❌ Informal trust; no banking escrow protection</td>
                            <td class="p-4 sm:p-5 text-emerald-300 font-bold">✅ Granted Patent ET UM 1170B1, INSA Certified, Segregated Escrow</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Patent Spotlight Banner -->
        <div class="rounded-3xl p-8 sm:p-12 bg-gradient-to-r from-emerald-950 via-[#064326] to-emerald-950 border border-amber-400/40 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 text-xs font-bold border border-amber-400/30 mb-4">
                Granted Patent No. ET UM 1170B1
            </div>
            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                {{ app()->getLocale() === 'am' ? 'የሚሊዮን ሰዎች እቁብ የመያዝ አቅም' : 'The First System Capable of 1,000,000 People in One Pot' }}
            </h3>
            <p class="text-emerald-200/90 max-w-2xl mx-auto text-sm sm:text-base mb-8 leading-relaxed">
                {{ app()->getLocale() === 'am' ? 'የፈጣን እቁብ ክፍት መስመር አልጎሪዝም በኢትዮጵያ ብቻ ሳይሆን በአለም አቀፍ ደረጃ በሂሳባዊ መረጋጋቱ የተረጋገጠ አዲስ የፋይናንስ ፈጠራ ነው።' : 'By combining continuous liquidity injection with non-stochastic queue progression, Fetan Equb is mathematically proven to support over 1,000,000 active savers concurrently.' }}
            </p>
            <button data-open-equb-modal class="px-8 py-4 rounded-xl font-extrabold text-emerald-950 bg-amber-400 hover:bg-amber-300 shadow-xl transition-all">
                {{ __('messages.hero.cta_primary') }}
            </button>
        </div>
    </div>
</section>
@endsection
