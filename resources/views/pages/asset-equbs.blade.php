@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የንብረት እቁቦች (Asset Equbs) | ፈጣን እቁብ' : 'Asset Equbs | Fetan Equb'))

@section('content')
<section class="py-20 bg-white min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4">
                <span>🎯</span> Goal-Oriented Wealth Generation
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-6">
                Asset-Backed Equb Programs
            </h1>
            <p class="text-[#444B48] text-base sm:text-lg leading-relaxed">
                Save specifically toward tangible life goals. Select a daily contribution, see your exact payout date, and receive either cash lump sums or pre-negotiated asset vouchers.
            </p>
        </div>

        <!-- Asset Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- Asset 1: Car -->
            <div class="card-premium rounded-3xl p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-center text-3xl">
                            🚗
                        </div>
                        <span class="px-3 py-1 rounded-full bg-[#F7F9F8] text-[#15965C] text-xs font-bold border border-[#E5EAE7]">
                            Automotive Tier
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#111111] mb-2">Automobile Equb</h3>
                    <p class="text-sm text-[#444B48] mb-6 leading-relaxed">
                        Designed for personal sedans, commercial transport, and family vehicles without predatory bank loans or debt.
                    </p>
                    <div class="space-y-2.5 text-xs text-[#444B48] mb-6 bg-[#F7F9F8] p-4 rounded-xl border border-[#E5EAE7]">
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Target Range:</span>
                            <span class="font-bold text-[#111111]">ETB 1,200,000 - 3,500,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Daily Saving:</span>
                            <span class="font-bold text-[#15965C]">From 250 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Merchant Settlement:</span>
                            <span class="font-bold text-[#111111]">Direct Dealership Escrow Available</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-bold text-sm shadow-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>Start Automobile Equb</span>
                </a>
            </div>

            <!-- Asset 2: Motorcycle -->
            <div class="card-premium rounded-3xl p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-center text-3xl">
                            🏍️
                        </div>
                        <span class="px-3 py-1 rounded-full bg-[#F7F9F8] text-[#15965C] text-xs font-bold border border-[#E5EAE7]">
                            Commercial Mobility
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#111111] mb-2">Motorcycle & Logistics Equb</h3>
                    <p class="text-sm text-[#444B48] mb-6 leading-relaxed">
                        Rapid capital accumulation for delivery dispatchers, courier operations, and personal transport.
                    </p>
                    <div class="space-y-2.5 text-xs text-[#444B48] mb-6 bg-[#F7F9F8] p-4 rounded-xl border border-[#E5EAE7]">
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Target Range:</span>
                            <span class="font-bold text-[#111111]">ETB 200,000 - 450,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Daily Saving:</span>
                            <span class="font-bold text-[#15965C]">From 100 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Typical Payout:</span>
                            <span class="font-bold text-[#111111]">Accelerated Velocity Window</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-bold text-sm shadow-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>Start Motorcycle Equb</span>
                </a>
            </div>

            <!-- Asset 3: Business Working Capital -->
            <div class="card-premium rounded-3xl p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-center text-3xl">
                            💼
                        </div>
                        <span class="px-3 py-1 rounded-full bg-[#F7F9F8] text-[#15965C] text-xs font-bold border border-[#E5EAE7]">
                            Enterprise Capital
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#111111] mb-2">Business Working Capital</h3>
                    <p class="text-sm text-[#444B48] mb-6 leading-relaxed">
                        Empowering retail merchants, importers, and businesses with zero-interest community liquidity.
                    </p>
                    <div class="space-y-2.5 text-xs text-[#444B48] mb-6 bg-[#F7F9F8] p-4 rounded-xl border border-[#E5EAE7]">
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Target Range:</span>
                            <span class="font-bold text-[#111111]">ETB 500,000 - 5,000,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Daily Saving:</span>
                            <span class="font-bold text-[#15965C]">From 500 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Advantage:</span>
                            <span class="font-bold text-[#111111]">No Collateral Required</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-bold text-sm shadow-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>Start Business Equb</span>
                </a>
            </div>

            <!-- Asset 4: Furnished Home / Real Estate -->
            <div class="card-premium rounded-3xl p-8 flex flex-col justify-between shadow-xs">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-center text-3xl">
                            🏠
                        </div>
                        <span class="px-3 py-1 rounded-full bg-[#F7F9F8] text-[#15965C] text-xs font-bold border border-[#E5EAE7]">
                            Real Estate & Living
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#111111] mb-2">Furnished Home Equb</h3>
                    <p class="text-sm text-[#444B48] mb-6 leading-relaxed">
                        Secure home down-payments, complete interior furnishing, or real estate acquisition capital.
                    </p>
                    <div class="space-y-2.5 text-xs text-[#444B48] mb-6 bg-[#F7F9F8] p-4 rounded-xl border border-[#E5EAE7]">
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Target Range:</span>
                            <span class="font-bold text-[#111111]">ETB 2,000,000 - 10,000,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Daily Saving:</span>
                            <span class="font-bold text-[#15965C]">From 1,000 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#444B48]">Payout Options:</span>
                            <span class="font-bold text-[#111111]">Lump Sum or Developer Escrow</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-bold text-sm shadow-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>Start Home Equb</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
