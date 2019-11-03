<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
           'email'=>'required',
           'message'=>'required'
    	]);
    	$contact = new Contact();
    	if($request->isMethod('post')){
    		$data = $request->all();
            $contact->name = $data['name'];
            $contact->email = $data['email'];
            $contact->message = $data['message'];
            $contact->save();
            return redirect()->back()->with('success_message','Thankyou for contacting us');
    	}
    }


    public function index(){
    	$contact = Contact::latest()->get();
    	return view('admin.contact.index',compact('contact'));
    }

    public function delete(Request $request,$id){
    	$contact = Contact::findOrFail($id);
    	$contact->delete();
    	return redirect()->route('contact.index')->with('error_message','Deleted Successfully');
    }
}
