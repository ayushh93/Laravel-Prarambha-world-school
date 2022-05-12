<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactus;
class contactusController extends Controller
{
    //contact settings
    public function contactus()
    {
        $contact= contactus::first();
        return view('admin.contact',compact('contact'));
        
    }
    public function updatecontact(Request $request, $id)
    {
        $data = $request->all();
        // $validateData = $request->validate([
        //     'Address' => 'required',
        //     'phone_number' => 'required | numeric',
        //     'email' => 'required | email',
        //     'facebook_link' => 'required | url',
        //     'instagram_link' => 'required | url',
        //  ]);
         
         $contact = contactus::findorfail($id);          
        $contact->Address = $data['Address'];
        $contact->phone_number = $data['phone_number'];
        $contact->email = $data['email'];
        $contact->facebook_link = $data['facebook_link'];
        $contact->instagram_link = $data['instagram_link'];
        $contact->save();
        return back()->with('success','Contact detail updated succesfully');
    }
}
