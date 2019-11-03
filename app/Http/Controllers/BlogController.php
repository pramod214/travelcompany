<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){
        $id = Auth::user();
        $this->validate($request,[
            'title'=>'required',
            'shortDescription'=>'required',
            'image'=>'required',
            'tags'=>'required',
            'content'=>'required',
            'quote'=>'required'
        ]);
        $blog = new Blog();
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1000,10000) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/blog/');
                    $image_tmp->move($large_image_path,$filename);
                    $blog->image = $filename;
                }
            }
            $blog->user_id = $id['id'];
            $blog->title = $data['title'];
            $blog->shortDescription = $data['shortDescription'];
            $blog->tags = $data['tags'];
            $blog->content = $data['content'];
            $blog->quote = $data['quote'];
            $blog->date = $data['date'];
            $blog->blog_facebook = $data['blog_facebook'];
            $blog->blog_twitter = $data['blog_twitter'];
            $blog->blog_linkedin = $data['blog_linkedin'];
            $blog->save();
            return redirect()->route('blog.index')->with('success_message','Successfully Created');
        }
    }

    public function index(){
        $blogs = Blog::latest()->get();
        return view('admin.blog.index',compact('blogs'));
    }

    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('blog'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'shortDescription'=>'required',
            'tags'=>'required',
            'content'=>'required',
            'quote'=>'required',
            'showinhome' => 'required'
        ]);
        if($request->showinhome==1){
            $showinhomecheck = Blog::where('showinhome','=','1')->get();

            if(count($showinhomecheck)>2){
                return redirect()->back()->with('error_message','You cannot select more than 3 blog');
            }
        }
        $showinhome = 0;
        $blog = Blog::findOrFail($id);
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image')!=null){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1000,10000) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/blog/');
                    $image_tmp->move($large_image_path,$filename);
                    $blog->image = $filename;
                }
                if($request->showinhome==1){
                    $showinhome=1;
                }

                $blog->showinhome = $showinhome;
            $blog->title = $data['title'];
            $blog->shortDescription = $data['shortDescription'];
            $blog->tags = $data['tags'];
            $blog->content = $data['content'];
            $blog->quote = $data['quote'];
            $blog->date = $data['date'];
            $blog->blog_facebook = $data['blog_facebook'];
            $blog->blog_twitter = $data['blog_twitter'];
            $blog->blog_linkedin = $data['blog_linkedin'];
            $blog->save();
            return redirect()->route('blog.index')->with('message','Successfully Updated');
            }
            else{
                if($request->showinhome==1){
                    $showinhome = 1;
                }
                $blog->showinhome = $showinhome;
                $blog->title = $data['title'];
                $blog->shortDescription = $data['shortDescription'];
                $blog->tags = $data['tags'];
                $blog->content = $data['content'];
                $blog->quote = $data['quote'];
                $blog->date = $data['date'];
                $blog->blog_facebook = $data['blog_facebook'];
                $blog->blog_twitter = $data['blog_twitter'];
                $blog->blog_linkedin = $data['blog_linkedin'];
                $blog->save();
                return redirect()->route('blog.index')->with('message','Successfully Updated');
            }
        }
    }

    public function delete($id){
        $blog = Blog::findOrFail($id);
        $large_image_path = 'adminpanel/uploads/blog/';
        if(file_exists($large_image_path.$blog->image)){
            unlink($large_image_path.$blog->image);
        }
        $blog->delete();
        return redirect()->route('blog.index')->with('error_message','Deleted Successfully');
    }
}
