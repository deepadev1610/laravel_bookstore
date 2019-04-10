@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection
@section('content')

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/book1.jpg" class="img-fluid" alt="Los Angeles">
        <div class="carousel-caption">
          <h3>“A room without books is like a body without a soul.” </h3>
          <p>― Marcus Tullius Cicero</p>
        </div>
      </div>

      <div class="item">
        <img src="images/book2.jpg" alt="Chicago" style="width:1500px;height:600px">
        <div class="carousel-caption">
          <h3>“There is no friend as loyal as a book.”</h3>
          <p>― Ernest Hemingway</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/book3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>“... a mind needs books as a sword needs a whetstone, if it is to keep its edge.” </h3>
          <p>― George R.R. Martin, A Game of Thrones</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<pre>
	


</pre>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/gallery">
        <img src="images/book4.jpg"  class="img-rounded" alt="Lights" style="width:100%;height:300px;">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/gallery">
        <img src="images/book5.jpg" class="img-rounded" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/gallery">
        <img src="images/book6.jpg" class="img-rounded" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div> 
</div>
@endsection
