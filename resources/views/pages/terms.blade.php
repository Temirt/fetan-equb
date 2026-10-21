@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የአገልግሎት ውል (Terms of Service) | ፈጣን እቁብ' : 'Terms of Service | Fetan Equb'))

@section('content')
<section class="py-20 bg-[#02180d] min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="mb-12 border-b border-emerald-800/60 pb-8">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 border border-emerald-700 text-emerald-300 text-xs font-bold uppercase tracking-wider mb-4">
                Regulatory Compliance & Legal Framework
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-4">
                {{ app()->getLocale() === 'am' ? 'የአገልግሎት ውል እና ሁኔታዎች' : 'Terms of Service' }}
            </h1>
            <p class="text-sm text-emerald-300/80">
                {{ app()->getLocale() === 'am' ? 'የመጨረሻ ማሻሻያ፡ 2026 ዓ.ም • በዶልቼ ቴክኖሎጂስ የአንድ አባል ኃ/የተ/የግ/ማህበር የቀረበ' : 'Last Updated: October 2026 • Dolce Technologies One Member PLC' }}
            </p>
        </div>

        <div class="prose prose-invert max-w-none space-y-8 text-slate-300 text-sm sm:text-base leading-relaxed">
            @if(app()->getLocale() === 'am')
                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">1. የድርጅቱ ማንነት እና ህጋዊ መረጃ</h2>
                    <p>ይህ የአገልግሎት ውል በዶልቼ ቴክኖሎጂስ የአንድ አባል ኃ/የተ/የግ/ማህበር (Dolce Technologies One Member PLC) እና በተጠቃሚው መካከል የሚደረግ ህጋዊ ስምምነት ነው።</p>
                    <ul class="list-disc pl-5 space-y-1 text-slate-300 text-sm">
                        <li><strong>የንግድ ስም፡</strong> ፈጣን እቁብ ቴክኖሎጂስ (Fetan Equb Technologies)</li>
                        <li><strong>አድራሻ፡</strong> አዲስ አበባ፣ ቂርቆስ ክፍለ ከተማ፣ ወረዳ 01፣ የቤት ቁጥር 10</li>
                        <li><strong>የግብር ከፋይ መለያ ቁጥር (TIN):</strong> 0104256231</li>
                        <li><strong>የንግድ ፈቃድ ቁጥር፡</strong> AACATB/14/706/50187949/2018</li>
                        <li><strong>የፓተንት መብት፡</strong> Patent No. ET UM 1170B1</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">2. የክፍት መስመር እቁብ የአሰራር መርሆዎች</h2>
                    <p>ፈጣን እቁብ በኢትዮጵያ የፈጠራ ባለቤትነት መብት (Patent No. ET UM 1170B1) የተሰጠው ዲጂታል ክፍት መስመር የቁጠባ ስርዓት ነው። ተጠቃሚው የሚከተሉትን መርሆዎች አውቆ ይስማማል፡</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li><strong>በማንኛውም ጊዜ መቀላቀል፡</strong> አባላት ቡድን ሳይጠብቁ በማንኛውም ቀንና ሰዓት መመዝገብ ይችላሉ።</li>
                        <li><strong>በማንኛውም ጊዜ የመውጣት መብት (Exit Anytime):</strong> ተጠቃሚው እቁቡ ሳይጠናቀቅ በማንኛውም ጊዜ ያጠራቀመውን ገንዘብ ያለምንም ቅጣት የመውሰድ ሙሉ መብት አለው።</li>
                        <li><strong>የክፍያ ቀን ስሌት፡</strong> የክፍያ ቀን የሚወሰነው በስርዓቱ ሒሳባዊ ቀመር፣ በቀን መዋጮ መጠን እና በቁርጠኝነት ነጥብ (Consistency Score) መሰረት ነው።</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">3. የቁጠባ ገንዘብ አያያዝ እና የባንክ አደራ (Custodial Escrow)</h2>
                    <p>ፈጣን እቁብ ቴክኖሎጂስ እንደ የቴክኖሎጂ አቅራቢ እንጂ እንደ ባንክ አይሰራም። የደንበኞች ቁጠባ በሙሉ በድርጅቱ የስራ ማስኬጃ ውስጥ ሳይገባ፡</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li>በአጋር የኢትዮጵያ የንግድ ባንኮች ውስጥ በተከፈተ የተለየ የደህንነት ሂሳብ (Segregated Custodial Escrow Account) ውስጥ ይቀመጣል።</li>
                        <li>ገንዘቡ በኢንፎርሜሽን መረብ ደህንነት አስተዳደር (INSA) እና በኢትዮጵያ ብሔራዊ ባንክ (NBE) መመሪያዎች መሰረት ጥበቃ ይደረግለታል።</li>
                        <li>ድርጅቱ የደንበኞችን ገንዘብ ለብድር ወይም ለውጭ ኢንቨስትመንት አይጠቀምበትም።</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">4. የክፍያ አፈጻጸም እና የቁርጠኝነት ነጥብ</h2>
                    <p>ተጠቃሚው በቀን መዋጮው ወቅት በቴሌብር፣ በሲቢኢ ብር፣ በኤም-ፔሳ ወይም በቻፓ ክፍያውን ይፈጽማል። በቀን መዋጮውን በአግባቡ የፈጸመ አባል የቁርጠኝነት ነጥቡ (Consistency Score) ከፍ እያለ በመሄድ የክፍያ ቀኑን ያፋጥነዋል።</p>
                </div>
            @else
                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">1. Corporate Identification & Legal Entity</h2>
                    <p>These Terms of Service ("Terms") constitute a legally binding agreement between you and Dolce Technologies One Member PLC ("Company", "we", "us", or "our"), trading as Fetan Equb Technologies.</p>
                    <ul class="list-disc pl-5 space-y-1 text-slate-300 text-sm">
                        <li><strong>Trading Name:</strong> Fetan Equb Technologies</li>
                        <li><strong>Registered Office:</strong> Addis Ababa, Kirkos Sub-city, Woreda 01, House No. 10</li>
                        <li><strong>Tax Identification Number (TIN):</strong> 0104256231</li>
                        <li><strong>Business License:</strong> AACATB/14/706/50187949/2018</li>
                        <li><strong>Patent Registry:</strong> Granted Patent No. ET UM 1170B1 (FDRE Ethiopian Intellectual Property Authority)</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">2. Nature of the Open-Line Equb System</h2>
                    <p>Fetan Equb provides an algorithmic, software-based savings coordination protocol that replaces closed rotating circles with an open, non-stochastic linear pool:</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li><strong>Continuous Enrollment:</strong> Participants may enroll independently without waiting for predefined circles or quotas to fill.</li>
                        <li><strong>Unconditional Exit Right:</strong> Users retain absolute ownership of their principal savings and may execute a full or partial withdrawal at any time without penalty fees.</li>
                        <li><strong>Algorithmic Payout Scheduling:</strong> Payout timelines are mathematically derived based on queue entry position, daily deposit amounts, and user Consistency Scores.</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">3. Fund Custody & Banking Safeguards</h2>
                    <p>Fetan Equb operates purely as a technology facilitator and financial logistics protocol. We are not a deposit-taking commercial bank or microfinance institution:</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-300 text-sm">
                        <li>All user funds are deposited into and held within segregated custodial escrow accounts at partner licensed commercial banks in Ethiopia.</li>
                        <li>Customer deposits are never commingled with the operational, administrative, or payroll capital of Dolce Technologies One Member PLC.</li>
                        <li>The technological infrastructure complies with Information Network Security Administration (INSA) standards and National Bank of Ethiopia (NBE) regulatory frameworks.</li>
                    </ul>
                </div>

                <div class="glow-card rounded-2xl p-6 sm:p-8 space-y-4">
                    <h2 class="text-2xl font-bold text-amber-300">4. Payment Methods & Consistency Multipliers</h2>
                    <p>Daily contributions are conducted via verified domestic payment service providers (Telebirr, CBE Birr, Safaricom M-PESA, Chapa). Maintaining an unbroken streak of daily contributions elevates the participant's Consistency Score, granting priority line velocity within mathematically validated pool limits.</p>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
