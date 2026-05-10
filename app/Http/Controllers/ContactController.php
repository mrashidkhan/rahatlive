<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function store(ContactRequest $request): JsonResponse
    {
        $inquiry = Inquiry::create([
            ...$request->validated(),
            'ip_address' => $request->ip(),
        ]);

        // Notify admin
        try {
            Mail::to(config('app.contact_email', 'info@3sixtyshows.com'))
                ->send(new \App\Mail\NewInquiryMail($inquiry));
        } catch (\Exception $e) {
            // Log but don't fail
            logger()->warning('Mail failed: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => "Thank you, {$inquiry->name}! We'll be in touch shortly.",
        ]);
    }
}
