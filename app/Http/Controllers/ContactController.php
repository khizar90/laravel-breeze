<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $users = Contact::all();
         return view('user')->with('users' , $users);
    }
    public function contact(){
        return view('contact');
    }

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required'
            ]
        );
       
        Contact::create([
            'name' => $request->name,
            'email' =>  $request->email
        ]);
      $request->session()->flash('alert-success','Contact detail send');

        return  redirect()->route('contact');
    }
}
