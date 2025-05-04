<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:40',
            'email'   => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        Mail::to('amankumar010604@gmail.com')->send(
            new ContactMail($request->only('name', 'email', 'message'))
        );

        return back()->with('success', 'Your message has been sent!');
    }
}