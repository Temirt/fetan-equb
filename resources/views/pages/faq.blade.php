@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'ተደጋጋሚ ጥያቄዎች (FAQ) | ፈጣን እቁብ' : 'Frequently Asked Questions (FAQ) | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#02180d] min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400/10 border border-amber-400/30 text-amber-300 text-xs font-bold uppercase tracking-wider mb-3">
                {{ app()->getLocale() === 'am' ? 'የጥያቄና መልስ ማዕከል' : 'Knowledge Base' }}
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-4">
                {{ app()->getLocale() === 'am' ? 'ተደጋጋሚ ጥያቄዎች እና መልሶች' : 'Frequently Asked Questions' }}
            </h1>
            <p class="text-emerald-200/80 text-base sm:text-lg">
                {{ app()->getLocale() === 'am' ? 'ስለ ክፍት መስመር እቁብ፣ ስለ ክፍያና ደህንነት ማወቅ የሚፈልጉትን ሁሉ እዚህ ያገኛሉ።' : 'Everything you need to know about the open-line Equb, payouts, and bank-grade security.' }}
            </p>
        </div>

        <!-- FAQ Items Container -->
        <div class="space-y-4">
            @php
            $faqs = app()->getLocale() === 'am' ? [
                [
                    'q' => 'ክፍት መስመር እቁብ (Open-Line Equb) ምንድን ነው? ከባህላዊው እቁብ በምን ይለያል?',
                    'a' => 'ባህላዊው እቁብ የተወሰኑ ጥቂት ሰዎች (ለምሳሌ 10 ወይም 20 ሰዎች) ክብ ሆነው እስኪሞሉ የሚጠበቅበት እና በየሳምንቱ ወይም በየወሩ እጣ እየጣሉ አንዱ ተረካቢ የሚሆንበት ነው። ፈጣን እቁብ ግን በኢትዮጵያ ህጋዊ የፓተንት ጥበቃ ቁጥር ET UM 1170B1 የተሰጠው "ክፍት መስመር" ቴክኖሎጂ ነው። እዚህ ጋር ሰው እስኪሞላ አይጠብቁም፤ እጣ የለም፤ በማንኛውም ቀን መቀላቀል ይችላሉ፤ የክፍያ ቀንዎ ከመጀመሪያው ቀን ጀምሮ በሒሳባዊ ቀመር በግልጽ ይታወቃል።'
                ],
                [
                    'q' => 'በእርግጥ በማንኛውም ጊዜ ገንዘቤን ማውጣት እችላለሁ? (Exit Anytime)',
                    'a' => 'አዎ! በባህላዊው እቁብ አጋማሽ ላይ ለመውጣት ቢፈልጉ ገንዘብዎ ይታገታል ወይም ይቀጣል፤ አሊያም ሌሎች አባላት እስካልፈቀዱ አይችሉም። በፈጣን እቁብ ግን በማንኛውም ጊዜ ውሳኔዎን ቀይረው ያጠራቀሙትን ቁጠባ ያለምንም ቅጣት እና ወጥመድ ሙሉ በሙሉ ማውጣት ይችላሉ።'
                ],
                [
                    'q' => 'የክፍያ ቀኔ እንዴት ነው የሚሰላው? "የመጨረሻ ሰው የለም" ሲባል ምን ማለት ነው?',
                    'a' => 'በክፍት መስመር ስርዓት ውስጥ የገቡበት ቅደም ተከተል፣ የቀን የቁጠባ መጠንዎ እና የቁርጠኝነት ነጥብዎ (Consistency Score) ተደምረው ትክክለኛውን የክፍያ ቀን ይወስናሉ። አዳዲስ አባላት በየቀኑ መስመሩን ሲቀላቀሉ አጠቃላይ የገንዘብ ፍሰቱ ስለሚጨምር የክፍያ ቀንዎ ወደፊት በፍጥነት እየተጠጋ ይመጣል። ማለቂያ የሌለው ክፍት መስመር በመሆኑ እንደ ባህላዊው እቁብ "የመጨረሻ ሰው" ሆኖ በዋጋ ግሽበት ገንዘቡ የሚጎዳበት አሰራር የለም።'
                ],
                [
                    'q' => 'የቆጠብኩት ገንዘብ የት ነው የሚቀመጠው? ምን ያህል አስተማማኝ ነው?',
                    'a' => 'ገንዘብዎ በድርጅታችን የሥራ ማስኬጃ ሂሳብ ውስጥ በፍጹም አይቀላቀልም። በኢትዮጵያ ውስጥ ከሚገኙ ታዋቂ የንግድ ባንኮች ጋር በተከፈተ የተለየ የደህንነት ሂሳብ (Segregated Custodial Escrow Account) ውስጥ ይቀመጣል። ስርዓቱ በኢንፎርሜሽን መረብ ደህንነት አስተዳደር (INSA) የተረጋገጠና በብሔራዊ ባንክ (NBE) የታወቀ ነው። እንዲሁም በAES-256 ወታደራዊ የቴክኖሎጂ ምስጠራ የተጠበቀ ነው።'
                ],
                [
                    'q' => 'የቀን ቁጠባዬን በምን አይነት የክፍያ መንገዶች መክፈል እችላለሁ?',
                    'a' => 'በኢትዮጵያ ውስጥ ያሉትን ሁሉንም ዋና ዋና የክፍያ አማራጮች እንደግፋለን፡ ቴሌብር (Telebirr)፣ የኢትዮጵያ ንግድ ባንክ ሲቢኢ ብር (CBE Birr)፣ የሳፋሪኮም ኤም-ፔሳ (M-PESA) እና የቻፓ (Chapa) የክፍያ ጌትዌይ።'
                ],
                [
                    'q' => 'የፕላቲነም (Platinum) እቁብ ምንድን ነው? ቅድሚያ እንዴት ያሰጣል?',
                    'a' => 'የፕላቲነም እቁብ በተለይ ለንግድ ድርጅቶችና ለባለሙያዎች የተዘጋጀ ነው። የፕላቲነም አባላት ያልተገደበ የቅድሚያ ክፍያ በመፈጸም የወረፋ ቅድሚያ (Queue Leapfrog) ያገኛሉ፤ እንዲሁም ከፍተኛው የመረከቢያ ጊዜ በ6 ወር (180 ቀናት) ሙሉ ዋስትና የተገደበ ነው።'
                ],
                [
                    'q' => 'ፈጣን እቁብ በኢትዮጵያ ህጋዊ እውቅና አለው?',
                    'a' => 'በእርግጥ! ድርጅታችን ዶልቼ ቴክኖሎጂስ የአንድ አባል ኃ/የተ/የግ/ማህበር (Dolce Technologies One Member PLC) በንግድ ስም ፈጣን እቁብ ቴክኖሎጂስ (Fetan Equb Technologies) በሚል የንግድ ፈቃድ ቁጥር AACATB/14/706/50187949/2018 እና የግብር ከፋይ ቁጥር TIN: 0104256231 ተመዝግቦ በህጋዊ መንገድ የሚሰራ ነው። የክፍት መስመር ቴክኖሎጂውም በኢትዮጵያ የፈጠራ ባለቤትነት መብት (Patent No. ET UM 1170B1) ተሰጥቶታል።'
                ],
                [
                    'q' => 'የቀን ቁጠባ አንድ ቀን ቢዘገይብኝ ምን ይከሰታል?',
                    'a' => 'ምንም አይነት ቅጣት አይጣልብዎትም። ነገር ግን የቀን መዋጮዎትን በሰዓቱ ባለመክፈልዎ የቁርጠኝነት ነጥብዎ (Consistency Score) ለጊዜው ይቀንሳል፤ ይህም የክፍያ ቀንዎ በትንሹ እንዲዘገይ ሊያደርግ ይችላል። ልክ ክፍያውን እንዳካካሱ ነጥብዎ ይመለሳል።'
                ]
            ] : [
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
                    'a' => 'Your position in the open line, your daily saving commitment, and your Consistency Score mathematically determine your payout date. Because thousands of continuous participants join the open pool, network velocity accelerates payouts. Traditional closed circles leave the final recipient paying for months while inflation diminishes their purchasing power; in Fetan Equb, dynamic liquidity expansion ensures no participant is left as a disadvantaged "last person".'
                ],
                [
                    'q' => 'Where is my money physically held and how secure is the platform?',
                    'a' => 'Fetan Equb does not commingle user savings with corporate operational capital. All deposits are held in a segregated custodial escrow account with top-tier commercial partner banks in Ethiopia. The platform is certified by INSA (Information Network Security Administration), cleared by the National Bank of Ethiopia (NBE), and secured with military-grade AES-256 encryption.'
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

            @foreach($faqs as $index => $item)
            <div class="glow-card rounded-2xl border border-emerald-800/60 overflow-hidden">
                <button type="button" class="faq-toggle w-full px-6 py-5 text-left flex justify-between items-center gap-4 text-white hover:text-amber-300 transition-colors">
                    <span class="text-base sm:text-lg font-bold">{{ $item['q'] }}</span>
                    <span class="faq-icon transform transition-transform duration-300 text-amber-400 text-xl font-bold flex-shrink-0">
                        ↓
                    </span>
                </button>
                <div class="faq-content hidden px-6 pb-6 pt-1 text-sm sm:text-base text-slate-300 leading-relaxed border-t border-emerald-800/30">
                    <p>{{ $item['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA footer card in FAQ -->
        <div class="mt-16 glow-card rounded-2xl p-8 text-center border-2 border-amber-400/30">
            <h3 class="text-xl font-bold text-white mb-2">
                {{ app()->getLocale() === 'am' ? 'ተጨማሪ ጥያቄ አለዎት?' : 'Still have unanswered questions?' }}
            </h3>
            <p class="text-sm text-emerald-200/80 mb-6 max-w-md mx-auto">
                {{ app()->getLocale() === 'am' ? 'የደንበኞች አገልግሎት ቡድናችንን በቀጥታ በስልክ ወይም በኢሜይል ያነጋግሩ።' : 'Our support team is available 24/7 to walk you through open-line mechanics and registration.' }}
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="tel:+251911287374" class="px-6 py-3 rounded-xl bg-amber-400 text-emerald-950 font-bold text-sm hover:bg-amber-300 transition-colors">
                    📞 +251911287374
                </a>
                <a href="{{ route('contact') }}" class="px-6 py-3 rounded-xl bg-emerald-900 border border-emerald-700 text-white font-bold text-sm hover:bg-emerald-800 transition-colors">
                    {{ __('messages.nav.contact') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
