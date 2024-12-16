<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessContactForm;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:1|max:5000',
        ]);

        // Mail::to(env("MAIL_ADMIN_EMAIL"))->send(new Contact($data));
        ProcessContactForm::dispatch($data);
        // defer(function () use ($data) {
        //     Mail::to(env("MAIL_ADMIN_EMAIL"))->send(new Contact($data));
        // });

        return redirect()->route('contact')->with('success', 'Thank you! The letter has been sent');
    }
}
