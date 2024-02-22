<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Rent;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    public function view($id){
        $categories = Category::all();
        $book = Book::find($id);
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('rent-view',compact('categories','cart','book'));
        }catch(Exception $e){
            return view('rent-view',compact('categories','book'));
        }
    }
    public function rent(Request $request){
        $rent = new Rent();
        $rent->book_id = $request->book_id;
        $rent->name = $request->name;
        $rent->address = $request->address;
        $rent->zip = $request->zip;
        $rent->email = $request->email;
        $rent->price = 100;
        $rent->phone = $request->phone;
        $rent->payment_type = $request->payment_type;
        $rent->save();
        return redirect('/')->with('status', 'Rent Placed Successfully');
    }
    public function index(){
        $rents = Rent::where('status','0')->get();
        return view('admin.rent.rents',compact('rents'));
    }
    public function viewR($id){
        $rent = Rent::where('id',$id)->first();
        return view('admin.rent.view-rent',compact('rent'));
    }
    public function update(Request $request){
        $rent = Rent::find($request->id);
        $rent->status = $request->status;
        $rent->update();
        $rents = Rent::where('status','0')->get();
        return view('admin.rent.rents',compact('rents'))->with('status','Rent Delivired');
    }
    public function history(){
        $rents = Rent::where('status','1')->get();
        return view('admin.rent.history',compact('rents'));
    }
}