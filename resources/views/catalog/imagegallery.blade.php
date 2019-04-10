@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection
@section('content')
<div class="container">
  @foreach($products->chunk(3) as $productchunk)
  <div class="row">
    @foreach($productchunk as $product)
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="{{ $product->imagepath }}" alt="Lights" style="width:100%;">
          <div class="caption">
            <h3>{{$product->title}}</h3>
            <p class="desc">{{$product->description}}</p>
            <div class="clearfix">
              <div class="pull-left price">{{$product->price}}</div>
            <a href="{{ route('product.addtocart',['id'=>$product->id])}}" class="btn btn-success pull-right" role="button" style="height: 30px;width: 60px;">Add to cart</a></div>
          </div>
        </a>
      </div>
    </div>
    @endforeach
  </div>
  @endforeach
</div>
@endsection
