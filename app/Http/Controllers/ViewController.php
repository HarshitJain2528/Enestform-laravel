<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UseCategory;
use App\Models\UseProduct;

class ViewController extends Controller
{
    public function index(){
        $allCategories=UseCategory::all();
        return view('home',compact('allCategories'));
    }
    public function login(){
        return view('login');
    }
    public function contact(){
        $allCategories=UseCategory::all();
        return view('contact',compact('allCategories'));
    }
    public function buynow(Request $request, $id) {
        $category = UseCategory::where('id',$id)->get();
        $products=UseProduct::where('category_id',$id)->get();
        $allCategories = UseCategory::all();
    
        return view('buynow', compact('category','products','allCategories'));
    }
    
    public function addproduct(Request $request,$id){
        $allCategories=UseCategory::all();
        $product=UseProduct::where('id',$id)->get();
        return view('addproduct',compact('allCategories','product'));
    }
}
