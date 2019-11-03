<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageCategory;
use App\PackageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Image;

class PackageController extends Controller
{
    public function create(){
        $categories = PackageCategory::all();
        return view('admin.package.create',compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'destination'=>'required',
            'shortDescription'=>'required',
            'price'=>'required|numeric',
            'itineraries'=>'required',
            'category'=>'required',
            'image'=>'required',
            'location'=>'required',
            'duration'=>'required',
            'returnDate'=>'required',
            'departureDate'=>'required',
            'content'=>'required',
            'noofpeople'=>'required|numeric',
            'discount'=>'required|integer',
            'returnTime'=>'required',
            'departureTime'=>'required'
        ]);

        $package = new Package();
        if($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1200, 999999) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/package/');
                    $image_tmp->move($large_image_path, $filename);
                    $package->image = $filename;
                }
            }
            $package->title = $data['title'];
            $package->destination = $data['destination'];
            $package->shortDescription = ucwords($data['shortDescription']);
            $package->itineraries = $data['itineraries'];
            $package->content = ucwords($data['content']);
            $package->price = $data['price'];
            $package->duration = $data['duration'];
            $package->returnDate = $data['returnDate'];
            $package->departureDate = $data['departureDate'];
            $package->returnTime = $data['returnTime'];
            $package->departureTime = $data['departureTime'];
            $package->noofpeople = $data['noofpeople'];
            $package->location = $data['location'];
            $package->discount = $data['discount'];
            $package->category_id = $data['category'];
            $package->save();
            return redirect()->route('package.index')->with('success_message','Created Successfully');
        }
    }

    public function index(){
        $packages = Package::latest()->get();
        return view('admin.package.index',compact('packages'));
    }

    public function edit($id){
        $package = Package::findOrFail($id);
        $categories = PackageCategory::all();
        return view('admin.package.edit',compact('package','categories'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'destination'=>'required',
            'shortDescription'=>'required',
            'price'=>'required|numeric',
            'itineraries'=>'required',
            'category'=>'required',
            'location'=>'required',
            'duration'=>'required',
            'returnDate'=>'required',
            'departureDate'=>'required',
            'content'=>'required',
            'noofpeople'=>'required|numeric',
            'discount'=>'required|integer',
            'showinhome'=>'required',
            'returnTime'=>'required',
            'departureTime'=>'required'
        ]);
        if($request->showinhome==1){
            $showinhomecheck  =Package::where('showinhome','=','1')->get();

            if(count($showinhomecheck)>5){
                return redirect()->back()->with('error_message','You cannot select more than 6 package');
            }
        }
        $showinhome=0;
        $package = Package::findOrFail($id);
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image') !=null){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1200, 999999) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/package/');
                    $image_tmp->move($large_image_path, $filename);
                    $package->image = $filename;
                }
                if($request->showinhome==1){
                    $showinhome=1;
                }
                $package->title = $data['title'];
                $package->destination = $data['destination'];
                $package->shortDescription = ucwords($data['shortDescription']);
                $package->itineraries = ucwords($data['itineraries']);
                $package->content = ucwords($data['content']);
                $package->price = $data['price'];
                $package->duration = $data['duration'];
                $package->returnDate = $data['returnDate'];
                $package->departureDate = $data['departureDate'];
                $package->returnTime = $data['returnTime'];
                $package->departureTime = $data['departureTime'];
                $package->noofpeople = $data['noofpeople'];
                $package->location = $data['location'];
                $package->discount = $data['discount'];
                $package->showinhome=$showinhome;
                $package->category_id = $data['category'];
                $package->save();
                return redirect()->route('package.index')->with('update_message','Updated Successfully');
            }
            else{

                if($request->showinhome==1){
                    $showinhome=1;
                }
                $package->title = $data['title'];
                $package->destination = $data['destination'];
                $package->showinhome=$showinhome;
                $package->shortDescription = ucwords($data['shortDescription']);
                $package->itineraries = ucwords($data['itineraries']);
                $package->content = ucwords($data['content']);
                $package->price = $data['price'];
                $package->duration = $data['duration'];
                $package->returnDate = $data['returnDate'];
                $package->departureDate = $data['departureDate'];
                $package->returnTime = $data['returnTime'];
                $package->departureTime = $data['departureTime'];
                $package->noofpeople = $data['noofpeople'];
                $package->location = $data['location'];
                $package->discount = $data['discount'];
                $package->category_id = $data['category'];
                $package->save();
                return redirect()->route('package.index')->with('update_message','Updated Successfully');
            }
        }
    }

    public function delete($id){
        $package = Package::findOrFail($id);
        $package->delete();
        return redirect()->route('package.index')->with('error_message','Deleted Successfully');
    }


    public function add_photo(Request $request,$id){
        $images  =Package::find($id);
        $photos = PackageImage::where(['package_id'=>$id])->latest()->get();
        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $photo = new PackageImage();
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(1200, 999999) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/package/photos/');
                    $file->move($large_image_path,$filename);
                    $photo->image = $filename;
                    $photo->package_id = $data['package_id'];
                    $photo->save();
                }
            }
            return redirect()->back();
        }
        return view ('admin.package.add_image',compact('images','photos'));
    }

    public function delete_package_image($id){
        $photo = PackageImage::findOrFail($id);
        $large_image_path = 'adminpanel/uploads/package/photos/';
        if(file_exists($large_image_path.$photo->image)){
            unlink($large_image_path.$photo->image);
        }
        $photo->delete();
        return redirect()->back()->with('error_message','Deleted Successfully');
    }

}



