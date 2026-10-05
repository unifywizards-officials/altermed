<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;
    public $recipientType;

    /**
     * Create a new message instance.
     */
    public function __construct($contactData, $recipientType = 'admin')
    {
        $this->contactData = $contactData;
        $this->recipientType = $recipientType;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if ($this->recipientType === 'user') {
            return new Envelope(
                subject: 'Thank you for contacting AlterMed RCM',
            );
        }

        return new Envelope(
            subject: 'New Contact Form Submission - ' . ($this->contactData['subject'] ?? 'No Subject'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if ($this->recipientType === 'user') {
            return new Content(
                view: 'emails.contact-confirmation',
                with: [
                    'contactData' => $this->contactData,
                ],
            );
        }

        return new Content(
            view: 'emails.contact-form',
            with: [
                'contactData' => $this->contactData,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
