<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $email = 'paawanpbhatt@gmail.com';
        Mail::to($email)->send(new Subscribe($email));
        return 'Email sent';
    }
}
