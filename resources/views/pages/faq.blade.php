@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'ተደጋጋሚ ጥያቄዎች (FAQ) | ፈጣን እቁብ' : 'Frequently Asked Questions (FAQ) | Fetan Equb'))

@section('content')
<section class="py-20 bg-white min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-3">
                Knowledge Base
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-4">
                Frequently Asked Questions
            </h1>
            <p class="text-[#444B48] text-base sm:text-lg">
                Clear answers regarding the open-line model, regulatory status, and security.
            </p>
        </div>

        <!-- FAQ Items Container -->
        <div class="space-y-4">
            @php
            $faqs = [
                [
                    'q' => 'What is an Open-Line Equb and how does it differ from traditional Equb?',
                    'a' => 'Traditional Equb relies on small, closed circles of participants (e.g. 10 or 20 people) who must wait for the group to fill, draw lots blindly, and wait their turn. Fetan Equb operates under granted Patent No. ET UM 1170B1 on an infinite open line. You don’t wait for others to start, there is no lottery drawing, and you know your exact projected payout date from day one.'
                ],
                [
                    'q' => 'Can I truly exit and withdraw my funds anytime without penalties?',
                    'a' => 'Yes. In traditional Equbs, leaving early typically forfeits your contributions or incurs severe social penalties. With Fetan Equb, financial freedom is guaranteed: you can request a full withdrawal of your accrued savings at any point with zero exit fees or penalties.'
                ],
                [
                    'q' => 'How is the payout date calculated and what does "No Last Person" mean?',
                    'a' => 'Your position in the open line, your daily saving commitment, and your Consistency Score mathematically determine your payout date. Because thousands of continuous participants join the open pool, network velocity accelerates payouts. Traditional closed circles leave the final recipient paying for months while inflation diminishes their purchasing power; in Fetan Equb, dynamic liquidity expansion ensures no participant is left as a disadvantaged last person.'
                ],
                [
                    'q' => 'Where is my money physically held and how secure is the platform?',
                    'a' => 'Fetan Equb does not commingle user savings with corporate operational capital. All deposits are held in a segregated custodial escrow account with top-tier commercial partner banks in Ethiopia. The platform is certified by INSA (Information Network Security Administration), cleared by the National Bank of Ethiopia (NBE), and secured with bank-grade AES-256 encryption.'
                ],
                [
                    'q' => 'What payment methods are supported for daily contributions?',
                    'a' => 'You can fund your open-line Equb seamlessly through Telebirr, CBE Birr (Commercial Bank of Ethiopia), Safaricom M-PESA, or debit cards/bank transfers via Chapa.'
                ],
                [
                    'q' => 'What is the Platinum Upgrade and how does queue priority work?',
                    'a' => 'Platinum is engineered for entrepreneurs and corporate accounts requiring accelerated capital. Platinum holders can make lump-sum advance contributions which legally and mathematically move their slot forward in the algorithmic queue, backed by a strict 6-month maximum payout guarantee.'
                ],
                [
                    'q' => 'Is Fetan Equb legally registered in Ethiopia?',
                    'a' => 'Absolutely. Fetan Equb is operated by Dolce Technologies One Member PLC, officially registered with Business License AACATB/14/706/50187949/2018, TIN 0104256231, Addis Ababa, Kirkos Sub-city, Woreda 01, House No. 10. The invention is protected by Granted Patent No. ET UM 1170B1.'
                ],
                [
                    'q' => 'What happens if I miss a daily contribution?',
                    'a' => 'You are never penalized financially. However, consistent daily payments boost your Consistency Score, accelerating your queue priority. A missed payment temporarily pauses score acceleration until caught up, slightly adjusting your projected payout timeline.'
                ]
            ];
            @endphp

            @foreach($faqs as $item)
            <div class="card-premium rounded-2xl overflow-hidden shadow-xs">
                <button type="button" class="faq-toggle w-full px-6 py-5 text-left flex justify-between items-center gap-4 text-[#111111] hover:text-[#20BF78] transition-colors">
                    <span class="text-base sm:text-lg font-bold">{{ $item['q'] }}</span>
                    <span class="faq-icon transform transition-transform duration-300 text-[#20BF78] text-xl font-bold shrink-0">
                        ↓
                    </span>
                </button>
                <div class="faq-content hidden px-6 pb-6 pt-1 text-sm sm:text-base text-[#444B48] leading-relaxed border-t border-[#E5EAE7]">
                    <p>{{ $item['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA footer card in FAQ -->
        <div class="mt-16 card-premium rounded-3xl p-8 text-center border border-[#E5EAE7] bg-[#F7F9F8]">
            <h3 class="text-xl font-bold text-[#111111] mb-2">Still have unanswered questions?</h3>
            <p class="text-sm text-[#444B48] mb-6 max-w-md mx-auto">
                Our support team is available to walk you through open-line mechanics and registration.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="tel:+251911287374" class="px-6 py-3 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white font-bold text-sm transition-all shadow-sm">
                    📞 +251911287374
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-white border border-[#E5EAE7] text-[#111111] font-bold text-sm hover:border-[#20BF78] hover:text-[#20BF78] transition-colors">
                    Contact Advisory Desk
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
