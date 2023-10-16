@extends('layouts.main')
@section('buynow')
<div class="footer">
	@include('sidebar')
	<div class="contact">
		<div class="contact-us">
			<p>{{--categoryname--}}</p>
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
			<div class="dish-info">
			<div class="machine-pic">
				<div class="img">
					<img src="uploadimages/" />
				</div>
				<div class="stock">
					<p>In Stock:</p>
				</div>
			</div>
			<div class="machine-info">
				<div class="washer">
					<p>{{--pname--}}</p>
				</div>
				<div class="model-info">
					<span>Model:</span>
					<p>Description:</p>
				</div>
				<div class="price">
					<span></span>
				</div>
				<div class="checkout">
					<a href="addproduct.php" target="_blank"><input type="button" value="BUY NOW" name="bn"/></a>
				</div>
				
				{{-- <div class="checkout">
					<a href="login.php" target="_blank"><input type="button" value="LOGIN FIRST" name="bn"/></a>
				</div> --}}
								
			</div>
		</div>
@endsection