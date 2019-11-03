<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Package;
use App\PackageCategory;
use App\PackageImage;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $destination = Package::latest()->paginate(5);
        $blog = Blog::all();
        $package = Package::all();
        return view('frontend.index',compact('package','blog','destination'));
    }

    public function blogs(){
        $blog = Blog::all();
        return view('frontend.blogs',compact('blog'));
    }

    public function blogdetails($id){
        $destination = Package::all();
        $packages = Package::all();
        $blogdetails = Blog::where(['id'=>$id])->first();
        return view('frontend.blogdetails',compact('blogdetails','packages','destination'));
    }

    public function tour(){
        $categories = PackageCategory::all();
        $tour = Package::all();
        return view('frontend.tour',compact('categories','tour'));
    }
    public function tourdetails($id){
        $destination = Package::all();
        $packageImage = PackageImage::where('package_id','=',$id)->get();
        $tourdetails = Package::where(['id'=>$id])->first();
        $related = Package::where(['id'=>$id])->first();
        $relatedTour = Package::findOrFail($id)->where(['category_id'=>$related->category_id])->get();

        return view('frontend.tourdetails',compact('tourdetails','packageImage','relatedTour','destination'));
    }

    public function destination(){
        return view('frontend.destination');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function error(){
        return view('frontend.404');
    }


}
