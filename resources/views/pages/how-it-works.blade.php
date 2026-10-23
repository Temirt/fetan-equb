@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'እንዴት እንደሚሰራ | ፈጣን እቁብ' : 'How It Works | Fetan Equb'))

@section('content')
<section class="py-20 bg-white min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4">
                <span>⚡</span> Simple & Transparent
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-6">
                Three Steps to Financial Freedom.
            </h1>
            <p class="text-[#444B48] text-base sm:text-lg leading-relaxed">
                Save for a car, motorcycle, business capital, or furnished home with automated algorithmic payouts on your mobile phone.
            </p>
        </div>

        <!-- Visual Step Progression -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="card-premium p-8 rounded-2xl relative">
                <div class="w-12 h-12 rounded-full bg-[#20BF78] text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    1
                </div>
                <div class="text-xs uppercase font-extrabold text-[#15965C] tracking-wider mb-2">Step 1</div>
                <h3 class="text-xl font-bold text-[#111111] mb-3">Choose Your Goal</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    Save for a car, a motorcycle, a business, or a fully furnished home. Choose the daily amount that fits your life.
                </p>
            </div>

            <div class="card-premium p-8 rounded-2xl relative">
                <div class="w-12 h-12 rounded-full bg-[#20BF78] text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    2
                </div>
                <div class="text-xs uppercase font-extrabold text-[#15965C] tracking-wider mb-2">Step 2</div>
                <h3 class="text-xl font-bold text-[#111111] mb-3">Save Daily</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    Make your daily contributions using Telebirr, M-PESA, CBE Birr, or Chapa. Watch your Consistency Score rise.
                </p>
            </div>

            <div class="card-premium p-8 rounded-2xl relative">
                <div class="w-12 h-12 rounded-full bg-[#20BF78] text-white font-extrabold text-lg flex items-center justify-center mb-6 shadow-sm">
                    3
                </div>
                <div class="text-xs uppercase font-extrabold text-[#15965C] tracking-wider mb-2">Step 3</div>
                <h3 class="text-xl font-bold text-[#111111] mb-3">Get Paid</h3>
                <p class="text-sm text-[#444B48] leading-relaxed">
                    When the pot fills, you receive your life-changing lump sum. The more people join, the faster your payout date moves forward.
                </p>
            </div>
        </div>

        <!-- Comparison Table: Traditional Equb vs Fetan Equb -->
        <div class="mb-20">
            <div class="text-center mb-10">
                <h2 class="text-2xl sm:text-4xl font-extrabold text-[#111111] mb-3">
                    Traditional Equb vs. Fetan Equb Open-Line
                </h2>
                <p class="text-sm text-[#444B48]">
                    Why our patented open-line model changes community finance
                </p>
            </div>

            <div class="overflow-x-auto card-premium rounded-2xl shadow-sm">
                <table class="w-full text-left text-sm">
                    <thead class="bg-[#F7F9F8] text-xs uppercase tracking-wider text-[#111111] border-b border-[#E5EAE7]">
                        <tr>
                            <th class="p-4 sm:p-5 font-bold">Feature</th>
                            <th class="p-4 sm:p-5 text-red-600 font-bold">Traditional Equb (The Old Way)</th>
                            <th class="p-4 sm:p-5 text-[#15965C] font-bold">Fetan Equb (Open-Line)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#E5EAE7] text-[#444B48]">
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#111111]">Group Joining</td>
                            <td class="p-4 sm:p-5 text-red-700">✕ Closed circles: Must wait for group to assemble</td>
                            <td class="p-4 sm:p-5 text-[#15965C] font-semibold">✓ Join anytime: Start alone or with millions</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#111111]">Payout Timing</td>
                            <td class="p-4 sm:p-5 text-red-700">✕ The lottery: You don't know your payout date</td>
                            <td class="p-4 sm:p-5 text-[#15965C] font-semibold">✓ Visible payout date: See exact date from day one</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#111111]">Withdrawal & Exit</td>
                            <td class="p-4 sm:p-5 text-red-700">✕ Trapped savings: Can't exit without penalties</td>
                            <td class="p-4 sm:p-5 text-[#15965C] font-semibold">✓ Exit anytime: Your savings come with you</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#111111]">The Last Person</td>
                            <td class="p-4 sm:p-5 text-red-700">✕ Someone always loses savings to inflation</td>
                            <td class="p-4 sm:p-5 text-[#15965C] font-semibold">✓ No last person: As long as people join, everyone wins</td>
                        </tr>
                        <tr>
                            <td class="p-4 sm:p-5 font-semibold text-[#111111]">Scale & Capacity</td>
                            <td class="p-4 sm:p-5 text-red-700">✕ Limited to 10–50 members per circle</td>
                            <td class="p-4 sm:p-5 text-[#15965C] font-semibold">✓ Scalable: First system holding 1M people in 1 pot</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Patent Spotlight Banner -->
        <div class="rounded-3xl p-8 sm:p-12 bg-[#0B1B13] text-white border border-[#20BF78]/30 text-center shadow-lg">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#20BF78]/10 text-[#20BF78] text-xs font-bold border border-[#20BF78]/40 mb-4">
                Granted Patent No. ET UM 1170B1
            </div>
            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                The First System Capable of 1,000,000 People in One Pot
            </h3>
            <p class="text-slate-300 max-w-2xl mx-auto text-sm sm:text-base mb-8 leading-relaxed">
                By combining continuous liquidity injection with non-stochastic queue progression, Fetan Equb mathematically guarantees open-line queue stability.
            </p>
            <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-bold text-white bg-[#20BF78] hover:bg-[#15965C] shadow-lg transition-all">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                <span>Start Your Equb in App</span>
            </a>
        </div>
    </div>
</section>
@endsection
