<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    // Accept data from the controller
    public function __construct($data)
    {
        $this->data = $data;
    }

    // Set the subject
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }

    // Pass data to the Blade view
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact', // Make sure this view exists!
            with: ['data' => $this->data],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}