<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate input
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        // Prepare mail data
        $mailData = [
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'messageBody' => $request->message,
        ];

        // Send email
        Mail::send('emails.contact', $mailData, function ($message) use ($mailData) {
            $message->to('youremail@yourdomain.com') // 👈 your target email
                ->subject('New Enquiry: ' . $mailData['subject']);
        });

        // Redirect back with success message
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}