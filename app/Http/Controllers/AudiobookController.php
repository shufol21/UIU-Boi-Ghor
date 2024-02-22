<?php

namespace App\Http\Controllers;

use App\Models\Audiobook;
use App\Models\Cart;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AudiobookController extends Controller
{
    public function index(){
        $audioBooks = Audiobook::all();
        $categories = Category::all();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('audio-book',compact('categories','cart','audioBooks'));
        }catch(Exception $e){
            return view('audio-book',compact('categories','audioBooks'));
        }
    }
    public function addAudiobook(){
        return view('admin.audio-book.add-audiobook');
    }
    public function insert(Request $request){
        $audioBook = new Audiobook();
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/audiobooks',$fileName);
            $audioBook->file = $fileName;
        }
        $audioBook->name = $request->name;
        $audioBook->author_name = $request->author_name;
        $audioBook->save();
        return redirect('audiobooks')->with('status', 'Book Added Successfully');
    }
    public function viewAll(){
        $audioBooks = Audiobook::all();
        return view('admin.audio-book.audiobooks',compact('audioBooks'));
    }
    public function destroy($id){
        $audioBook = Audiobook::find($id);
        $audioBook->delete();
        return redirect('audiobooks')->with('status', 'Book Deleted Successfully');
    }
    public function download(Request $request, $file){
        return response()->download(public_path('assets/uploads/audiobooks/'.$file));
    }
}