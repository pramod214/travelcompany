@extends('admin.includes.master')
@section('content')

    <div class="content-wrapper">
        <section class="content">

            <div class="row">
                <div class="col-lg-12">


                    <section class="content-header">
                        <h1>
                            Blog
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="iconsmind-Library"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item activew">Create Blog</li>
                        </ol>
                    </section>

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if(session()->has('error_message'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                            {{ session()->get('error_message') }}
                        </div>
                    @endif


                    <section class="content">
                        <a href="{{route('blog.index')}}" class="btn btn-primary">View Blogs</a>
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">
                                <h6 class="box-subtitle text-white">Create Blog</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">


                                        <form  action="{{route('blog.update',$blog->id)}}" method="POST"  enctype="multipart/form-data">

                                            @csrf
                                            <div class="form-group">
                                                <h5>Title<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}"> </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Short Description<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="shortDescription" class="form-control">{{$blog->shortDescription}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Content<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="content" id="editor1" class="form-control">{{$blog->content}} </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Tags<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="tags"  value="{{$blog->tags}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Date<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="date" id="date" value="{{date('Y-M-d')}}" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Blog Facebook Url<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="blog_facebook" id="blog_facebook" value="{{$blog->blog_facebook}}" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <h5>Blog Twitter Url <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="blog_twitter" value="{{$blog->blog_twitter}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Blog Linkedin Url<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="blog_linkedin" value="{{$blog->blog_linkedin}}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Quote<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="quote" value="{{$blog->quote}}" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Show In Home<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="showinhome" id="" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="1" @if($blog->showinhome==1) selected @endif>True</option>
                                                        <option value="0" @if($blog->showinhome==0) selected @endif>False</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Image<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="image" value="#" class="form-control">
                                                    <img src="{{asset('public/adminpanel/uploads/blog/'.$blog->image)}}" alt="" width="100px" height="100px">
                                                </div>
                                            </div>

                                            <div class="text-xs-right">
                                                <button type="submit" id="submit" class="btn btn-info">Update Blog</button>
                                            </div>

                                        </form>

                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </section>


                </div>
            </div>

        </section>
    </div>

@endsection
