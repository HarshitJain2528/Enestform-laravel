<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UseCategory;
use App\Models\UseProduct;
use App\Models\Login;
use App\Models\Cart;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // Retrieve all categories and products
        $allCategories = UseCategory::all();
        $products = UseProduct::all();
        
        // Return the 'home' view with data
        return view('home', compact('allCategories', 'products'));
    }

    /**
     * Display the login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('login');
    }

    /**
     * Display the contact page if the user is authenticated.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(){
        if(Auth::guard('signup')->check()){
            $allCategories = UseCategory::all();
            return view('contact', compact('allCategories'));
        }
        return redirect('login')->with('error','Login First');
    }

    /**
     * Display the products in a specific category for purchase.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function buynow(Request $request, $id) {
        $category = UseCategory::where('id', $id)->get();
        $products = UseProduct::where('category_id', $id)->get();
        $allCategories = UseCategory::all();
        return view('buynow', compact('category', 'products', 'allCategories'));
    }
    
    /**
     * Display a specific product for addition to the cart.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function addproduct(Request $request, $id){
        $allCategories = UseCategory::all();
        $products = UseProduct::where('id', $id)->get();
        return view('addproduct', compact('allCategories', 'products'));
    }

    /**
     * Add a product to the user's cart.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request){
        $productId = $request->get('product_id');
        $quantity = $request->get('qty');
        $product = UseProduct::find($productId);

        if ($quantity <= 0) {
            return redirect()->back()->with('error','Quantity must be greater than 0.');
        }
        if ($request->isMethod('post')){
            UseProduct::where('id', $productId)->decrement('pstock', $quantity);
            $userId = Auth::guard('signup')->id();
            $addtocart = new Cart;
            $addtocart->user_id = $userId;
            $addtocart->product_id = $productId;
            $addtocart->quantity = $quantity;
            $addtocart->save();
        }
        return redirect()->back()->with('success','Product added to cart.');
    }

    /**
     * Handle the contact form submission.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function contact_us(Request $request){
        $contact = new Contact;
        if ($request->isMethod('post')){
            $contact->fullname = $request->get('fn');
            $contact->email = $request->get('ea');
            $contact->message = $request->get('me');
            $contact->save();
        }
        return redirect()->back()->with('success','Your message has been sent!'); 
    }
}
