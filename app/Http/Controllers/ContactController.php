<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Cart;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::all();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('contact',compact('categories','cart'));
        }catch(Exception $e){
            return view('contact',compact('categories'));
        }
    }
    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message'=> $request->message
        ];
        Mail::to('wsmoasis3@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('status', 'Thanks For Contacting Us');;
    }
}