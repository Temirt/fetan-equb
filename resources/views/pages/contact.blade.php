@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'ያግኙን (Contact Us) | ፈጣን እቁብ' : 'Contact Us | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#02180d] min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-emerald-700 text-emerald-300 text-xs font-bold uppercase tracking-wider mb-4">
                <span>📍</span> Headquarters & Customer Support
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-4">
                {{ __('messages.nav.contact') }}
            </h1>
            <p class="text-emerald-200/80 text-base sm:text-lg">
                {{ app()->getLocale() === 'am' ? 'በአዲስ አበባ ቢሮአችን በአካል መጥተው ሊጎበኙን ወይም በስልክና በኢሜይል ሊያገኙን ይችላሉ።' : 'Get in touch with our team in Addis Ababa or submit an inquiry directly below.' }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Contact & Company Information -->
            <div class="space-y-6">
                <div class="glow-card rounded-3xl p-8 border border-emerald-700/60 space-y-6">
                    <div>
                        <h2 class="text-2xl font-extrabold text-white mb-2">{{ __('messages.footer.company_name') }}</h2>
                        <div class="text-sm font-semibold text-amber-300">{{ __('messages.footer.trading_name') }}</div>
                    </div>

                    <div class="space-y-4 text-sm text-slate-300">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-900 border border-emerald-700 flex items-center justify-center text-amber-300 text-lg flex-shrink-0">
                                📍
                            </div>
                            <div>
                                <span class="font-bold text-white block">Office Address:</span>
                                <span>{{ __('messages.footer.address') }}</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-900 border border-emerald-700 flex items-center justify-center text-amber-300 text-lg flex-shrink-0">
                                📞
                            </div>
                            <div>
                                <span class="font-bold text-white block">Direct Telephone Hotline:</span>
                                <a href="tel:{{ __('messages.footer.phone') }}" class="text-amber-300 hover:underline font-bold">{{ __('messages.footer.phone') }}</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-900 border border-emerald-700 flex items-center justify-center text-amber-300 text-lg flex-shrink-0">
                                📧
                            </div>
                            <div>
                                <span class="font-bold text-white block">Official Email:</span>
                                <a href="mailto:{{ __('messages.footer.email') }}" class="text-amber-300 hover:underline font-bold">{{ __('messages.footer.email') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-emerald-800 text-xs text-emerald-400/90 space-y-2">
                        <div class="flex justify-between">
                            <span>Tax ID (TIN):</span>
                            <span class="font-mono font-bold text-white">0104256231</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Business License:</span>
                            <span class="font-mono font-bold text-white">AACATB/14/706/50187949/2018</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Patent Registry:</span>
                            <span class="font-mono font-bold text-amber-300">Granted No. ET UM 1170B1</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Google Play DUNS:</span>
                            <span class="font-mono font-bold text-white">764070770</span>
                        </div>
                    </div>
                </div>

                <!-- Office Hours Card -->
                <div class="glow-card rounded-2xl p-6 border border-emerald-800/80 text-xs text-slate-300 flex justify-between items-center">
                    <div>
                        <span class="font-bold text-white block mb-0.5">Customer Support Hours</span>
                        <span>Monday - Saturday: 8:30 AM - 6:30 PM (EAT)</span>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-emerald-500/20 text-emerald-300 font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 mr-1.5 animate-pulse"></span>
                        Active
                    </span>
                </div>
            </div>

            <!-- Interactive Message Form -->
            <div class="glow-card rounded-3xl p-8 border border-emerald-700/60">
                <h3 class="text-2xl font-bold text-white mb-2">
                    {{ app()->getLocale() === 'am' ? 'መልዕክት ይላኩልን' : 'Send Us a Direct Message' }}
                </h3>
                <p class="text-xs text-emerald-300/80 mb-6">
                    {{ app()->getLocale() === 'am' ? 'ጥያቄ፣ አስተያየት ወይም የትብብር ጥያቄዎን ያስገቡ፤ በደቂቃዎች ውስጥ መልስ እንሰጥዎታለን።' : 'Inquire about corporate pools, partnership integration, or assistance with your open-line account.' }}
                </p>

                <form onsubmit="event.preventDefault(); alert('Thank you! Your message has been received by Fetan Equb Support.'); this.reset();" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-emerald-200 mb-1">Full Name</label>
                        <input type="text" required placeholder="Abebe Bikila" class="w-full px-4 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white placeholder-emerald-600 focus:outline-none focus:border-amber-400 text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-emerald-200 mb-1">Phone Number / Email</label>
                        <input type="text" required placeholder="+251911287374 or your@email.com" class="w-full px-4 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white placeholder-emerald-600 focus:outline-none focus:border-amber-400 text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-emerald-200 mb-1">Subject</label>
                        <select class="w-full px-4 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white focus:outline-none focus:border-amber-400 text-sm">
                            <option>Open-Line Equb Registration</option>
                            <option>Platinum VIP Program</option>
                            <option>Payment / Telebirr Inquiry</option>
                            <option>Patent & Partnership</option>
                            <option>Other Feedback</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-emerald-200 mb-1">Message</label>
                        <textarea rows="4" required placeholder="How can our financial advisory desk assist you today?" class="w-full px-4 py-2.5 rounded-xl bg-emerald-950/70 border border-emerald-700/60 text-white placeholder-emerald-600 focus:outline-none focus:border-amber-400 text-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-amber-400 hover:bg-amber-300 text-emerald-950 font-extrabold text-sm shadow-xl transition-all">
                        {{ app()->getLocale() === 'am' ? 'መልዕክቱን ላክ' : 'Send Inquiry' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
