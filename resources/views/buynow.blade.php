@extends('layouts.main')
@section('buynow')
<div class="footer">
	@include('sidebar')
	<div class="contact">
		<div class="contact-us">
			@foreach($category as $cat) 
				<p>{{$cat->categoryname}}</p> 
			@endforeach
		</div>
		<div class="product-info" id="product">
			<span>Sort by:</span>
			<form>
				<select>
					<option>product name</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</form>
		</div>
		<div class="display-product">
			<span>Displaying 1 to 5(of 6 new product)</span>
			<div class="btnnn">
				<input  class="pre" type="submit" name="" value="Previous">
				<input class="nxt" type="submit" name="" value="Next">
			</div>
		</div>	
		@foreach ($products as $product)
		
			{{ csrf_field() }}	
			<div class="dish-info">
				<div class="machine-pic">
					<div class="img">
						<img src="{{ asset($product->product_image) }}" />
					</div>
					<div class="stock">
						<p>In Stock: {{$product->pstock}}</p>
					</div>
				</div>
				<div class="machine-info">
					<div class="date">
						<span>Date: {{ \Carbon\Carbon::now()->format('jS F Y') }}</span>
					</div>
					<div class="washer">
						<p>{{$product->pname}}</p>
					</div>
					<div class="model-info">
						<span>Model:{{$product->pname}}</span>
						<p>Description:{{$product->pdesc}}</p>
					</div>
					<div class="price">
						<span>Rs. {{$product->pprice}}</span>
					</div>
					<div class="checkout">
						@if(!Auth::guard('signup')->check())
							<a href="{{Route('login')}}"><input type="button" value="Login First" name="login_first"/></a>
						@else
							<a href="{{url('addproduct/'.$product->id)}}"><input type="button" value="BUY NOW" name="bn"/></a>
						@endif
					</div>
									
				</div>
			</div>
		@endforeach
			
@endsection