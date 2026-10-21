@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የንብረት እቁቦች (Asset Equbs) | ፈጣን እቁብ' : 'Asset Equbs | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#02180d] min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-amber-400/40 text-amber-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>🎯</span> Goal-Oriented Wealth Generation
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-6">
                {{ app()->getLocale() === 'am' ? 'የህልምዎን ንብረት በእቁብዎ ያሳኩ' : 'Asset-Backed Equb Programs' }}
            </h1>
            <p class="text-emerald-200/80 text-base sm:text-lg leading-relaxed">
                {{ app()->getLocale() === 'am' ? 'ለመኪና፣ ለሞተር ሳይክል፣ ለንግድ ማስፋፊያ ወይም ሙሉ ለሙሉ ለተሟላ ቤት በየቀኑ በትንሹ ይቆጥቡ፤ ህይወት የሚቀይረውን ገንዘብዎን በተወሰነ ቀን ይረከቡ።' : 'Save specifically toward tangible life goals. Select a daily contribution, lock in your exact payout date, and receive either cash lump sums or pre-negotiated merchant vouchers.' }}
            </p>
        </div>

        <!-- Asset Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- Asset 1: Car -->
            <div class="glow-card rounded-3xl p-8 border border-emerald-700/60 flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-400/10 border border-amber-400/40 flex items-center justify-center text-3xl">
                            🚗
                        </div>
                        <span class="px-3 py-1 rounded-full bg-emerald-900 text-amber-300 text-xs font-bold border border-emerald-700">
                            Automotive Tier
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-white mb-2">
                        {{ app()->getLocale() === 'am' ? 'የመኪና እቁብ (Car Equb)' : 'Automobile Equb' }}
                    </h3>
                    <p class="text-sm text-slate-300 mb-6 leading-relaxed">
                        {{ app()->getLocale() === 'am' ? 'ለአዳዲስና ለአነስተኛ ጥቅም ላይ ለዋሉ ዘመናዊ መኪኖች የሚሆን የቁጠባ መርሃ-ግብር።' : 'Designed for family sedans, ride-hailing vehicles, and personal transport without predatory auto loans.' }}
                    </p>
                    <div class="space-y-2 text-xs text-emerald-200 mb-6 bg-emerald-950/60 p-4 rounded-xl border border-emerald-800">
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Target Range:</span>
                            <span class="font-bold text-white">ETB 1,200,000 - 3,500,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Daily Saving:</span>
                            <span class="font-bold text-amber-300">From 250 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Merchant Partners:</span>
                            <span class="font-bold text-white">Direct Dealership Settlement Available</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-amber-400 hover:bg-amber-300 text-emerald-950 font-extrabold text-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>{{ __('messages.hero.cta_primary') }}</span>
                </a>
            </div>

            <!-- Asset 2: Motorcycle -->
            <div class="glow-card rounded-3xl p-8 border border-emerald-700/60 flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-400/10 border border-amber-400/40 flex items-center justify-center text-3xl">
                            🏍️
                        </div>
                        <span class="px-3 py-1 rounded-full bg-emerald-900 text-amber-300 text-xs font-bold border border-emerald-700">
                            Commercial Mobility
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-white mb-2">
                        {{ app()->getLocale() === 'am' ? 'የሞተር ሳይክል እቁብ' : 'Motorcycle & Logistics Equb' }}
                    </h3>
                    <p class="text-sm text-slate-300 mb-6 leading-relaxed">
                        {{ app()->getLocale() === 'am' ? 'ለዴሊቨሪ፣ ለንግድ ማመላለሻ እና ለግል ትራንስፖርት ተስማሚ የሆነ ፈጣን የቁጠባ መስመር።' : 'Rapid capital accumulation for delivery dispatchers, courier businesses, and commuters.' }}
                    </p>
                    <div class="space-y-2 text-xs text-emerald-200 mb-6 bg-emerald-950/60 p-4 rounded-xl border border-emerald-800">
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Target Range:</span>
                            <span class="font-bold text-white">ETB 200,000 - 450,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Daily Saving:</span>
                            <span class="font-bold text-amber-300">From 100 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Typical Payout:</span>
                            <span class="font-bold text-white">Accelerated Velocity Window</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-amber-400 hover:bg-amber-300 text-emerald-950 font-extrabold text-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>{{ __('messages.hero.cta_primary') }}</span>
                </a>
            </div>

            <!-- Asset 3: Business Working Capital -->
            <div class="glow-card rounded-3xl p-8 border border-emerald-700/60 flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-400/10 border border-amber-400/40 flex items-center justify-center text-3xl">
                            💼
                        </div>
                        <span class="px-3 py-1 rounded-full bg-emerald-900 text-amber-300 text-xs font-bold border border-emerald-700">
                            Enterprise Capital
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-white mb-2">
                        {{ app()->getLocale() === 'am' ? 'የንግድ ማስፋፊያ እቁብ' : 'Business Working Capital' }}
                    </h3>
                    <p class="text-sm text-slate-300 mb-6 leading-relaxed">
                        {{ app()->getLocale() === 'am' ? 'ያለ ባንክ ማስያዣ እና ያለ ከፍተኛ ወለድ ንግድዎን ለማስፋፋትና እቃ ለመሙላት የሚረዳ።' : 'Empowering merchants, importers, and service providers with zero-interest community liquidity.' }}
                    </p>
                    <div class="space-y-2 text-xs text-emerald-200 mb-6 bg-emerald-950/60 p-4 rounded-xl border border-emerald-800">
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Target Range:</span>
                            <span class="font-bold text-white">ETB 500,000 - 5,000,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Daily Saving:</span>
                            <span class="font-bold text-amber-300">From 500 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Advantage:</span>
                            <span class="font-bold text-white">No Collateral Required</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-amber-400 hover:bg-amber-300 text-emerald-950 font-extrabold text-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>{{ __('messages.hero.cta_primary') }}</span>
                </a>
            </div>

            <!-- Asset 4: Furnished Home / Real Estate -->
            <div class="glow-card rounded-3xl p-8 border border-emerald-700/60 flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-amber-400/10 border border-amber-400/40 flex items-center justify-center text-3xl">
                            🏠
                        </div>
                        <span class="px-3 py-1 rounded-full bg-emerald-900 text-amber-300 text-xs font-bold border border-emerald-700">
                            Real Estate & Living
                        </span>
                    </div>
                    <h3 class="text-2xl font-extrabold text-white mb-2">
                        {{ app()->getLocale() === 'am' ? 'ሙሉ ለሙሉ የተሟላ ቤት እቁብ' : 'Furnished Home Equb' }}
                    </h3>
                    <p class="text-sm text-slate-300 mb-6 leading-relaxed">
                        {{ app()->getLocale() === 'am' ? 'የቤት እድሳት፣ የቤት እቃዎች ግዢ ወይም የአፓርትመንት ቅድመ-ክፍያ ቁጠባ።' : 'Secure home down-payments, complete interior furnishing, or real estate acquisition capital.' }}
                    </p>
                    <div class="space-y-2 text-xs text-emerald-200 mb-6 bg-emerald-950/60 p-4 rounded-xl border border-emerald-800">
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Target Range:</span>
                            <span class="font-bold text-white">ETB 2,000,000 - 10,000,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Daily Saving:</span>
                            <span class="font-bold text-amber-300">From 1,000 ETB / day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-emerald-400">Payout Options:</span>
                            <span class="font-bold text-white">Cash Lump Sum or Developer Escrow</span>
                        </div>
                    </div>
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.dolcetechnologies.fetanequb" target="_blank" class="w-full inline-flex items-center justify-center gap-2 py-3.5 rounded-xl bg-amber-400 hover:bg-amber-300 text-emerald-950 font-extrabold text-sm transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M3.609 1.814L13.792 12 3.61 22.186a2.006 2.006 0 0 1-.61-1.464V3.278c0-.573.226-1.1.61-1.464zm11.242 11.244l2.42 2.42-12.78 7.379 10.36-9.799zm2.42-2.116l3.35 1.934c.82.474.82 1.242 0 1.716l-3.35 1.934-2.203-2.203 2.203-3.381zm-2.42-2.116L4.491.963 17.27 8.342l-2.42 2.42z"/></svg>
                    <span>{{ __('messages.hero.cta_primary') }}</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
