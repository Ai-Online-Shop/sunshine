<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
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
        return $this->from($this->request->email)->to(get_option('email_address'))->bcc('info@wolf-gate.com')->subject("[".get_option('site_name')."] Empfehlungsgeber")->markdown('emails.contact_us')->with([
            'name' => $this->request->name,
            'email' => $this->request->email,
            'empfehlungsname' => $this->request->empfehlungsname,
            'empfehlungsadresse' => $this->request->empfehlungsadresse,
            'gutschein' => $this->request->gutschein,
        ]);
    }
}
