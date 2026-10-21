@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የግል መረጃ ጥበቃ ፖሊሲ (Privacy Policy) | ፈጣን እቁብ' : 'Privacy Policy | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#02180d] min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="mb-12 border-b border-emerald-800/60 pb-8">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-emerald-700 text-emerald-300 text-xs font-bold uppercase tracking-wider mb-4">
                Data Protection & Privacy
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-4">
                {{ app()->getLocale() === 'am' ? 'የግል መረጃ ጥበቃ ፖሊሲ' : 'Privacy Policy' }}
            </h1>
            <p class="text-sm text-emerald-300/80">
                {{ app()->getLocale() === 'am' ? 'የመጨረሻ ማሻሻያ፡ 2026 ዓ.ም • ዶልቼ ቴክኖሎጂስ የአንድ አባል ኃ/የተ/የግ/ማህበር' : 'Last Updated: October 2026 • Dolce Technologies One Member PLC' }}
            </p>
        </div>

        <div class="prose prose-invert max-w-none space-y-8 text-slate-300 text-sm sm:text-base leading-relaxed">
            @if(app()->getLocale() === 'am')
                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">1. የመረጃ አሰባሰብ መርህ</h2>
                    <p>ፈጣን እቁብ (በዶልቼ ቴክኖሎጂስ የአንድ አባል ኃ/የተ/የግ/ማህበር የሚተዳደር) የተጠቃሚዎችን የግል እና የፋይናንስ መረጃ በከፍተኛ ጥንቃቄ ይጠብቃል። የምንሰበስባቸው መረጃዎች የሚከተሉትን ያካትታሉ፡</p>
                    <ul class="list-disc pl-5 space-y-1 text-slate-300 text-sm">
                        <li><strong>የመታወቂያ መረጃ፡</strong> ሙሉ ስም፣ የስልክ ቁጥር፣ እና ህጋዊ የደንበኛ ማረጋገጫ (KYC)።</li>
                        <li><strong>የክፍያ መረጃ፡</strong> በቴሌብር፣ ሲቢኢ ብር፣ ኤም-ፔሳ ወይም ቻፓ የተደረጉ የግብይት ማጣቀሻ ቁጥሮች (Transaction IDs)።</li>
                        <li><strong>የስርዓት አጠቃቀም መረጃ፡</strong> የቀን ቁጠባ ታሪክ፣ የቁርጠኝነት ነጥብ እና የመረከቢያ ቀጠሮዎች።</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">2. የመረጃ አጠቃቀም እና ዓላማ</h2>
                    <p>የተሰበሰበው መረጃ የሚውለው ለሚከተሉት አገልግሎቶች ብቻ ነው፡</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li>የእቁብ ክፍት መስመር ሂሳብዎን ለማስተዳደርና የቀን መዋጮዎችዎን ለማስላት።</li>
                        <li>እቁብዎ ሲደርስ የክፍያ ገንዘብዎን ያለምንም መዘግየት ወደ ተመረጠው የባንክ ወይም የሞባይል ገንዘብ ሂሳብ ለማስተላለፍ።</li>
                        <li>በኢንፎርሜሽን መረብ ደህንነት አስተዳደር (INSA) እና በኢትዮጵያ ብሔራዊ ባንክ (NBE) የተቀመጡ የደህንነት መስፈርቶችን ለማሟላት።</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">3. የደህንነት ጥበቃ ደረጃዎች (AES-256)</h2>
                    <p>የመረጃዎን ደህንነት ለመጠበቅ በዓለም አቀፍ ደረጃ የታወቁ የጥበቃ ቴክኖሎጂዎችን እንጠቀማለን፡</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li><strong>AES-256 ምስጠራ፡</strong> ሁሉም የዳታቤዝ መረጃዎችና የግብይት ዝርዝሮች በከፍተኛ ደረጃ የተመሰጠሩ ናቸው።</li>
                        <li><strong>WAF (Web Application Firewall)፡</strong> ያልተፈቀደ የሳይበር ጥቃትን ለመከላከል የቀጥታ የፋየርዎል ክትትል ይደረጋል።</li>
                        <li><strong>መረጃን ለሶስተኛ ወገን አለማስተላለፍ፡</strong> መረጃዎ ለማንም አካል ለንግድ ዓላማ አይሸጥም ወይም አይተላለፍም።</li>
                    </ul>
                </div>
            @else
                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">1. Information We Collect</h2>
                    <p>Dolce Technologies One Member PLC ("Fetan Equb") collects only information necessary to ensure secure, algorithmic operation of the open-line savings protocol:</p>
                    <ul class="list-disc pl-5 space-y-1 text-slate-300 text-sm">
                        <li><strong>Identity & Contact:</strong> Full legal name, mobile phone number, national identification details (where required by financial regulations).</li>
                        <li><strong>Financial Channel Data:</strong> Digital wallet identifiers (Telebirr account, CBE Birr, M-PESA, Chapa transaction reference tokens).</li>
                        <li><strong>Savings Telemetry:</strong> Contribution frequency, Consistency Scores, queue timestamps, and payout delivery statuses.</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">2. How We Utilize Your Data</h2>
                    <p>Your information is processed strictly for the following purposes:</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li>To administer your open-line queue position and compute dynamic payout milestones.</li>
                        <li>To facilitate automated fund transfers to your designated financial account when your pot matures.</li>
                        <li>To maintain compliance with cybersecurity frameworks specified by INSA and financial transparency directives from the National Bank of Ethiopia.</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">3. Cryptographic & Physical Safeguards</h2>
                    <p>We deploy military-grade encryption and architectural isolation:</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li><strong>AES-256 Encryption:</strong> In-flight and at-rest cryptographic protection for all transactional ledger entries.</li>
                        <li><strong>Web Application Firewall (WAF):</strong> Enterprise-grade perimeter filtering guarding against DDoS and malicious intrusions.</li>
                        <li><strong>Zero Data Monetization:</strong> We do not sell, rent, or monetize personal or transactional information to third-party marketing brokers.</li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
