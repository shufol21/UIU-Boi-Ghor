<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $categories = Category::all();
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        return view('checkout',compact('cart','categories'));
    }
}