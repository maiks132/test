@extends('layouts.master')
@section('title', 'Reģistrācija')
@section('content')

			<h2>Reģistrācija</h2><br>

			<form class="row" method="post">

				@csrf

  <?php

    $username = [
       'username' => 'text'
    ];
    $emails = [
      'email' => 'email'
    ];
    $passwords = [
      'password' => 'password'
    ];
    $passwordConfirmations = [
      'password_confirmation' => 'password'
    ];
    
  ?>
 @foreach($username as $lietotajs => $type1)
				<div class="form-group col-sx-12 col-md-12 col-lg-6">
					<label for="username">Lietotājs</label>
					<input 
					type="{{$type1}}" 
					class="form-control" 
					name="{{ $lietotajs }}"value="{{ old($lietotajs) }}"  
					aria-describedby="userHelp" 
					placeholder="Ievadiet vārdu" 
					required>
					<small id="userHelp" class="form-text text-muted">Lietotāja "nickname" obligātais lauks*</small>
				</div>
				@endforeach
			@foreach($emails as $email => $type2)	
				<div class="form-group col-sx-12 col-md-12 col-lg-6">
					<label for="email">E-pasta adrese</label>
					<input 
					type="{{$type2}}" 
					class="form-control" 
					name="{{ $email }}" 
        			value="{{ old($email) }}" 
					aria-describedby="emailHelp" 
					placeholder="Ievadiet e-pastu"
					required>
					<small id="emailHelp" class="form-text text-muted">Obligātais lauks*</small>
				</div>
				@endforeach
				@foreach($passwords as $password => $type3)
				<div class="form-group col-sx-12 col-md-12 col-lg-6">
					<label for="password">Parole</label>
					<input 
					type="{{$type3}}" 
					class="form-control" 
					name="{{ $password }}" 
        			value="{{ old($password) }}" 
					placeholder="Ievadiet paroli" 
					required>
					<small id="passwordHelp" class="form-text text-muted">Obligātais lauks*</small>
				</div>
				@endforeach
				@foreach($passwordConfirmations as $pass_con => $type4)
				<div class="form-group col-sm-12 col-md-12 col-lg-6">
					<label for="password">Parole atkārtoti</label>
					<input 
					type="{{$type4}}" 
					class="form-control" 
					name="{{ $pass_con }}" 
        			value="{{ old($pass_con) }}" 
					placeholder="Ievadiet paroli" 
					required>
					<small id="passwordHelp" class="form-text text-muted">Obligātais lauks*</small>
				</div>
				@endforeach
				@if( session('error') )
			<div class="alert alert-danger" role="alert">
			  {{ session('error') }}
			</div>
    
  @endif

				<div class="form-check col-12 m-2">
					<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
					<label class="form-check-label" for="exampleCheck1">Piekrītu noteikumiem</label> 
				</div>
				<div class="form-check col-12 m-2">
				<button type="submit" class="btn btn-primary">Pievienoties</button>
			</div>
			</form>
	
@endsection