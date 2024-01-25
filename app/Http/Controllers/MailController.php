<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\YourMailClass; // Replace with your mail class

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $to = $request->input('to');
        $subject = $request->input('subject');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        // You may need to customize the mail class based on your requirements`
        $mail = new YourMailClass($subject, $message, $name, $email, $phone);

        Mail::to($to)->send($mail);

        return response()->json(['message' => 'Email sent successfully']);
    }
}
