@extends('layouts.master')
@section('title', 'Testa lapas nosaukums')
@section('content')

<div class="row" >

	<form class="form-group col-lg-6" method="post">


		<picture >
			<img 
			src="{{ Auth::user()->profilephoto }}" 
			class="img-fluid img-thumbnail" 
			name="{{ Auth::user()->profilephoto }}" 
			style="width: 100px; height:100px;"><br>
			<input type="file" onchange="previewFile()">
			<script>
				function previewFile(){
					var preview = document.querySelector('img'); 
					var file    = document.querySelector('input[type=file]').files[0]; 
					var reader  = new FileReader();

					reader.onloadend = function () {
						preview.src = reader.result;
					}

					if (file) {
						reader.readAsDataURL(file);
					} else {
						preview.src = "{{ Auth::user()->profilephoto }}";
					}
				}
				previewFile();  
			</script>
		</picture>
</form>



	<form class="form-group col-lg-6 teksts1" method="post">


		<div class="reg2">

			<a class="button" href="/galadarbs/public/addReceptes">Pievienot recepti</a>
			<a class="button" href="/galadarbs/public/manasReceptes">Saglabātās receptes</a>
		</div><br>

		<div class="form-group">
			<label for="username">Lietotājs</label>
			<input type="username" class="form-control" id="username" aria-describedby="userHelp" placeholder="{{Auth::user()->username}}">	
		</div>
		<h4>Mainīt paroli:</h4>
		<div class="form-group">
			<label for="email">Esošā parole</label>
			<input type="email" class="form-control" id="email" 
			aria-describedby="emailHelp" placeholder="Ievadiet paroli">
		</div>
		<div class="form-group">
			<label for="password">Jaunā parole</label>
			<input type="password" class="form-control" id="password" placeholder="Ievadiet paroli">
		</div>
		<div class="form-group">
			<label for="password_confirmation">Jaunā parole atkārtoti</label>
			<input type="password" class="form-control" id="password_confirmation" placeholder="Ievadiet paroli">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary m-2">Mainīt</button>
		</div>

	</form>
</div>

@endsection