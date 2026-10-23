@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'ያግኙን (Contact Us) | ፈጣን እቁብ' : 'Contact Us | Fetan Equb'))

@section('content')
<section class="py-20 bg-white min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4">
                <span>📍</span> Headquarters & Customer Support
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-4">
                Contact Us & Feedback
            </h1>
            <p class="text-[#444B48] text-base sm:text-lg">
                Get in touch with our team in Addis Ababa, submit a partnership inquiry, or share your valuable user feedback.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Contact & Company Information -->
            <div class="space-y-6">
                <div class="card-premium rounded-3xl p-8 space-y-6 shadow-xs">
                    <div>
                        <h2 class="text-2xl font-extrabold text-[#111111] mb-1">Dolce Technologies One Member PLC</h2>
                        <div class="text-sm font-semibold text-[#15965C]">Trading as Fetan Equb Technologies</div>
                    </div>

                    <div class="space-y-4 text-sm text-[#444B48]">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-center text-[#15965C] text-lg shrink-0">
                                📍
                            </div>
                            <div>
                                <span class="font-bold text-[#111111] block">Headquarters:</span>
                                <span>Addis Ababa, Kirkos Sub-city, Woreda 01, House No. 10</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-center text-[#15965C] text-lg shrink-0">
                                📞
                            </div>
                            <div>
                                <span class="font-bold text-[#111111] block">Direct Telephone Hotline:</span>
                                <a href="tel:+251911287374" class="text-[#15965C] hover:text-[#20BF78] font-bold">+251911287374</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-center text-[#15965C] text-lg shrink-0">
                                📧
                            </div>
                            <div>
                                <span class="font-bold text-[#111111] block">Official Email:</span>
                                <a href="mailto:fetanequb@gmail.com" class="text-[#15965C] hover:text-[#20BF78] font-bold">fetanequb@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-[#E5EAE7] text-xs text-[#444B48] space-y-2 bg-[#F7F9F8] p-4 rounded-2xl">
                        <div class="flex justify-between">
                            <span>Tax ID (TIN):</span>
                            <span class="font-mono font-bold text-[#111111]">0104256231</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Business License:</span>
                            <span class="font-mono font-bold text-[#111111]">AACATB/14/706/50187949/2018</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Patent Registry:</span>
                            <span class="font-mono font-bold text-[#15965C]">Granted No. ET UM 1170B1</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Google Play DUNS:</span>
                            <span class="font-mono font-bold text-[#111111]">764070770</span>
                        </div>
                    </div>
                </div>

                <!-- Office Hours Card -->
                <div class="card-premium rounded-2xl p-6 text-xs text-[#444B48] flex justify-between items-center shadow-xs">
                    <div>
                        <span class="font-bold text-[#111111] block mb-0.5">Support Desk Hours</span>
                        <span>Monday - Saturday: 8:30 AM - 6:30 PM (EAT)</span>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-[#EAFBF2] text-[#15965C] font-bold border border-[#20BF78]/30">
                        <span class="w-2 h-2 rounded-full bg-[#20BF78] mr-1.5 animate-pulse"></span>
                        Active
                    </span>
                </div>
            </div>

            <!-- Interactive Message & Feedback Form -->
            <div class="card-premium rounded-3xl p-8 shadow-xs">
                
                <!-- Tab Selector between Contact & Feedback -->
                <div class="flex items-center gap-2 mb-6 border-b border-[#E5EAE7] pb-3">
                    <button type="button" id="tabContactBtn" onclick="switchFormTab('contact')" class="px-4 py-2 rounded-xl text-xs font-bold transition-all bg-[#20BF78] text-white">
                        Send Direct Message
                    </button>
                    <button type="button" id="tabFeedbackBtn" onclick="switchFormTab('feedback')" class="px-4 py-2 rounded-xl text-xs font-bold transition-all bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]">
                        Give App / Service Feedback
                    </button>
                </div>

                <!-- Success Alert -->
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-2xl bg-[#EAFBF2] border border-[#20BF78]/40 text-xs font-bold text-[#15965C] flex items-center gap-3">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Errors Alert -->
                @if($errors->any())
                    <div class="mb-6 p-4 rounded-2xl bg-red-50 border border-red-200 text-xs font-semibold text-red-700 space-y-1">
                        @foreach($errors->all() as $error)
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>{{ $error }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Contact Inquiries Form -->
                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <h3 class="text-xl font-bold text-[#111111] mb-1">Direct Support & Partnership</h3>
                        <p class="text-xs text-[#444B48] mb-4">
                            Inquire about open-line savings pools, institutional partnerships, or technical assistance.
                        </p>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" required value="{{ old('name') }}" placeholder="Abebe Bikila" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Phone Number or Email Address <span class="text-red-500">*</span></label>
                        <input type="text" name="email_or_phone" required value="{{ old('email_or_phone') }}" placeholder="+251911287374 or your@email.com" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Subject</label>
                        <select name="subject" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] focus:outline-none focus:border-[#20BF78] text-sm">
                            <option value="Open-Line Equb Inquiry">Open-Line Equb Inquiry</option>
                            <option value="Platinum VIP Program">Platinum VIP Program</option>
                            <option value="Payment Network (Telebirr / M-PESA / CBE)">Payment Network (Telebirr / M-PESA / CBE)</option>
                            <option value="Patent & Business Partnership">Patent & Business Partnership</option>
                            <option value="General Question">General Question</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Message <span class="text-red-500">*</span></label>
                        <textarea name="message" rows="4" required placeholder="How can our financial advisory desk assist you today?" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-extrabold text-sm shadow-sm transition-all cursor-pointer">
                        Send Inquiry
                    </button>
                </form>

                <!-- Feedback Form -->
                <form id="feedbackForm" action="{{ route('feedback.submit') }}" method="POST" class="space-y-4 hidden">
                    @csrf
                    <div>
                        <h3 class="text-xl font-bold text-[#111111] mb-1">Share Your Experience & Feedback</h3>
                        <p class="text-xs text-[#444B48] mb-4">
                            Tell us what you like or how we can improve the Fetan Equb digital experience.
                        </p>
                    </div>

                    <!-- Star Rating Selector -->
                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1.5">Overall Satisfaction Rating</label>
                        <div class="flex items-center gap-2">
                            @for($i = 5; $i >= 1; $i--)
                                <label class="flex items-center gap-1 cursor-pointer px-3 py-1.5 rounded-xl border border-[#E5EAE7] hover:border-[#20BF78] bg-[#F7F9F8] text-xs font-bold">
                                    <input type="radio" name="rating" value="{{ $i }}" {{ $i === 5 ? 'checked' : '' }} class="text-[#20BF78] focus:ring-[#20BF78]">
                                    <span class="text-amber-500">★</span> {{ $i }}
                                </label>
                            @endfor
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Your Name <span class="text-red-500">*</span></label>
                        <input type="text" name="name" required value="{{ old('name') }}" placeholder="Selamawit" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Email or Phone (Optional for follow-up)</label>
                        <input type="text" name="email_or_phone" value="{{ old('email_or_phone') }}" placeholder="+251911287374 or your@email.com" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Feedback Category</label>
                        <select name="subject" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] focus:outline-none focus:border-[#20BF78] text-sm">
                            <option value="Mobile App Experience">Mobile App Experience</option>
                            <option value="Payment & Payout Speed">Payment & Payout Speed</option>
                            <option value="Feature Suggestion">Feature Suggestion</option>
                            <option value="Customer Support Review">Customer Support Review</option>
                            <option value="Other">Other Feedback</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-[#111111] mb-1">Your Feedback / Suggestions <span class="text-red-500">*</span></label>
                        <textarea name="message" rows="4" required placeholder="What do you think of the open-line equb experience? Any features you would love to see?" class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] text-sm">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-[#15965C] hover:bg-[#20BF78] text-white font-extrabold text-sm shadow-sm transition-all cursor-pointer">
                        Submit Feedback
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    function switchFormTab(tab) {
        const contactForm = document.getElementById('contactForm');
        const feedbackForm = document.getElementById('feedbackForm');
        const tabContactBtn = document.getElementById('tabContactBtn');
        const tabFeedbackBtn = document.getElementById('tabFeedbackBtn');

        if (tab === 'contact') {
            contactForm.classList.remove('hidden');
            feedbackForm.classList.add('hidden');
            tabContactBtn.className = 'px-4 py-2 rounded-xl text-xs font-bold transition-all bg-[#20BF78] text-white';
            tabFeedbackBtn.className = 'px-4 py-2 rounded-xl text-xs font-bold transition-all bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]';
        } else {
            contactForm.classList.add('hidden');
            feedbackForm.classList.remove('hidden');
            tabFeedbackBtn.className = 'px-4 py-2 rounded-xl text-xs font-bold transition-all bg-[#20BF78] text-white';
            tabContactBtn.className = 'px-4 py-2 rounded-xl text-xs font-bold transition-all bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]';
        }
    }
</script>
@endpush
@endsection
