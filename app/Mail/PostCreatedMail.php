<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use LaravelLang\Publisher\Console\Add;

class PostCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $post;

    /**
     * Create a new message instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
        // Aquí puedes pasar el post que se ha creado
        // Por ejemplo, si quieres enviar el título del post:
        // $this->post = $post->title;
        // O si quieres enviar todo el post:
        // $this->post = $post;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('davidomg30@gmail.com', 'David Luna'),
            subject: 'Post por Publicar',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.post-created',
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
