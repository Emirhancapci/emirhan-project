<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
  
      public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $save = $contact->save();
        if( $save ) {
            return redirect('/contact')->with('success', 'Mesaj başarıyla gönderildi');
        }
    }
}
