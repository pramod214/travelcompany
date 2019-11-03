<?php

namespace App\Http\Controllers;

use App\PackageCategory;
use Illuminate\Http\Request;

class PackageCategoryController extends Controller
{
    public function create(){
        return view('admin.packagecategory.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:package_categories,name'
        ]);
        $category = new PackageCategory();
        if($request->isMethod('post')){
            $data = $request->all();
            $category->name = $data['name'];
            $category->save();
            return redirect()->route('category.index')->with('message','Created Successfully');
        }
    }

    public function index(){
        $categories = PackageCategory::latest()->get();
        return view('admin.packagecategory.index',compact('categories'));
    }

    public function delete($id){
        $category = PackageCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('message','Deleted Successfully');
    }
}


