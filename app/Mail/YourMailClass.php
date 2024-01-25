<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YourMailClass extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $message;
    public $name;
    public $email;
    public $phone;

    public function __construct($subject, $message, $name, $email, $phone)
    {
        $this->subject = (string) $subject;
        $this->message = (string) $message;
        $this->name = (string) $name;
        $this->email = (string) $email;
        $this->phone = (string) $phone;
    }


    public function build()
    {
        return $this->subject($this->subject)
            ->view('emails.your_email_template')
            ->with(['emailMessage' => $this->message, 'name' => $this->name, 'email' => $this->email, 'phone' => $this->phone]);
    }

}
