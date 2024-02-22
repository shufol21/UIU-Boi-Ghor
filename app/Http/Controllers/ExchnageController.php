<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExchnageController extends Controller
{
    public function exchange(){
        return view('user.exchange');
    }
    public function insert(Request $request){
        $exchnage = new Exchange();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/uploads/exchanges',$fileName);
            $exchnage->image = $fileName;
        }
        $exchnage->username =  Auth::user()->name;
        $exchnage->book_name =  $request->book_name;
        $exchnage->description =  $request->description;
        $exchnage->phone =  Auth::user()->phone;
        $exchnage->address = $request->address;
        $exchnage->save();
        return redirect('/')->with('status', 'Thanks for your exchange post!!');
    }
    public function exchanges(){
        $exchanges = Exchange::all();
        return view('admin.exchange.exchange',compact('exchanges'));
    }
    public function distroy($id){
        $exchange = Exchange::find($id);
        $exchange->delete();
        return redirect('exchanges')->with('status', 'Data Deletes Successfully!!');
    }
}
