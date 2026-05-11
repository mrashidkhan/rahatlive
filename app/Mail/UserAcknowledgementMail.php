<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserAcknowledgementMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly string $senderName,
        public readonly string $senderEmail,
        public readonly string $userMessage,
    ) {}

    public function build()
{
    return $this
        ->subject('We received your message — Rahat Live')
        ->view('emails.user-acknowledgement')
        ->text('emails.user-acknowledgement-text');
}

    public function attachments(): array
    {
        return [];
    }
}