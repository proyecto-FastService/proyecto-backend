<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class CorreoFactura extends Mailable
{
    use Queueable, SerializesModels;

    public $productos;
    public $total;
    public $cif;
    public $nombreEmpresa;

    /**
     * Create a new message instance.
     *
     * @param  Collection  $productos
     * @param  float  $total
     * @param  string  $cif
     * @param  string  $nombreEmpresa
     */
    public function __construct(Collection $productos, float $total, $nombreEmpresa, $cif)
    {
        $this->productos = $productos;
        $this->total = $total;
        $this->nombreEmpresa = $nombreEmpresa;
        $this->cif = $cif;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.factura')
            ->subject('Correo Fast Service')
            ->with([
                'productos' => $this->productos,
                'total' => $this->total,
                'nombreEmpresa' => $this->nombreEmpresa,
                'cif' => $this->cif,
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
