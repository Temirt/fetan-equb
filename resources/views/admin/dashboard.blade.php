<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#F7F9F8]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Operations Console | Fetan Equb</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo-icon.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full font-sans antialiased text-[#444B48] bg-[#F7F9F8] selection:bg-[#20BF78] selection:text-white flex flex-col">

    <!-- Top Navigation Header -->
    <header class="sticky top-0 z-40 bg-white border-b border-[#E5EAE7] shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-18">
                <!-- Brand / Logo -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                        <img src="{{ asset('images/logo-light.jpg') }}" alt="Fetan Equb" class="h-10 w-auto object-contain rounded-md">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-[#15965C] block">Admin Console</span>
                            <span class="text-[10px] text-[#444B48]">Customer Inquiries & Feedback Desk</span>
                        </div>
                    </a>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-[#EAFBF2] text-[#15965C] border border-[#20BF78]/30">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#20BF78] mr-1 animate-pulse"></span>
                        Live Desk
                    </span>
                </div>

                <!-- Admin Profile & Quick Links -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl border border-[#E5EAE7] text-xs font-bold text-[#111111] hover:bg-[#F7F9F8] transition-colors">
                        <svg class="w-3.5 h-3.5 text-[#20BF78]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        <span>View Live Website</span>
                    </a>

                    <div class="flex items-center gap-2 pl-2 sm:border-l border-[#E5EAE7]">
                        <div class="text-right hidden md:block">
                            <div class="text-xs font-bold text-[#111111]">{{ auth()->user()->name ?? 'Administrator' }}</div>
                            <div class="text-[10px] text-[#444B48] font-mono">{{ auth()->user()->email }}</div>
                        </div>

                        <!-- Logout Form -->
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" title="Sign out" class="px-3 py-1.5 rounded-xl bg-[#F7F9F8] hover:bg-red-50 text-red-600 border border-[#E5EAE7] hover:border-red-200 text-xs font-bold transition-all flex items-center gap-1.5 cursor-pointer">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                <span class="hidden sm:inline">Sign Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full flex-grow space-y-8">

        <!-- Flash Success Notification -->
        @if(session('success'))
            <div class="p-4 rounded-2xl bg-[#EAFBF2] border border-[#20BF78]/40 text-sm font-semibold text-[#15965C] flex items-center justify-between shadow-xs">
                <div class="flex items-center gap-2.5">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-[#15965C] hover:text-[#111111] font-bold text-xs">Dismiss</button>
            </div>
        @endif

        <!-- Metric KPI Cards -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <!-- Total -->
            <div class="bg-white rounded-2xl p-5 border border-[#E5EAE7] shadow-xs">
                <div class="text-[11px] font-bold text-[#444B48] uppercase tracking-wider mb-1">Total Submissions</div>
                <div class="text-2xl font-extrabold text-[#111111]">{{ $stats['total'] }}</div>
                <div class="text-[11px] text-[#15965C] font-semibold mt-1">Inquiries + Feedback</div>
            </div>

            <!-- Direct Contact Inquiries -->
            <div class="bg-white rounded-2xl p-5 border border-[#E5EAE7] shadow-xs">
                <div class="text-[11px] font-bold text-[#444B48] uppercase tracking-wider mb-1">Contact Messages</div>
                <div class="text-2xl font-extrabold text-[#111111]">{{ $stats['contact_count'] }}</div>
                <a href="{{ route('admin.dashboard', ['type' => 'contact']) }}" class="text-[11px] text-[#20BF78] hover:underline font-bold mt-1 inline-block">Filter Contacts →</a>
            </div>

            <!-- User Feedback Submissions -->
            <div class="bg-white rounded-2xl p-5 border border-[#E5EAE7] shadow-xs">
                <div class="text-[11px] font-bold text-[#444B48] uppercase tracking-wider mb-1">User Feedback</div>
                <div class="text-2xl font-extrabold text-[#111111]">{{ $stats['feedback_count'] }}</div>
                <a href="{{ route('admin.dashboard', ['type' => 'feedback']) }}" class="text-[11px] text-[#20BF78] hover:underline font-bold mt-1 inline-block">Filter Feedback →</a>
            </div>

            <!-- Unread / Pending Action -->
            <div class="bg-white rounded-2xl p-5 border border-[#E5EAE7] shadow-xs">
                <div class="text-[11px] font-bold text-[#444B48] uppercase tracking-wider mb-1">Unread Inflow</div>
                <div class="text-2xl font-extrabold text-amber-600 flex items-center gap-2">
                    <span>{{ $stats['new_count'] }}</span>
                    @if($stats['new_count'] > 0)
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-ping"></span>
                    @endif
                </div>
                <a href="{{ route('admin.dashboard', ['status' => 'new']) }}" class="text-[11px] text-amber-600 hover:underline font-bold mt-1 inline-block">Needs Review →</a>
            </div>

            <!-- Average Rating -->
            <div class="bg-white rounded-2xl p-5 border border-[#E5EAE7] shadow-xs col-span-2 md:col-span-1">
                <div class="text-[11px] font-bold text-[#444B48] uppercase tracking-wider mb-1">Satisfaction Score</div>
                <div class="text-2xl font-extrabold text-[#111111] flex items-center gap-1.5">
                    <span>{{ $stats['avg_rating'] > 0 ? $stats['avg_rating'] : '5.0' }}</span>
                    <span class="text-amber-400 text-lg">★</span>
                </div>
                <div class="text-[11px] text-slate-500 font-medium mt-1">Based on feedback ratings</div>
            </div>
        </div>

        <!-- Filter & Search Toolbar -->
        <div class="bg-white rounded-2xl p-4 border border-[#E5EAE7] shadow-xs space-y-4">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                
                <!-- Category Tabs -->
                <div class="flex flex-wrap items-center gap-1.5">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all {{ ($type === 'all' && $status === 'all') ? 'bg-[#20BF78] text-white shadow-xs' : 'bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]' }}">
                        All Messages ({{ $stats['total'] }})
                    </a>
                    <a href="{{ route('admin.dashboard', ['type' => 'contact']) }}" 
                       class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all {{ $type === 'contact' ? 'bg-[#20BF78] text-white shadow-xs' : 'bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]' }}">
                        📞 Contact Inquiries ({{ $stats['contact_count'] }})
                    </a>
                    <a href="{{ route('admin.dashboard', ['type' => 'feedback']) }}" 
                       class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all {{ $type === 'feedback' ? 'bg-[#20BF78] text-white shadow-xs' : 'bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]' }}">
                        💬 User Feedback ({{ $stats['feedback_count'] }})
                    </a>
                    <a href="{{ route('admin.dashboard', ['status' => 'new']) }}" 
                       class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all {{ $status === 'new' ? 'bg-amber-500 text-white shadow-xs' : 'bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]' }}">
                        ⚠️ Unread ({{ $stats['new_count'] }})
                    </a>
                    <a href="{{ route('admin.dashboard', ['status' => 'replied']) }}" 
                       class="px-3 py-1.5 rounded-xl text-xs font-bold transition-all {{ $status === 'replied' ? 'bg-[#15965C] text-white shadow-xs' : 'bg-[#F7F9F8] text-[#444B48] hover:text-[#111111]' }}">
                        ✓ Replied ({{ $stats['replied_count'] }})
                    </a>
                </div>

                <!-- Search Input Form -->
                <form action="{{ route('admin.dashboard') }}" method="GET" class="flex items-center gap-2">
                    @if($type !== 'all') <input type="hidden" name="type" value="{{ $type }}"> @endif
                    @if($status !== 'all') <input type="hidden" name="status" value="{{ $status }}"> @endif

                    <div class="relative w-full sm:w-64">
                        <input 
                            type="text" 
                            name="q" 
                            value="{{ $search }}" 
                            placeholder="Search name, phone, message..." 
                            class="w-full pl-9 pr-4 py-2 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-xs text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] focus:bg-white"
                        >
                        <svg class="w-3.5 h-3.5 absolute left-3 top-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>

                    <button type="submit" class="px-3 py-2 rounded-xl bg-[#111111] hover:bg-black text-white text-xs font-bold transition-colors">
                        Search
                    </button>

                    @if(!empty($search))
                        <a href="{{ route('admin.dashboard', array_filter(['type' => $type !== 'all' ? $type : null, 'status' => $status !== 'all' ? $status : null])) }}" class="px-2 py-2 text-xs text-red-600 hover:underline">
                            Clear
                        </a>
                    @endif
                </form>
            </div>
        </div>

        <!-- Messages Table Card -->
        <div class="bg-white rounded-2xl border border-[#E5EAE7] shadow-xs overflow-hidden">
            @if($messages->isEmpty())
                <div class="p-16 text-center space-y-3">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-[#EAFBF2] text-[#15965C] flex items-center justify-center text-xl">
                        📬
                    </div>
                    <h3 class="text-base font-bold text-[#111111]">No messages found</h3>
                    <p class="text-xs text-[#444B48] max-w-sm mx-auto">
                        There are no submissions matching your selected filter or search query.
                    </p>
                    <a href="{{ route('admin.dashboard') }}" class="inline-block mt-2 text-xs font-bold text-[#20BF78] hover:underline">
                        View All Submissions
                    </a>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-[#F7F9F8] text-[#111111] border-b border-[#E5EAE7] uppercase tracking-wider font-bold">
                            <tr>
                                <th class="py-3.5 px-4">Type</th>
                                <th class="py-3.5 px-4">Sender</th>
                                <th class="py-3.5 px-4">Subject & Excerpt</th>
                                <th class="py-3.5 px-4">Date</th>
                                <th class="py-3.5 px-4">Status</th>
                                <th class="py-3.5 px-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#E5EAE7] text-[#444B48]">
                            @foreach($messages as $msg)
                                <tr class="hover:bg-[#F7F9F8]/60 transition-colors {{ $msg->status === 'new' ? 'bg-[#EAFBF2]/20 font-medium' : '' }}">
                                    <!-- Type -->
                                    <td class="py-3.5 px-4 whitespace-nowrap">
                                        @if($msg->type === 'feedback')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-bold bg-[#EAFBF2] text-[#15965C] border border-[#20BF78]/40">
                                                <span>💬 Feedback</span>
                                                @if($msg->rating)
                                                    <span class="text-amber-500 font-bold ml-0.5">★{{ $msg->rating }}</span>
                                                @endif
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-bold bg-blue-50 text-blue-700 border border-blue-200">
                                                <span>📞 Contact</span>
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Sender Details -->
                                    <td class="py-3.5 px-4 whitespace-nowrap">
                                        <div class="font-bold text-[#111111]">{{ $msg->name }}</div>
                                        <div class="text-[11px] flex items-center gap-2 mt-0.5">
                                            @if(str_contains($msg->email_or_phone, '@'))
                                                <a href="mailto:{{ $msg->email_or_phone }}" class="text-[#15965C] hover:underline flex items-center gap-1">
                                                    <span>✉️</span> {{ $msg->email_or_phone }}
                                                </a>
                                            @else
                                                <a href="tel:{{ $msg->email_or_phone }}" class="text-[#15965C] hover:underline flex items-center gap-1">
                                                    <span>📞</span> {{ $msg->email_or_phone }}
                                                </a>
                                            @endif
                                        </div>
                                    </td>

                                    <!-- Subject & Message -->
                                    <td class="py-3.5 px-4 max-w-xs md:max-w-md">
                                        <div class="font-bold text-[#111111] truncate">{{ $msg->subject ?? 'General Inquiry' }}</div>
                                        <div class="text-[11px] text-[#444B48] truncate">{{ $msg->message }}</div>
                                    </td>

                                    <!-- Date -->
                                    <td class="py-3.5 px-4 whitespace-nowrap">
                                        <div class="text-[#111111] font-semibold">{{ $msg->created_at->format('M d, Y') }}</div>
                                        <div class="text-[10px] text-slate-500">{{ $msg->created_at->diffForHumans() }}</div>
                                    </td>

                                    <!-- Status Badge -->
                                    <td class="py-3.5 px-4 whitespace-nowrap">
                                        @if($msg->status === 'new')
                                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800 border border-amber-300">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                                New
                                            </span>
                                        @elseif($msg->status === 'replied')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-800 border border-green-300">
                                                ✓ Replied
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[10px] font-bold bg-slate-100 text-slate-700 border border-slate-300">
                                                Read
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Action Buttons -->
                                    <td class="py-3.5 px-4 whitespace-nowrap text-right space-x-1">
                                        <!-- View Details Button -->
                                        <button 
                                            onclick="openModal({{ json_encode($msg) }})" 
                                            class="px-2.5 py-1 rounded-lg bg-[#EAFBF2] hover:bg-[#20BF78] text-[#15965C] hover:text-white font-bold text-xs transition-colors cursor-pointer"
                                        >
                                            View
                                        </button>

                                        <!-- Quick Status Toggle -->
                                        @if($msg->status === 'new')
                                            <form action="{{ route('admin.messages.status', $msg->id) }}" method="POST" class="inline">
                                                @csrf
                                                <input type="hidden" name="status" value="read">
                                                <button type="submit" title="Mark as Read" class="px-2.5 py-1 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs transition-colors cursor-pointer">
                                                    Mark Read
                                                </button>
                                            </form>
                                        @elseif($msg->status === 'read')
                                            <form action="{{ route('admin.messages.status', $msg->id) }}" method="POST" class="inline">
                                                @csrf
                                                <input type="hidden" name="status" value="replied">
                                                <button type="submit" title="Mark as Replied" class="px-2.5 py-1 rounded-lg bg-green-100 hover:bg-green-200 text-green-800 font-bold text-xs transition-colors cursor-pointer">
                                                    Mark Replied
                                                </button>
                                            </form>
                                        @endif

                                        <!-- Delete Button -->
                                        <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to permanently delete this message?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Delete" class="p-1 rounded-lg text-slate-400 hover:text-red-600 hover:bg-red-50 transition-colors cursor-pointer">
                                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($messages->hasPages())
                    <div class="p-4 border-t border-[#E5EAE7] bg-[#F7F9F8]">
                        {{ $messages->links() }}
                    </div>
                @endif
            @endif
        </div>
    </main>

    <!-- Message Detail Modal -->
    <div id="detailModal" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
        <div class="bg-white rounded-3xl max-w-2xl w-full border border-[#E5EAE7] shadow-2xl p-6 sm:p-8 space-y-6 relative max-h-[90vh] overflow-y-auto">
            
            <!-- Modal Header -->
            <div class="flex items-start justify-between border-b border-[#E5EAE7] pb-4">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span id="modalTypeBadge" class="px-2.5 py-0.5 rounded-full text-xs font-bold uppercase"></span>
                        <span id="modalStatusBadge" class="px-2.5 py-0.5 rounded-full text-xs font-bold"></span>
                    </div>
                    <h3 id="modalSubject" class="text-xl font-extrabold text-[#111111]"></h3>
                </div>
                <button onclick="closeModal()" class="p-2 rounded-xl hover:bg-[#F7F9F8] text-[#444B48] hover:text-[#111111] transition-colors cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Sender Metadata Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-[#F7F9F8] p-4 rounded-2xl text-xs">
                <div>
                    <span class="text-slate-400 block font-semibold mb-0.5">Sender Name</span>
                    <span id="modalName" class="font-bold text-[#111111] text-sm"></span>
                </div>
                <div>
                    <span class="text-slate-400 block font-semibold mb-0.5">Contact Detail</span>
                    <span id="modalContact" class="font-mono text-sm text-[#15965C] font-bold"></span>
                </div>
                <div>
                    <span class="text-slate-400 block font-semibold mb-0.5">Submitted On</span>
                    <span id="modalDate" class="text-[#111111] font-semibold"></span>
                </div>
                <div>
                    <span class="text-slate-400 block font-semibold mb-0.5">IP Address</span>
                    <span id="modalIp" class="font-mono text-[#444B48]"></span>
                </div>
            </div>

            <!-- Message Content -->
            <div>
                <label class="block text-xs font-bold text-[#111111] uppercase tracking-wider mb-2">Message Content</label>
                <div id="modalMessage" class="p-4 rounded-2xl bg-[#F7F9F8] border border-[#E5EAE7] text-sm text-[#111111] leading-relaxed whitespace-pre-wrap"></div>
            </div>

            <!-- Rating Box if Feedback -->
            <div id="modalRatingContainer" class="hidden p-4 rounded-2xl bg-[#EAFBF2] border border-[#20BF78]/30 flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-[#15965C] uppercase tracking-wider block">Customer Satisfaction</span>
                    <span class="text-xs text-[#444B48]">User rating submitted with this feedback</span>
                </div>
                <div id="modalRatingStars" class="text-xl font-bold text-amber-500"></div>
            </div>

            <!-- Status & Notes Form -->
            <form id="modalUpdateForm" method="POST" class="border-t border-[#E5EAE7] pt-4 space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-[#111111] uppercase tracking-wider mb-1.5">Administrative Notes / Internal Follow-up</label>
                    <textarea 
                        name="admin_notes" 
                        id="modalAdminNotes" 
                        rows="3" 
                        placeholder="Add notes about phone conversation, resolved ticket, or follow-up status..."
                        class="w-full px-4 py-2.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-xs text-[#111111] placeholder-slate-400 focus:outline-none focus:border-[#20BF78] focus:bg-white"
                    ></textarea>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div class="flex items-center gap-2">
                        <label class="text-xs font-bold text-[#111111]">Update Status:</label>
                        <select name="status" id="modalStatusSelect" class="px-3 py-1.5 rounded-xl bg-[#F7F9F8] border border-[#E5EAE7] text-xs font-semibold text-[#111111] focus:outline-none focus:border-[#20BF78]">
                            <option value="new">New / Unread</option>
                            <option value="read">Mark as Read</option>
                            <option value="replied">Mark as Replied</option>
                        </select>
                    </div>

                    <div class="flex items-center gap-2">
                        <a id="modalActionLink" href="#" class="px-4 py-2 rounded-xl bg-[#111111] hover:bg-black text-white text-xs font-bold transition-all inline-flex items-center gap-1.5">
                            <span>Reach Customer</span>
                        </a>
                        <button type="submit" class="px-4 py-2 rounded-xl bg-[#20BF78] hover:bg-[#15965C] text-white text-xs font-bold transition-all shadow-xs cursor-pointer">
                            Save Changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Admin Footer -->
    <footer class="bg-white border-t border-[#E5EAE7] py-4 text-center text-xs text-[#444B48]">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-2">
            <div>
                © 2026 Fetan Equb Technologies • Dolce Technologies One Member PLC
            </div>
            <div class="flex items-center gap-4 text-[11px]">
                <span>Patent ET UM 1170B1</span>
                <span>•</span>
                <span>DUNS: 764070770</span>
                <span>•</span>
                <span class="text-[#15965C] font-semibold">Bank Custodial Escrow</span>
            </div>
        </div>
    </footer>

    <!-- Script for Interactive Modal -->
    <script>
        function openModal(data) {
            document.getElementById('modalSubject').textContent = data.subject || (data.type === 'feedback' ? 'User Feedback' : 'Direct Contact Inquiry');
            document.getElementById('modalName').textContent = data.name;
            document.getElementById('modalContact').textContent = data.email_or_phone;
            document.getElementById('modalDate').textContent = new Date(data.created_at).toLocaleString();
            document.getElementById('modalIp').textContent = data.ip_address || 'Not Recorded';
            document.getElementById('modalMessage').textContent = data.message;
            document.getElementById('modalAdminNotes').value = data.admin_notes || '';
            document.getElementById('modalStatusSelect').value = data.status;

            // Badges
            const typeBadge = document.getElementById('modalTypeBadge');
            if (data.type === 'feedback') {
                typeBadge.textContent = 'Feedback';
                typeBadge.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-[#EAFBF2] text-[#15965C] border border-[#20BF78]/40';
            } else {
                typeBadge.textContent = 'Contact Inquiry';
                typeBadge.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-blue-50 text-blue-700 border border-blue-200';
            }

            const statusBadge = document.getElementById('modalStatusBadge');
            if (data.status === 'new') {
                statusBadge.textContent = 'New';
                statusBadge.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-800';
            } else if (data.status === 'replied') {
                statusBadge.textContent = 'Replied';
                statusBadge.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-800';
            } else {
                statusBadge.textContent = 'Read';
                statusBadge.className = 'px-2.5 py-0.5 rounded-full text-xs font-bold bg-slate-100 text-slate-700';
            }

            // Rating
            const ratingContainer = document.getElementById('modalRatingContainer');
            const ratingStars = document.getElementById('modalRatingStars');
            if (data.rating) {
                ratingContainer.classList.remove('hidden');
                ratingStars.textContent = '★'.repeat(data.rating) + '☆'.repeat(5 - data.rating) + ` (${data.rating}/5)`;
            } else {
                ratingContainer.classList.add('hidden');
            }

            // Form Action
            const form = document.getElementById('modalUpdateForm');
            form.action = `/admin/messages/${data.id}/status`;

            // Reach customer link
            const actionLink = document.getElementById('modalActionLink');
            if (data.email_or_phone.includes('@')) {
                actionLink.href = `mailto:${data.email_or_phone}?subject=Re: ${encodeURIComponent(data.subject || 'Fetan Equb Inquiry')}`;
                actionLink.innerHTML = '<span>✉️ Email Customer</span>';
            } else {
                actionLink.href = `tel:${data.email_or_phone}`;
                actionLink.innerHTML = '<span>📞 Call Customer</span>';
            }

            document.getElementById('detailModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('detailModal').classList.add('hidden');
        }

        // Close on ESC key or background click
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeModal();
        });
        document.getElementById('detailModal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });
    </script>
</body>
</html>
