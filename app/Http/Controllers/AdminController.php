<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Show admin login form.
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Authenticate admin user.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))->with('success', 'Welcome to Fetan Equb Admin Console.');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our administrative records.',
        ])->withInput($request->only('email', 'remember'));
    }

    /**
     * Log out admin user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'You have been safely signed out.');
    }

    /**
     * Admin Dashboard: View, filter, and search contact inquiries and feedback.
     */
    public function dashboard(Request $request)
    {
        $type = $request->query('type', 'all');
        $status = $request->query('status', 'all');
        $search = $request->query('q', '');

        $query = ContactMessage::query();

        if ($type !== 'all') {
            $query->where('type', $type);
        }

        if ($status !== 'all') {
            $query->where('status', $status);
        }

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email_or_phone', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $messages = $query->latest()->paginate(15)->withQueryString();

        // Calculate Overview Statistics
        $stats = [
            'total' => ContactMessage::count(),
            'contact_count' => ContactMessage::where('type', 'contact')->count(),
            'feedback_count' => ContactMessage::where('type', 'feedback')->count(),
            'new_count' => ContactMessage::where('status', 'new')->count(),
            'replied_count' => ContactMessage::where('status', 'replied')->count(),
            'avg_rating' => round((float) ContactMessage::where('type', 'feedback')->whereNotNull('rating')->avg('rating'), 1),
        ];

        return view('admin.dashboard', compact('messages', 'stats', 'type', 'status', 'search'));
    }

    /**
     * Update status and/or admin notes for an inquiry or feedback.
     */
    public function updateStatus(Request $request, $id)
    {
        $message = ContactMessage::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:new,read,replied',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $message->update($validated);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Message updated successfully.',
                'data' => $message,
            ]);
        }

        return back()->with('success', 'Status updated successfully.');
    }

    /**
     * Delete a contact inquiry or feedback.
     */
    public function destroy(Request $request, $id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Message deleted successfully.',
            ]);
        }

        return back()->with('success', 'Message deleted successfully.');
    }
}
