<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'email'=>'required',
           'message'=>'required'
        ]);
        $enquiry = new Enquiry();
        if($request->isMethod('post')){
            $data = $request->all();
            $enquiry->name = $data['name'];
            $enquiry->email = $data['email'];
            $enquiry->message = $data['message'];
            $enquiry->save();
            return redirect()->back()->with('success_message','Thankyou for sending message');
        }
    }

    public function index(){
        $enquiries = Enquiry::latest()->get();
        return view('admin.enquiry.index',compact('enquiries'));
    }

    public function delete($id){
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();
        return redirect()->route('enquiry.index')->with('error_message','Deleted Successfully');
    }
}
