<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UseCategory;

class ViewController extends Controller
{
    public function index(){
        $category=UseCategory::all();
        return view('home',compact('category'));
    }
    public function login(){
        return view('login');
    }
    public function contact(){
        $category=UseCategory::all();
        return view('contact',compact('category'));
    }
    public function buynow(){
        $category=UseCategory::all();
        return view('buynow',compact('category'));
    }
    public function addproduct(){
        $category=UseCategory::all();
        return view('addproduct',compact('category'));
    }
}
