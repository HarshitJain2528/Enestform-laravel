@extends('layouts.main')
@section('home')
@if(session('success'))
	<span class="alert alert-success">
		{{session('success')}}
	</span>
@endif
	<div class="footer">
		<div class="main-img">
			<img src="{{asset('assets/images/16.png')}}">
		</div>
		
			@include('sidebar');

		<div class="contact">
			<div class="contact-us">
				<p>FEATURED PRODUCTS</p>
			</div>
			<div class="Camera-info">
				@foreach ($products as $product)
					<div class="samsung-cam">
						<div class="cam-info">
							<img src="{{ asset($product->product_image) }}">
							<div class="sam-prc">
								<span>{{$product->pname}}</span>
								<p>Rs. {{$product->pprice}}</p>
							</div>
							<hr class="hr2">
							<div class="cart-btn">
								<i class="fa fa-plus-circle" aria-hidden="true"></i>
								<i class="fa fa-plus" aria-hidden="true"></i>
								<i class="fa fa-cart-plus" aria-hidden="true"></i>
								<input type="submit" name="" value="Add to cart">
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	@endsection