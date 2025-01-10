<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RespondToStudent extends Mailable
{
    use Queueable, SerializesModels;

    protected $studentNom;
    protected $response;
    protected $type_demande;
    protected $reclamationSubject;

    /**
     * Create a new message instance.
     */
    public function __construct($studentNom, $response, $type_demande, $reclamationSubject)
    {
        $this->studentNom = $studentNom;
        $this->response = $response;
        $this->type_demande = $type_demande;
        $this->reclamationSubject = $reclamationSubject;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Response for your Request $this->type_demande",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.reponse',
            with: [
                'studentNom' => $this->studentNom,
                'response' => $this->response,
                'type_demande' => $this->type_demande,
                'reclamationSubject' => $this->reclamationSubject,
            ]
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
