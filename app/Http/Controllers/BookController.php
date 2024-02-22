<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('admin.book.books', compact('books'));
    }
    public function addBook(){
        $category = Category::all();
        return view('admin.book.add-book',compact('category'));
    }
    public function insert(Request $request){
        $books = new Book();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/books',$fileName);
            $books->image = $fileName;
        }
        $books->cat_id = $request->input('cat_id');
        $books->name = $request->input('name');
        $books->author_name = $request->input('author_name');
        $books->short_description = $request->input('short_description');
        $books->long_description = $request->input('long_description');
        $books->original_price = $request->input('original_price');
        $books->selling_price = $request->input('selling_price');
        $books->qty = $request->input('qty');
        $books->status = $request->input('status') == TRUE?'1':'0';
        $books->trending = $request->input('trending') == TRUE?'1':'0';
        $books->save();
        return redirect('books')->with('status', 'Book Added Successfully');
    }
    public function edit($id){
        $book = Book::find($id);
        return view('admin.book.edit-book',compact('book'));
    }
    public function update(Request $request,$id){
        $book = Book::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/books/'.$book->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/books',$fileName);
            $book->image = $fileName;
        }
        $book->name = $request->input('name');
        $book->author_name = $request->input('author_name');
        $book->short_description = $request->input('short_description');
        $book->long_description = $request->input('long_description');
        $book->original_price = $request->input('original_price');
        $book->selling_price = $request->input('selling_price');
        $book->qty = $request->input('qty');
        $book->status = $request->input('status') == TRUE?'1':'0';
        $book->trending = $request->input('trending') == TRUE?'1':'0';
        $book->update();
        return redirect('books')->with('status', 'Book Updated Successfully');
    }
    public function distroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect('books')->with('status', 'Book Deleted Successfully');
    }
}