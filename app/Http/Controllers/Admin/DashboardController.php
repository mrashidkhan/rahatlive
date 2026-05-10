<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Show;
use App\Models\Subscriber;
use App\Models\Inquiry;
use App\Models\PollVote;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'shows'       => Show::count(),
            'upcoming'    => Show::upcoming()->count(),
            'subscribers' => Subscriber::count(),
            'inquiries'   => Inquiry::count(),
            'unread'      => Inquiry::unread()->count(),
            'total_votes' => PollVote::count(),
        ];

        $recentInquiries  = Inquiry::latest()->take(5)->get();
        $recentSubscribers = Subscriber::latest()->take(5)->get();

        $topCity = PollVote::selectRaw('city, COUNT(*) as votes')
                           ->groupBy('city')
                           ->orderByDesc('votes')
                           ->first();

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'recentSubscribers', 'topCity'));
    }
}
