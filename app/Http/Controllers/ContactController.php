<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        Contact::create([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);

        return redirect()->back()->with('seccess','Send Seccess');
    }
}
