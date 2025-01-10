<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade as PDF;

class SendMailValide extends Mailable
{
    use Queueable, SerializesModels;

    protected $pdfPath;
    protected $nom;
    protected $type;

    /**
     * Create a new message instance.
     *
     * @param string $pdfPath
     */
    public function __construct($pdfPath, $nom, $type)
    {
        $this->pdfPath = $pdfPath;
        $this->nom = $nom;
        $this->type = $type;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demande Validée',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.valide',
            with: [
                'nom' => $this->nom,
                'type' => $this->type
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
        return [
            // Attach the generated PDF using the stored path
            Attachment::fromPath($this->pdfPath)->as('demande.pdf'),
        ];
    }
}
