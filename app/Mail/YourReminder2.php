<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class YourReminder2 extends Mailable
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
        return $this->from('sunshinewellness@web.de')->to($this->request->email)->bcc('sunshinewellness@web.de')->subject("RE: Gutschein Sunshine Wellness")->markdown('emails.orders.shipped2')->with([
            'email' => $this->request->email,
        ]);
   }
}
