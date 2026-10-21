<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class FetanEqubController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function howItWorks()
    {
        return view('pages.how-it-works');
    }

    public function assetEqubs()
    {
        return view('pages.asset-equbs');
    }

    public function platinum()
    {
        return view('pages.platinum');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function switchLanguage($locale)
    {
        if (in_array($locale, ['en', 'am'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }
        return redirect()->back();
    }

    public function submitEqubRegistration(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'goal' => 'required|string',
            'daily_amount' => 'required|numeric|min:20',
            'payment_method' => 'required|string',
        ]);

        // In a live system, this connects to the Equb line algorithm & payment gateway API
        return response()->json([
            'success' => true,
            'message' => __('messages.modal.success_title'),
            'data' => [
                'name' => $validated['name'],
                'line_number' => 'ET-EQB-' . rand(100000, 999999),
                'payout_projection' => now()->addDays(rand(60, 180))->format('M d, Y'),
                'consistency_score' => '100 pts (Initial Tier)',
            ],
        ]);
    }
}
