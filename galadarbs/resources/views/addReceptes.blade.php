@extends('layouts.master')
@section('title', 'Testa lapas nosaukums')
@section('content')
    <h2>Receptes pievienošana</h2><br>

   <form class="row teksts2" method="post" action="{{ route('bildes.store') }}" enctype="multipart/form-data">
 @csrf
<?php 
    $photo = [
      'picture' => 'file'
    ];
    $name = [
      'recipeName' => 'text'
    ];
    $ingr = [
      'ingredients' => 'text'
    ];
    $desc = [
      'description' => 'text'
    ];
  ?>

   	<picture style="width: 100%; height:100%;">
  <div class="form-group col-sx-12 col-md-9 col-lg-9">
  	<label for="picture">Receptes foto:</label><br>
  	<img src="..." style="width: 100%; height:100%;">
    <input 
    type="file" 
	name="picture"
	
	onchange="previewFile()">
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
						preview.src = "/galadarbs/resources/views/cupcake.png";
					}
				}
				previewFile();  
			</script>
  </div>
</picture>

@foreach($name as $rname => $type2)
				<div class="form-group col-sx-12 col-md-9 col-lg-9">
					<label for="recipeName">Receptes nosaukums:</label>
					<input 
					type="{{$type2}}" 
					class="form-control" 
					name="{{ $rname }}"  
					required>
				</div>
				@endforeach
				@foreach($ingr as $ingredients => $type3)
				<div class="form-group col-sx-12 col-md-9 col-lg-9">
					<label for="ingredients">Sastāvdaļas:</label>
					<textarea 
					type="{{$type3}}" 
					class="form-control" 
					name="{{ $ingredients }}" 
					required></textarea>
				</div>
				@endforeach
				@foreach($desc as $description => $type4)
				<div class="form-group col-sx-12 col-md-9 col-lg-9">
					<label for="recipeName">Receptes apraksts:</label>
					<textarea type="{{$type4}}" 
					class="form-control" 
					name="{{ $description }}"   required></textarea>
				</div>
				@endforeach
				@if( session('error') )
			<div class="alert alert-danger" role="alert">
			  {{ session('error') }}
			</div>
    
  @endif
				<div class="row form-group col-sx-12 col-md-9 col-lg-9">
				<button type="submit" name="button" value="saveRecipe" class="btn btn-primary m-2">Saglabāt</button>
				<button type="submit" name="button" value="pubRecipe" class="btn btn-primary m-2">Publicēt</button>
			</div>
			</form>
	
@endsection