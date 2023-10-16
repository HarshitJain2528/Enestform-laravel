@extends('layouts.main')
@section('home')
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
				<div class="samsung-cam">
					<div class="cam-info">
						<img src="uploadimages/">
						<div class="sam-prc">
							<span>{{--name--}}</span>
							<p>{{--price--}}</p>
						</div>
						<hr class="hr2">
						<div class="cart-btn">
							<i class="fa fa-plus-circle" aria-hidden="true"></i>
							<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
							<i class="fa fa-plus" aria-hidden="true"></i>
							<i class="fa fa-cart-plus" aria-hidden="true"></i>
							<input type="submit" name="" value="Add to cart">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection