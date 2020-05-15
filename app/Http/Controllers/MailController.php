<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    public function create(){
            return view ('/');
    }
    public function store(){
         $data=request()->validate([
             'name'=>'required',
             'email'=>'required|email',
             'subject'=>'required',
             'message'=>'required',

         ]);

         Mail::to('test@test.com')->send(new ContactMail($data)); 
         
 
     
            return redirect()->back()->with('messages','Votre message a bienété nvoyer');
    }
}
