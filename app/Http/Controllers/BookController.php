<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'mobile'=>'required|digits:10',
           'email'=>'required',
           'date'=>'required',
           'noofvisitors'=>'required',
        ]);

        $check = Book::where([['package_id','=',$request->package_id],['email','=',$request->email]])->get();
        if(count($check)>0){
            return redirect()->back()->with('error_message','Your package has already been booked');
        }
        else{
            $book = new Book();
            if($request->isMethod('post')) {
                $data = $request->all();
                $book->name = $data['name'];
                $book->mobile = $data['mobile'];
                $book->email = $data['email'];
                $book->date = $data['date'];
                $book->noofvisitors = $data['noofvisitors'];
                $book->noofchildren = $data['noofchildren'];
                $book->package_id = $data['package_id'];
                $book->save();
                return redirect()->back()->with('success_message', 'Thankyou for booking');
            }
        }
    }

    public function index(){
        $books = Book::latest()->get();
        return view('admin.book.index',compact('books'));
    }

    public function approve($id){
        $book = Book::findOrFail($id);
        $book->approve="1";
        $book->save();
        return redirect()->back()->with('success_message','Approved Successfully');

    }

}
