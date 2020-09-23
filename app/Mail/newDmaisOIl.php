<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class newDmaisOIl extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from('contact@dmaisoil.com.br', 'D+ Oil Change');
        $this->subject('Teste de email');
        $this->to('addddryanna@gmail.com', 'Adriana Martins');
        
        return $this->view('Mail.newDmaisOil');   
    }
}
