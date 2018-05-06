<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\InboxMessage;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.contact');
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {        
        // posleme adminovi notifikaci
        $admin->notify(new InboxMessage($message));
        
        // redirect uzivatele zpet
        return redirect()->back()->with('message', 'Díky za zprávu. Odpovím hned jak budu moct!');
    }
}
