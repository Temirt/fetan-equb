<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle submission from Contact Us page.
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email_or_phone' => 'required|string|max:100',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:5000',
        ]);

        $contact = ContactMessage::create([
            'name' => $validated['name'],
            'email_or_phone' => $validated['email_or_phone'],
            'type' => 'contact',
            'subject' => $validated['subject'] ?? 'General Inquiry',
            'message' => $validated['message'],
            'status' => 'new',
            'ip_address' => $request->ip(),
        ]);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your inquiry has been sent to Fetan Equb. Our team will contact you shortly.',
                'data' => $contact,
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully. We will contact you soon.');
    }

    /**
     * Handle submission from Feedback widget/modal.
     */
    public function submitFeedback(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email_or_phone' => 'nullable|string|max:100',
            'message' => 'required|string|max:5000',
            'rating' => 'nullable|integer|min:1|max:5',
            'subject' => 'nullable|string|max:150',
        ]);

        $feedback = ContactMessage::create([
            'name' => $validated['name'],
            'email_or_phone' => $validated['email_or_phone'] ?? 'Anonymous',
            'type' => 'feedback',
            'subject' => $validated['subject'] ?? 'User Feedback',
            'message' => $validated['message'],
            'rating' => $validated['rating'] ?? 5,
            'status' => 'new',
            'ip_address' => $request->ip(),
        ]);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for your valuable feedback! We appreciate your support for Fetan Equb.',
                'data' => $feedback,
            ]);
        }

        return redirect()->back()->with('success', 'Thank you for your valuable feedback!');
    }
}
