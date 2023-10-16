@extends('layouts.main')
@section('addproduct')
			<div class="footer">
				@include('sidebar')
				<div class="contact">
					<div class="contact-us">
						<p>{{--pname--}}</p>	
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="uploadimages/" >
							</div>
							<div class="stock">
								<p>In Stock:</p>
							</div>
							<div class="detail">
								<span>Details:</span>
								<p>{{--pname--}}</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="washer">
								<p>{{--pname--}}</p>
							</div>
							<div class="model-info">
								<span>Model:{{--pname--}}</span>
								<p>Description:</p>
							</div>
							<div class="quantity">
							<form>
								<table>
									<tr>
										<td><input type="hidden" name="userid" ></td>
										<td><input type="hidden" name="productid" ></td>
										<td class="qty">Enter quantity</td>
										<td><input type="text" name="qty"/></td>
									</tr>
								</table>
								<div class="price">
									<span></span>
								</div>
							</div>
							<div class="cart">
								<input type="submit" name="add" value="Add to Cart">
							</div>
							</form>
							<div class="checkout">
								<input type="submit" name="" value="checkout">
							</div>
						</div> 
					</div>
					<div class="info">
						<form>
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			@endsection						