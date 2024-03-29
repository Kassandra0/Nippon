<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = array(
            'email' => $request->email,
            'message' => $request->message,
        );

        Mail::to('kassandra88@live.fr')->send(new ContactMail($data));

        return redirect('/contact')->with('success', 'Email envoyé avec succès!');
    }
}
