<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Generador del email
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {

        $user = [
            'name' => 'Gustavo Marquez Prieto',
            'email' => 'ing.gustavo.marquez@gmail.com'
        ];

        // Mail::to(email_a_enviar)->send(instancia_clase_email);
        Mail::to($user['email'])->send(new TestEmail((object)$user));

        return "email";
    }
}
