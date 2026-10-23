@extends('layouts.app')

@section('title', (app()->getLocale() === 'am' ? 'የግል መረጃ ጥበቃ ፖሊሲ (Privacy Policy) | ፈጣን እቁብ' : 'Privacy Policy | Fetan Equb'))

@section('content')
<section class="py-20 bg-white min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title Banner -->
        <div class="mb-12 border-b border-[#E5EAE7] pb-8">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#EAFBF2] border border-[#20BF78]/40 text-[#15965C] text-xs font-bold uppercase tracking-wider mb-4">
                Data Protection & Privacy
            </div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#111111] mb-4">
                Privacy Policy
            </h1>
            <p class="text-sm text-[#444B48]">
                Dolce Technologies One Member PLC • Trading as Fetan Equb Technologies
            </p>
        </div>

        <div class="space-y-8 text-[#444B48] text-sm sm:text-base leading-relaxed">
            <div class="card-premium rounded-2xl p-6 sm:p-8 space-y-4 shadow-xs">
                <h2 class="text-xl font-bold text-[#111111]">1. Information We Collect</h2>
                <p>Dolce Technologies One Member PLC ("Fetan Equb") collects only information necessary to ensure secure, algorithmic operation of the open-line savings protocol:</p>
                <ul class="list-disc pl-5 space-y-1 text-sm text-[#444B48]">
                    <li><strong>Identity & Contact:</strong> Full legal name, mobile phone number, national identification details (where required by financial regulations).</li>
                    <li><strong>Financial Channel Data:</strong> Digital wallet identifiers (Telebirr account, CBE Birr, M-PESA, Chapa transaction reference tokens).</li>
                    <li><strong>Savings Telemetry:</strong> Contribution frequency, Consistency Scores, queue timestamps, and payout delivery statuses.</li>
                </ul>
            </div>

            <div class="card-premium rounded-2xl p-6 sm:p-8 space-y-4 shadow-xs">
                <h2 class="text-xl font-bold text-[#111111]">2. How We Utilize Your Data</h2>
                <p>Your information is processed strictly for the following purposes:</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-[#444B48]">
                    <li>To administer your open-line queue position and compute dynamic payout milestones.</li>
                    <li>To facilitate automated fund transfers to your designated financial account when your pot matures.</li>
                    <li>To maintain compliance with cybersecurity frameworks specified by INSA and financial transparency directives from the National Bank of Ethiopia.</li>
                </ul>
            </div>

            <div class="card-premium rounded-2xl p-6 sm:p-8 space-y-4 shadow-xs">
                <h2 class="text-xl font-bold text-[#111111]">3. Cryptographic & Architectural Safeguards</h2>
                <p>We deploy military-grade encryption and architectural isolation:</p>
                <ul class="list-disc pl-5 space-y-2 text-sm text-[#444B48]">
                    <li><strong>AES-256 Encryption:</strong> In-flight and at-rest cryptographic protection for all transactional ledger entries.</li>
                    <li><strong>Web Application Firewall (WAF):</strong> Enterprise-grade perimeter filtering guarding against DDoS and malicious intrusions.</li>
                    <li><strong>Zero Data Monetization:</strong> We do not sell, rent, or monetize personal or transactional information to third-party marketing brokers.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
