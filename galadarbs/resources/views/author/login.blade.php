@extends('layouts.master')
@section('title', 'Testa lapas nosaukums')
@section('content')
		<h2>Pievienošanās</h2><br>

		<form class="row" method="post" action="">
			@csrf
			<div class="form-group col-sx-12 col-md-12 col-lg-6">
				<!-- <input type="text" class="form-check-input" id="exampleCheck1" required style="display: none; 
				opacity: 0; 
				position: absolute; 
				left: -9999999999999999px"> -->
				<label for="exampleInputEmail1">E-pasta adrese</label>
				<input type="email" name="email" class="form-control" id="exampleInputEmail1" 
				aria-describedby="emailHelp" placeholder="Ievadiet e-pastu">
				<small id="emailHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group col-sx-12 col-md-12 col-lg-6">
				<label for="exampleInputPassword1">Parole</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ievadiet paroli">
			</div>
			<div class="form-check col-12 m-2">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Atcerēties mani</label>
			</div>
			@if( session('error') )
			<div class="alert alert-danger" role="alert">
			  {{ session('error') }}
			</div>
    
  @endif
			<button type="submit" class="btn btn-primary m-2">OK</button>
		</form>
	</div>
@endsection