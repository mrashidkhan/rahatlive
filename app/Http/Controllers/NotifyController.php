<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\NotifyRequest;
use Illuminate\Http\JsonResponse;

class NotifyController extends Controller
{
    public function store(NotifyRequest $request): JsonResponse
    {
        $existing = Subscriber::where('email', $request->email)->first();

        if ($existing) {
            return response()->json([
                'success' => true,
                'message' => "You're already on the list! We'll notify you first.",
            ]);
        }

        Subscriber::create([
            ...$request->validated(),
            'ip_address' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'message' => "🎶 You're on the list! We'll notify you the moment tickets drop.",
        ]);
    }
}
