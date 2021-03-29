<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama, $namaMobil, $nomor, $harga)
    {
        $this->nama = $nama;
        $this->namaMobil = $namaMobil;
        $this->nomor = $nomor;
        $this->harga = $harga;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('calvin@jendela360.com')
            ->view('email')
            ->with(
            [
                'nama' => $this->nama,
                'namaMobil' => $this->namaMobil,
                'nomor' => $this->nomor,
                'harga' => $this->harga,
            ]);
    }
}
