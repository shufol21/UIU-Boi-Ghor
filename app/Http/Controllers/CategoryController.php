<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.categories',compact('category'));
    }
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function insert(Request $request){
        $category = new Category();

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE?'1':'0';
        $category->save();
        return redirect('categories')->with('status', "Category Added Successfully");
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit-category',compact('category'));
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE?'1':'0';
        $category->update();
        return redirect('categories')->with('status', "Category Updated Successfully");
    }
    public function distroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('status', "Category Deleted Successfully");
    }
}