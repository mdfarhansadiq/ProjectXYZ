<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\GreetingMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function show()
    {
        return view('pages.contact');
    }

    public function email(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $subjects = $request->subjects;
        $message = $request->message;
        $admin = 'mdfarhansadiq01@gmail.com';

        Mail::to($admin)->send(new GreetingMail($name, $email, $phone, $subjects, $message));

        return redirect()->back();
    }
}
