<?php

namespace App\Http\Controllers;

use App\Models\Show;
use App\Models\PollVote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // All visible shows
        $shows = Show::visible()->get();

        // Featured/next show for countdown
        $featuredShow = Show::upcoming()->where('is_featured', true)->first()
                     ?? Show::upcoming()->first();

        // Poll results
        $pollCities = ['Dallas', 'Houston', 'Chicago', 'New York', 'Los Angeles', 'Atlanta', 'Seattle'];
        $pollResults = PollVote::selectRaw('city, COUNT(*) as votes')
                               ->groupBy('city')
                               ->pluck('votes', 'city')
                               ->toArray();

        $totalVotes = array_sum($pollResults);
        $pollData = collect($pollCities)->map(fn($city) => [
            'city'  => $city,
            'votes' => $pollResults[$city] ?? 0,
            'pct'   => $totalVotes ? round((($pollResults[$city] ?? 0) / $totalVotes) * 100) : 0,
        ])->sortByDesc('votes')->values();

        $userVote = $request->session()->get('poll_vote');

        return view('pages.home', compact('shows', 'featuredShow', 'pollData', 'totalVotes', 'userVote'));
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function sitemap()
    {
        $content = view('sitemap')->render();
        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
