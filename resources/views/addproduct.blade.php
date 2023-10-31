@extends('layouts.main')
@section('addproduct')
    @if(session('success'))
        {{-- Display a success or error message --}}
        <span class="alert alert-success">{{ session('success') }}</span>
    @elseif(session('error'))
        <span class="danger-alert">{{ session('error') }}</span>
    @endif

    <div class="footer">
        @include('sidebar') {{-- Include the sidebar partial view --}}

        <div class="contact">
            @foreach ($products as $product)
                <div class="contact-us">
                    <p>{{ $product->pname }}</p> {{-- Display product name --}}
                </div>
                <div class="dish-info">
                    <div class="machine-pic">
                        <div class="img">
                            <img src="{{ asset($product->product_image) }}" > {{-- Display product image --}}
                        </div>
                        <div class="stock">
                            <p>In Stock: {{ $product->pstock }}</p> {{-- Display product stock information --}}
                        </div>
                        <div class="detail">
                            <span>Details:</span>
                            <p>{{ $product->pname }}</p> {{-- Display product details --}}
                        </div>
                    </div>
                    <div class="machine-info">
                        <div class="washer">
                            <p>{{ $product->pname }}</p> {{-- Display product name as the model --}}
                        </div>
                        <div class="model-info">
                            <span>Model: {{ $product->pname }}</span> {{-- Display product name as the model --}}
                            <p>Description: {{ $product->pdesc }}</p> {{-- Display product description --}}
                        </div>
                        <div class="quantity">
                            <form method="post" action="{{ route('AddToCart') }}">
                                {{ csrf_field() }}
                                <table>
                                    <tr>
                                        <td class="qty">Enter quantity</td>
                                        <td><input type="number" name="qty" /> {{-- Input for quantity --}}
                                    </tr>
                                </table>
                                <div class="price">
                                    <span>Rs. {{ $product->pprice }}</span> {{-- Display product price --}}
                                </div>
                        </div>
                        <div class="cart">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="submit" name="add" value="Add to Cart"> {{-- Form to add product to cart --}}
                        </div>
                        </form>
                        <div class="checkout">
                            <input type="submit" name="" value="checkout"> {{-- Button for checkout --}}
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="info">
                <form>
                    <table class="table-info">
                        <tr>
                            <td class="nme">Enter name</td>
                            <td><input type="" name=""></td> {{-- Input for name --}}
                        </tr>
                        <tr>
                            <td class="nme">Enter Email</td>
                            <td><input type="" name=""></td> {{-- Input for email --}}
                        </tr>
                        <tr>
                            <td class="nme">Enter Review</td>
                            <td><textarea></textarea></td> {{-- Textarea for review input --}}
                        </tr>
                        <tr>
                            <td class="nme">Rating</td>
                            <td><input type="" name=""></td> {{-- Input for rating --}}
                        </tr>
                        <tr>
                            <td class="btnn-1">
                                <input type="submit" name="" value="Submit query"> {{-- Submit button for the form --}}
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
