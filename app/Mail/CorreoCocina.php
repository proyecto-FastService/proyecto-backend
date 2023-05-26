<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class CorreoCocina extends Mailable
{
    use Queueable, SerializesModels;

    public $productos;
    public $mesa;

    /**
     * Create a new message instance.
     *
     * @param  Collection  $productos
     * @param  int  $mesa
     */
    public function __construct(Collection $productos, int $mesa)
    {
        $this->productos = $productos;
        $this->mesa = $mesa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.cocina')
            ->subject('Correo Fast Service')
            ->with([
                'productos' => $this->productos,
                'mesa' => $this->mesa,
            ]);
    }

    /**
     * Get the message content definition.
     */
    /* public function content(): Content
    {
        return new Content(
            view: 'emails.prueba',
        );
    } */

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
