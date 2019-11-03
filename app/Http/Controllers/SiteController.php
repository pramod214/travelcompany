<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function create(){
        return view('admin.site.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'phone'=>'required|digits:10',
            'email'=>'required',

        ]);
        $site = new Site();
        if($request->isMethod('post')){
            $data = $request->all();
        if(count($data)>=1){
            return redirect()->back()->with('error_message','You cannot store more than one site setting');
        }
            $site->phone = $data['phone'];
            $site->email = strtolower($data['email']);
            $site->location = ucwords(strtolower($data['location']));
            $site->facebook= $data['facebook'];
            $site->twitter = $data['twitter'];
            $site->insta = $data['insta'];
            $site->youtube = $data['youtube'];
            $site->save();
            return redirect()->route('site.index')->with('message','Created Successfully');
        }
    }

    public function index(){
        $site = Site::latest()->get();
        return view('admin.site.index',compact('site'));
    }

    public function edit($id){
        $site = Site::findOrFail($id);
        return view('admin.site.edit',compact("site"));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'phone'=>'required|digits:10',
            'email'=>'required',

        ]);
        $site = Site::findOrFail($id);
        if($request->isMethod('POST')){
            $data = $request->all();
            $site->phone = $data['phone'];
            $site->email = strtolower($data['email']);
            $site->location = $data['location'];
            $site->facebook= $data['facebook'];
            $site->twitter = $data['twitter'];
            $site->insta = $data['insta'];
            $site->youtube = $data['youtube'];
            $site->save();
            return redirect()->route('site.index')->with('message','Updated Successfully');
        }
    }

    public function delete($id){
        $site = Site::findOrFail($id);
        $site->delete();
        return redirect()->route('site.index')->with('message','Deleted Successfully');
    }
}
