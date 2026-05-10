<?php

namespace App\Http\Controllers;

use App\Models\PollVote;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PollController extends Controller
{
    protected array $allowedCities = [
        'Dallas', 'Houston', 'Chicago', 'New York', 'Los Angeles', 'Atlanta', 'Seattle',
    ];

    public function vote(Request $request): JsonResponse
    {
        $request->validate(['city' => 'required|string|in:' . implode(',', $this->allowedCities)]);

        // One vote per session
        if ($request->session()->has('poll_vote')) {
            return response()->json(['success' => false, 'message' => 'Already voted.'], 422);
        }

        PollVote::create([
            'city'       => $request->city,
            'ip_address' => $request->ip(),
            'session_id' => $request->session()->getId(),
        ]);

        $request->session()->put('poll_vote', $request->city);

        return response()->json([
            'success' => true,
            'message' => "Vote cast for {$request->city}!",
            'results' => $this->getResults(),
        ]);
    }

    public function results(): JsonResponse
    {
        return response()->json($this->getResults());
    }

    private function getResults(): array
    {
        $votes = PollVote::selectRaw('city, COUNT(*) as votes')
                         ->groupBy('city')
                         ->pluck('votes', 'city')
                         ->toArray();

        $total = array_sum($votes);

        return collect($this->allowedCities)->map(fn($city) => [
            'city'  => $city,
            'votes' => $votes[$city] ?? 0,
            'pct'   => $total ? round((($votes[$city] ?? 0) / $total) * 100) : 0,
        ])->sortByDesc('votes')->values()->toArray();
    }
}
