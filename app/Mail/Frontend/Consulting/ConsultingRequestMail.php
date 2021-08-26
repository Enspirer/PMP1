<?php

namespace App\Mail\Frontend\Consulting;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ConsultingRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(Request $request)
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
        return $this->to([config('mail.from.address'),'dm@tallentor.com', 'zajjith@yopmail.com'], config('mail.from.name'))
            ->view('frontend.mail.consulting_request')
            ->text('frontend.mail.consulting_request')
            ->subject('Consulting Requests', ['app_name' => app_name()])
            ->from($this->request->email, $this->request->name)
            ->replyTo($this->request->email, $this->request->name);
    }
}
