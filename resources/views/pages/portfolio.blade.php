@extends('layouts.layout')
@section('content')
 

<section id="services">

  <link rel="stylesheet" href=" {{asset('bootstrap-gallery.css')}} ">


<div class="container">


  <h2>Simple galerie</h2>
  
  <div class="row">
    <div class="col-xs-6 col-sm-3">
      <a href="img/autumn-thumb.jpg" class="thumbnail">
        <img src="img/autumn-thumb.jpg" alt="Small picture : Autumn" />
      </a>
    </div>
    
    <div class="col-xs-6 col-sm-3">
      <a href="img/landscape.jpg" class="thumbnail">
        <img src="img/landscape-thumb.jpg" alt="Landscape" />
      </a>
    </div>
    
    <div class="col-xs-6 col-sm-3">
      <a href="img/london.jpg" class="thumbnail" >
        <img src="img/london-thumb.jpg" alt="London" />
      </a>
    </div>
    
    <div class="col-xs-6 col-sm-3">
      <a href="img/sunrise.jpg" class="thumbnail">
        <img src="img/sunrise-thumb.jpg" alt="Sunrise" />
      </a>
    </div>
  </div>
  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('bootstrap-gallery.js') }}"></script>


</section>




@endsection