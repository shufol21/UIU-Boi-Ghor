<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use Exception;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use Barryvdh\DomPDF\Facade\Pdf;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        $books = Book::where('trending','1')->get();
        $academics = Book::where('cat_id','6')->get();
        $fictionals = Book::where('cat_id','8')->get();
        $all = Book::all();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('index',compact('books','academics','fictionals','all','categories','cart'));
        }catch(Exception $e){
            return view('index',compact('books','academics','fictionals','all','categories'));
        }
    }
    public function trending(){
        $categories = Category::all();
        $books = Book::where('trending','1')->get();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('view-all',compact('books','categories','cart'));
        }catch(Exception $e){
            return view('view-all',compact('books','categories'));
        }
    }
    public function academics(){
        $categories = Category::all();
        $books = Book::where('cat_id','6')->get();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('view-all',compact('books','categories','cart'));
        }catch(Exception $e){
            return view('view-all',compact('books','categories'));
        }
    }
    public function fictionals(){
        $categories = Category::all();
        $books = Book::where('cat_id','8')->get();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('view-all',compact('books','categories','cart'));
        }catch(Exception $e){
            return view('view-all',compact('books','categories'));
        }
    }
    public function allBooks(){
        $categories = Category::all();
        $books = Book::all();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('view-all',compact('books','categories','cart'));
        }catch(Exception $e){
            return view('view-all',compact('books','categories'));
        }
    }
    public function categoryWise($id){
        $categories = Category::all();
        $books = Book::where('cat_id',$id)->get();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('view-all',compact('books','categories','cart'));
        }catch(Exception $e){
            return view('view-all',compact('books','categories'));
        }
    }
    public function single($id){
        $categories = Category::all();
        $book = Book::where('id',$id)->first();
        $trendings = Book::where('trending','1')->get();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('single-product',compact('categories','book','trendings','cart'));
        }catch(Exception $e){
            return view('single-product',compact('categories','book','trendings'));
        }
    }
    public function profile(){
        $categories = Category::all();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('user-profile',compact('categories','cart'));
        }catch(Exception $e){
            return view('user-profile',compact('categories'));
        }
    }
    public function orderHistory(){
        $categories = Category::all();
        $user_mail = Auth::user()->email;
        $orders = Order::where('email',$user_mail)->get();
        try{
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            return view('user-order-history',compact('categories','cart','orders'));
        }catch(Exception $e){
            return view('user-order-history',compact('categories','orders'));
        }
    }
    public function viewInvoice($id){
        $order = Order::find($id);
        return view('admin.invoice.generate-invoice',compact('order'));
    }
    public function generateInvoice($id){
        $order = Order::find($id);
        $data= [
            'order'=>$order
        ];
        $pdf = Pdf::loadView('admin.invoice.generate-invoice', $data);
        return $pdf->download('invoice'.$id.'.pdf');
    }

}