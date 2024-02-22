<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request){
       $book = Book::find($request->book_id);
       $user_id = Auth::user()->id;
       $cart = new Cart();
       $cart->user_id = $user_id;
       $cart->book_id = $request->book_id;
       $cart->qty = $request->qty;
       $cart->save();
       return redirect()->back()->with('status', 'Book Added to Cart Successfully');
    }
    public function distroy($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('status', 'Book Deleted From Cart');
    }
}