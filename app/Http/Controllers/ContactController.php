<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\AdminContactMail;
use App\Mail\UserAcknowledgementMail;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * POST /contact
     * Validates the form, stores inquiry, sends two emails.
     */
    public function store(ContactRequest $request)
    {
        $data = $request->validated();

        // ── 1. Persist to database ────────────────────────────────
        try {
            Inquiry::create([
                'name'       => $data['name'],
                'email'      => $data['email'],
                'phone'      => $data['phone']   ?? null,
                'city'       => $data['city']    ?? null,
                'message'    => $data['message'],
                'ip_address' => $request->ip(),
            ]);
        } catch (\Throwable $e) {
            Log::error('Inquiry DB save failed: ' . $e->getMessage());
        }

        $submittedAt = now()->format('D, d M Y  H:i:s T');

        // ── 2. Email to admin ─────────────────────────────────────
        $adminEmailSent = false;
        try {
            Mail::to(config('mail.from.address', 'info@rahatlive.com'))
                ->send(new AdminContactMail(
                    senderName:    $data['name'],
                    senderEmail:   $data['email'],
                    phone:         $data['phone']   ?? 'Not provided',
                    city:          $data['city']    ?? 'Not provided',
                    userMessage:   $data['message'],
                    submittedAt:   $submittedAt,
                ));
            $adminEmailSent = true;
        } catch (\Throwable $e) {
            Log::error('Admin contact email failed: ' . $e->getMessage());
        }

        // ── 3. Acknowledgement email to the user ──────────────────
        $userEmailSent = false;
        try {
            Mail::to($data['email'], $data['name'])
                ->send(new UserAcknowledgementMail(
                    senderName:   $data['name'],
                    senderEmail:  $data['email'],
                    userMessage:  $data['message'],
                ));
            $userEmailSent = true;
        } catch (\Throwable $e) {
            Log::error('User acknowledgement email failed: ' . $e->getMessage());
        }

        // Redirect back with appropriate message
        if (!$adminEmailSent && !$userEmailSent) {
            return redirect()->back()
                ->with('error', "Thank you, {$data['name']}! Your message was received, but we're experiencing email delivery issues. Our team has been notified.")
                ->withInput();
        }

        return redirect()->back()
            ->with('success', "Thank you, {$data['name']}! Your message has been sent. We'll be in touch shortly.");
    }
}