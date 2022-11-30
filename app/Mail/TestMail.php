<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    private mixed $mailDatab;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->setMailDatab($mailData);
    }

    //@return

    public function build(): TestMail
    {
        return $this->subject('Test Email')->view('email.test');
    }



    /**
     * @param mixed $mailDatab
     */
    public function setMailDatab(mixed $mailDatab): void
    {
        $this->mailDatab = $mailDatab;
    }


}
