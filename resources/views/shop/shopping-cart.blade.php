@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection
@section('title')
Bibliophile Shopping Cart
@endsection

@section('content')
	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-5 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
					<li class="list-group-item">
						<span class="badge"> {{ $product['qty'] }} </span>
						<strong style="font-size: 15px;"> {{ $product['item']['title'] }} </strong>
						<span class="label label-success" style="font-size: 10px;"> {{ $product['price'] }}</span>
						<div class="btn-group">
  								<a href="" type="button" class="btn btn-primary ">Remove</a>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong style="font-size: 25px;">Total: {{ $totalPrice}}</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-5 col-md-6 col-md-offset-3 col-sm-offset-3">
				<a type="button" class="btn btn-success" style="height: 30px;width: 70px;">Checkout</a>
			</div>
		</div>
		@else
		<div class="row">
			<div class="col-sm-5 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No items in cart!</h2>
			</div>
		</div>

	@endif
@endsection
