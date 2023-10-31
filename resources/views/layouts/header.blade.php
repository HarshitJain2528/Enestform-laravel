<!DOCTYPE html>
<html>
<head>
    <title>ENEST</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    {{-- Start of the main container --}}
    <div class="main-div">
        {{-- Header section --}}
        <div class="head-div">
            <div class="main">
                <div class="head">
                    <span>EVEST</span>
                    <p>THE BIGGEST CHOICE OF THE WEB</p>
                </div>
                <div class="btn">
                    {{-- Check if the user is logged in --}}
                    @if(!Auth::guard('signup')->check())
                        {{-- Display login button if the user is not logged in --}}
                        <a href="{{ route('login') }}"><input type="button" name="" value="Log in"></a>
                    @else
                        {{-- Display logout button with the user's name if logged in --}}
                        <a href="{{ route('logout') }}"><input type="button" name="" value="Log out : {{ Auth::guard('signup')->user()->fullname }}"></a> 
                    @endif
                </div>
            </div>
        </div>
        {{-- Home page content --}}
        <div class="home-page">
            {{-- Pagination and navigation section --}}
            <div class="pagnation">
                <div class="list">
                    <ul>
                        <a href="{{url('/')}}"><li>HOME</li></a>
                        <li>ALL PRODUCTS</li>
                        <li>REVIEWS</li>
                        <a href="{{url('contact')}}"><li>CONTACT</li></a>
                        <li>FAQS</li>
                    </ul>
                </div>
                {{-- Search bar section --}}
                <div class="search">
                    <div class="search-1">
                        <div class="input">
                            <input type="text" name="">
                        </div>
                        <div class="btnn">
                            <input type="button" name="" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="null">
        </div>
        {{-- Main categories section --}}
        <div class="main-categorious">
       
