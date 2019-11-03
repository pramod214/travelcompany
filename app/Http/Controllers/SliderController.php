<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function create(){
        return view('admin.slider.create');
    }

    public function store(Request $request){
        $this->validate($request,[
           'title'=> 'required',
           'image'=> 'required',
        ]);
        $slider = new Slider();
        $slidercheck = Slider::all();
        if(count($slidercheck)>0){
            return redirect()->route('slider.index')->with('error_message','You cannot add more than 1 Slider');
        }
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(100,1000) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/slider');
                    $image_tmp->move($large_image_path,$filename);
                    $slider->image = $filename;
                }
            }
            if($request->hasFile('logo')){
                $image_tmp = Input::file('logo');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(100,1000) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/logo');
                    $image_tmp->move($large_image_path,$filename);
                    $slider->logo = $filename;
                }
            }
            $slider->title = ucwords($data['title']);
            $slider->save();
//            dd($slider);
        }
        return redirect()->route('slider.index')->with('success_message','Created Successfully');
    }

    public function index(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('slider'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        $slider = Slider::findOrFail($id);
        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasFile('image')!=null) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(100, 1000) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/slider');
                    $image_tmp->move($large_image_path, $filename);
                    $slider->image = $filename;
            }
            if ($request->hasFile('logo')!=null) {
                $image_tmp = Input::file('logo');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(100, 1000) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/logo');
                    $image_tmp->move($large_image_path, $filename);
                    $slider->logo = $filename;
                }
            }
            $slider->title = ucwords($data['title']);
            $slider->save();
            return redirect()->route('slider.index')->with('update_message','Updated Successfully');
        }
            else{
                $slider->title = ucwords($data['title']);
                $slider->save();
                return redirect()->route('slider.index')->with('update_message','Updated Successfully');
            }
        }
    }

    public function delete($id){
        $slider = Slider::findOrFail($id);
        $large_image_path = 'adminpanel/uploads/slider/';
        if(file_exists($large_image_path.$slider->image)){
            unlink($large_image_path.$slider->image);
        }

        $large_image_path = 'adminpanel/uploads/logo/';
        if(file_exists($large_image_path.$slider->logo)){
            unlink($large_image_path.$slider->logo);
        }
        $slider->delete();
        return redirect()->route('slider.index')->with('error_message','Deleted Successfully');
    }
}
