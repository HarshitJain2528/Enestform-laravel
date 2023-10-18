<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UseCategory;
use App\Models\UseProduct;
use App\Models\Login;
use App\Models\cart;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index(){
        $allCategories=UseCategory::all();
        $products=UseProduct::all();
        return view('home',compact('allCategories','products'));
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
        $products=UseProduct::where('id',$id)->get();
        return view('addproduct',compact('allCategories','products'));
    }

    public function addToCart(Request $request){
        $productId = $request->get('product_id');
        $quantity = $request->get('qty');
        $product=UseProduct::find($productId);

        if ($quantity <= 0) {
            return redirect()->back()->with('error','Quantity must be greater than 0.');
        }
        if($request->isMethod('post')){
            UseProduct::where('id', $productId)->decrement('pstock', $quantity);
            $userId = Auth::guard('signup')->id();
            $addtocart=new cart;
            $addtocart->user_id = $userId;;
            $addtocart->product_id=$productId;
            $addtocart->quantity=$quantity;
            $addtocart->save();
        }
        return redirect()->back()->with('success', 'Product added to cart.');
    }
    public function contact_us(Request $request){
        $contact=new contact;
        if($request->isMethod('post')){
            $contact->fullname=$request->get('fn');
            $contact->email=$request->get('ea');
            $contact->message=$request->get('me');
            $contact->save();
        }
        return redirect()->back()->with('success','Your message has been sent!'); 
    }
}
