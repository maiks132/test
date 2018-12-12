@extends('layouts.master')
@section('title', 'Testa lapas nosaukums')
@section('content')
   <?php
//select all recipe
$recipe = DB::table('recipe')->select('recipeName','ingredients','description')->get();

//tikai publicetas
$recipePub = DB::table('recipe')->where('published','=','1')->orderby('created_at','=', 'asc')->get();
//$datums = date("Y/m/d",$recipePub->created_at) ;

// print_r($recipePub);
?>
 
    <main role="main">
    	<div class="jumbotron p-3  text-black rounded bg-light">
        <div class="col-md-6 px-0">
          <h1 class="display-5 font-italic">Suflē.lv - receptes ikvienam!</h1>
          <p class="lead my-3">Nākotnē, šeit būs vairāk lapu un būs pabeigtas visas lapas.</p>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide w-100 h-100 offset-lg-3 col-md-6" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/2.jpg" alt="Second slide">
    </div> 
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/4.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/5.jpg" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/6.jpg" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/7.jpg" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="/galadarbs/resources/views/bilde/8.jpg" alt="Eighth slide">
    </div>
  </div>
</div>
      </div>

      
      <div class="album py-3 bg-light">
        <div class="container">
          <div class="row">
            
            @foreach($recipePub as $value)
            <div class="col-md-4 receptes">
            	<a href="/galadarbs/public/viewReceptes/{{$value->id}}">
              <div class="card mb-4 box-shadow">
                <img src="http://{{ $value->recipePhoto }}" alt="Card image cap" style="width: 100%; height: 100%">
                <div class="card-body">
                  <p class="card-text">{{$value->recipeName}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div> -->
                    <small class="text-muted">{{$value->created_at}}</small>
                  </div>
                </div>
              </div>
          </a>
            </div>
            @endforeach

  
 </main>
@endsection