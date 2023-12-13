<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from your_email.com',
            'body' => 'This is for testing email using smtp.'
        ];
        
        /* Mail::to('bathelt@gmail.com')
 ->send(new DemoMail($mailData)); */
        foreach (['testemil9779@gmail.com',
        'tesztmarci96@gmail.com',
        'tesztbibanka@gmail.com',
        'foloslegesideirni@gmail.com',
        'tesztmariann7474@gmail.com',
        'bathelt@gmail.com',
        'testszzoli2023@gmail.com'] as $recipient)
    {
        
 Mail::to($recipient)
 ->send(new DemoMail($mailData));
    }
        dd("Email is sent successfully.");
    }
 
}
