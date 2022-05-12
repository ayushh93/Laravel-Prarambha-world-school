<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactinfo;

class contactinfoController extends Controller
{
    //
    public function storecontactinfo(Request $request)

    {
        
        $data = $request->all();
    
        $validateData = $request->validate([
                'name' => 'required',
                'subject' => 'required| max:255',
                'email' => 'required|email',
                'message' => 'required',
             ]);
        
        $contact = new contactinfo();
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];
        $contact->save();
        return back()->with('success','Contact information submitted succesfully');
    }
}
