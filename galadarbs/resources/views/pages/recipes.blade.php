@extends('layouts.master')
@section('title', 'Testa lapas nosaukums')
@section('content')
<?php
//select all recipe
$recipe = DB::table('recipe')->select('recipeName','ingredients','description')->get();

//tikai publicetas
$recipePub = DB::table('recipe')->where('published','=','1')->orderby('recipeName','=', 'asc')->get();
//$datums = date("Y/m/d",$recipePub->created_at) ;

// print_r($recipePub);
?>
 
    <main role="main">
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
           <!--  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </main>

 


@endsection