<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact; 

class ContactController extends Controller { 

    public function getContact() { 
       return view('contact_us'); 
    } 

    public function saveContact(Request $request) { 

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact();

        $contact->firstName = $request->firstName;
        $contact->lastName = $request->lastName;        
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        
        Mail::send('contact_email',
             array(
                 'firstName' => $request->get('firstName'),
                 'lastName' => $request->get('lastName'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone' => $request->get('phone'),
                 'notes' => $request->get('message')
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('mrlopez2290@gmail.com');
               }
            );
               
        return back()->with('success', 'Thank you for contact us!');

    }
}
