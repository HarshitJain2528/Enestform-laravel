@extends('layouts.main')
@section('buynow')
<div class="footer">
    @include('sidebar') {{-- Include the sidebar --}}

    <div class="contact">
        <div class="contact-us">
            @foreach($category as $cat) 
                <p>{{$cat->categoryname}}</p> {{-- Display the category name --}}
            @endforeach
        </div>
        <div class="product-info" id="product">
            <span>Sort by:</span> {{-- Display a label for sorting --}}
            <form>
                <select>
                    <option>product name</option> {{-- Sorting options --}}
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </form>
        </div>
        <div class="display-product">
            <span>Displaying 1 to 5 of 6 new products</span> {{-- Display product count --}}
            <div class="btnnn">
                <input class="pre" type="submit" name="" value="Previous">
                <input class="nxt" type="submit" name="" value="Next">
            </div>
        </div>

        @foreach ($products as $product)
            {{ csrf_field() }} {{-- CSRF token field --}}

            <div class="dish-info">
                <div class="machine-pic">
                    <div class="img">
                        <img src="{{ asset($product->product_image) }}" /> {{-- Display the product image --}}
                    </div>
                    <div class="stock">
                        <p>In Stock: {{$product->pstock}}</p> {{-- Display product stock information --}}
                    </div>
                </div>
                <div class="machine-info">
                    <div class="date">
                        <span>Date: {{ \Carbon\Carbon::now()->format('jS F Y') }}</span> {{-- Display the current date --}}
                    </div>
                    <div class="washer">
                        <p>{{$product->pname}}</p> {{-- Display the product name --}}
                    </div>
                    <div class="model-info">
                        <span>Model: {{$product->pname}}</span> {{-- Display the product model information --}}
                        <p>Description: {{$product->pdesc}}</p> {{-- Display the product description --}}
                    </div>
                    <div class="price">
                        <span>Rs. {{$product->pprice}}</span> {{-- Display the product price --}}
                    </div>
                    <div class="checkout">
                        @if(!Auth::guard('signup')->check())
                            <a href="{{ route('login') }}"><input type="button" value="Login First" name="login_first"/></a> {{-- Display login button if user is not logged in --}}
                        @else
                            <a href="{{ url('addproduct/'.$product->id) }}"><input type="button" value="BUY NOW" name="bn"/></a> {{-- Display "BUY NOW" button --}}
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
