@extends('layouts.master')
@section('title', 'Testa lapas nosaukums')
@section('content')
<?php


$recipeid = DB::table('recipe')->where('user_ID','=', Auth::id())->get();

?>
 
    <main role="main">
      <div class="album py-3 bg-light">
        <div class="container">
          <div class="row">
            
           @foreach($recipeid as $value)
            <div class="col-md-4 receptes">
              <div class="card mb-4 box-shadow">
                <img src="http://{{ $value->recipePhoto }}" alt="Card image cap" style="width: 100%; height: 100%">
                <div class="card-body">
                  <p class="card-text">
                   
                  
                    {{$value->recipeName}}</p>
                  <div class="d-flex justify-content-between align-items-center"><small class="text-muted">{{$value->created_at}}</small>
                    <div class="btn-group">
                      <a href="/galadarbs/public/editReceptes/{{$value->id}}" class="btn btn-sm btn-outline-secondary">Labot</a>
                      <a href="" class="btn btn-sm btn-outline-secondary">Dzēst</a>
                    </div>
                    
                  </div>
                </div> @if($value->published== 1)
                    publicēts
                    @else
                    nav publicēts
                    @endif
              </div>
            </div>
            @endforeach
        

    </main>

 


@endsection