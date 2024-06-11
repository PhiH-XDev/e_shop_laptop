<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class GuiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */


    public $hoten="";
    public $email="";
    public $tieude="";
    public $noidung="";
    public function __construct( $ht, $em,$td ,$nd ){
        $this->hoten = $ht;
        $this->email = $em;
        $this->tieude = $td;
        $this->noidung = $nd;
    }
    public function envelope() {
        return new Envelope(subject: 'Mail liên hệ từ khách hàng',);
    }
    public function content() {
       return new Content( view: 'acout.viewMailLienHe',);
    }
    public function attachments() { return []; }

    /**
     * Get the message envelope.
     */


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */

}
