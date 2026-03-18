<?php

namespace App\Application\Mail;

use App\Mail\MailContact;
use App\Mail\MiMailable;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public function sendContact(string $to, array $validatedData): void
    {
        Mail::to($to)->send(new MailContact($validatedData));
    }

    public function sendCredentials(string $to, array $details): void
    {
        Mail::to($to)->send(new MiMailable($details));
    }
}

