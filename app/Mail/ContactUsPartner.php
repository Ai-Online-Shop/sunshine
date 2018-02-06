<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsPartner extends Mailable
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
        return $this->from($this->request->email)->to('sunshinewellness@web.de')->bcc('info@immofound.de')->bcc('sunshinewellness@web.de')->subject("Anfrage Sunshine Wellness")->markdown('emails.contact_us_partner')->with([
            'name' => $this->request->name,
            'email' => $this->request->email,
            'telefonnummer' => $this->request->telefonnummer,
            'unternehmen' => $this->request->unternehmen,
            'anfrage' => $this->request->anfrage,
        ]);
    }
}
