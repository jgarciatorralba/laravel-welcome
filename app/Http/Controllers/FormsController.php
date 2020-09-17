<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{
    public function send(Request $request){
        $validatedData = $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'age' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:55',
        ]);

        Mail::to($validatedData['email'])->send(new ConfirmationMail($validatedData));

        $confirmation = "Confirmation email sent successfully!";
        return view('pages.contact')->with('confirmation', $confirmation);
    }
}
