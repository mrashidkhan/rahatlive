<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly string $senderName,
        public readonly string $senderEmail,
        public readonly string $phone,
        public readonly string $city,
        public readonly string $userMessage,
        public readonly string $submittedAt,
    ) {}

    public function build()
{
    return $this
        ->subject('New Contact Form Submission — ' . $this->senderName)
        ->replyTo($this->senderEmail, $this->senderName)
        ->view('emails.admin-contact')
        ->text('emails.admin-contact-text');
}

    public function attachments(): array
    {
        return [];
    }
}