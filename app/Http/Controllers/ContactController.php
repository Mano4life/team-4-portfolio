<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function addContact(Request $req){
        $contact = new Contact;
        $contact->sender_name = $req->name;
        $contact->sender_email = $req->email;
        $contact->message_subject = $req->subject;
        $contact->message_body = $req->message;
        $contact->save();

        return "OK";
    }
}
