<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsSendToPartner extends Mailable
{
    use Queueable, SerializesModels;

    protected $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sunshinewellness@web.de')->to($this->request->email)->bcc('sunshinewellness@web.de')->subject("Re: Sunshine Wellness Anfrage")->markdown('emails.contact_us_send_to_sender_partner')->with($this->request->input());
    }
}
