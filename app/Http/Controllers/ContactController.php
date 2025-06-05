<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function contactPage(){
    return view('pages.contact');
   }

   public function contactStore(Request $request){
    $request->validate([
        'name' => 'required|string|max:50',
        'email' => 'required|email|',
        'phone' => 'required|max:15|',
        'message' => 'required',
    ]);

    $contacts = new Contact();

    $contacts->name = $request->name;
    $contacts->email = $request->email;
    $contacts->phone = $request->phone;
    $contacts->message = $request->message;


    $contacts->save();
    return response()->json([
        'message' => 'Your message has been successfully sent!'
    ]);
   }
}
