@extends('layouts.main')
@section('home')
@if(session('success'))
    {{-- Display a success message if it exists --}}
    <span class="alert alert-success">
        {{ session('success') }}
    </span>
@endif

<div class="footer">
    <div class="main-img">
        <img src="{{ asset('assets/images/16.png') }}">
    </div>

    @include('sidebar') {{-- Include the sidebar --}}

    <div class="contact">
        <div class="contact-us">
            <p>FEATURED PRODUCTS</p> {{-- Display a section title for featured products --}}
        </div>

        <div class="Camera-info">
            @foreach ($products->random(6) as $product)
                <div class="samsung-cam">
                    <div class="cam-info">
                        <img src="{{ asset($product->product_image) }}"> {{-- Display the product image --}}
                        <div class="sam-prc">
                            <span>{{ $product->pname }}</span> {{-- Display the product name --}}
                            <p>Rs. {{ $product->pprice }}</p> {{-- Display the product price --}}
                        </div>
                        <hr class="hr2">
                        <div class="cart-btn">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            <input type="submit" name="" value="Add to cart"> {{-- Add to cart button --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
