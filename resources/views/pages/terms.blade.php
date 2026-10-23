@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የአገልግሎት ውል (Terms of Service) | ፈጣን እቁብ' : 'Terms of Service | Fetan Equb'))

@section('content')
<section class="py-20 bg-white min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="mb-12 border-b border-[#E5EAE7] pb-8">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4">
                Regulatory Framework & Legal Terms
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-4">
                Terms of Service
            </h1>
            <p class="text-sm text-[#444B48]">
                Dolce Technologies One Member PLC • Trading as Fetan Equb Technologies
            </p>
        </div>

        <div class="space-y-8 text-[#444B48] text-sm sm:text-base leading-relaxed">
            <div class="card-premium rounded-2xl p-6 sm:p-8 space-y-4 shadow-xs">
                <h2 class="text-xl font-bold text-[#111111]">1. Corporate Identification & Legal Entity</h2>
                <p>These Terms of Service ("Terms") constitute a legal agreement between you and Dolce Technologies One Member PLC ("Company", "we", "us", or "our"), trading as Fetan Equb Technologies.</p>
                <ul class="list-disc pl-5 space-y-1 text-sm text-[#444B48]">
                    <li><strong>Trading Name:</strong> Fetan Equb Technologies</li>
                    <li><strong>Registered Office:</strong> Addis Ababa, Kirkos Sub-city, Woreda 01, House No. 10</li>
                    <li><strong>Tax Identification Number (TIN):</strong> 0104256231</li>
                    <li><strong>Business License:</strong> AACATB/14/706/50187949/2018</li>
                    <li><strong>Patent Registry:</strong> Granted Patent No. ET UM 1170B1 (FDRE Ethiopian Intellectual Property Authority)</li>
                </ul>
            </div>

            <div class="card-premium rounded-2xl p-6 sm:p-8 space-y-4 shadow-xs">
                <h2 class="text-xl font-bold text-[#111111]">2. Nature of the Open-Line Equb System</h2>
                <p>Fetan Equb provides an algorithmic, software-based savings coordination protocol that replaces closed rotating circles with an open linear pool:</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-[#444B48]">
                    <li><strong>Continuous Enrollment:</strong> Participants may enroll independently without waiting for predefined circles or quotas to fill.</li>
                    <li><strong>Exit Right:</strong> Users retain absolute ownership of their principal savings and may execute a full or partial withdrawal at any time without penalty fees.</li>
                    <li><strong>Algorithmic Payout Scheduling:</strong> Payout timelines are mathematically derived based on queue entry position, daily deposit amounts, and user Consistency Scores.</li>
                </ul>
            </div>

            <div class="card-premium rounded-2xl p-6 sm:p-8 space-y-4 shadow-xs">
                <h2 class="text-xl font-bold text-[#111111]">3. Fund Custody & Banking Safeguards</h2>
                <p>Fetan Equb operates as a financial technology platform. We are not a deposit-taking commercial bank or microfinance lender:</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-[#444B48]">
                    <li>All user funds are deposited into and held within segregated custodial escrow accounts at partner licensed commercial banks in Ethiopia.</li>
                    <li>Customer deposits are never commingled with the operational, administrative, or payroll capital of Dolce Technologies One Member PLC.</li>
                    <li>The technological infrastructure complies with Information Network Security Administration (INSA) standards and National Bank of Ethiopia (NBE) regulatory frameworks.</li>
                </ul>
            </div>

            <div class="card-premium rounded-2xl p-6 sm:p-8 space-y-4 shadow-xs">
                <h2 class="text-xl font-bold text-[#111111]">4. Payment Methods & Consistency Multipliers</h2>
                <p>Daily contributions are conducted via verified domestic payment service providers (Telebirr, CBE Birr, Safaricom M-PESA, Chapa). Maintaining an unbroken streak of daily contributions elevates the participant's Consistency Score, granting priority line velocity within mathematically validated pool limits.</p>
            </div>
        </div>
    </div>
</section>
@endsection
