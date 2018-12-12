@extends('layouts.master')
@section('title', 'Testa lapas nosaukums') | editReceptes
@section('content')
<!--     <?php
//select all recipe

// //tikai publicetas
// $recipes = DB::table('recipe')->where('id','=', $recipes)->first();

?> -->

 <form class="row teksts2" method="post" action="/editReceptes/{{$recipes[0]->id}} " enctype="multipart/form-data">
 	@csrf
	<picture>
  <div class="form-group col-sx-12 col-md-9 col-lg-9">
  	<label for="picture">Receptes foto:</label><br>
  	<img src="http://{{$recipes->recipePhoto}}" style="width: 100%; height:100%;">

     
  </div>
</picture>
<input 
					type="text" 
					class="form-control" 
					name="id"
					value="{{$recipes->id}}" 
					hidden>


				<div class="form-group col-sx-12 col-md-9 col-lg-9">
					<label for="recipeName">Receptes nosaukums:</label>
					<input 
					type="text" 
					class="form-control" 
					name="recipeName"
					value="{{$recipes[0]->recipeName}}" 
					required>
				</div>
				
				<div class="form-group col-sx-12 col-md-9 col-lg-9">
					<label for="ingredients">Sastāvdaļas:</label>
					<textarea 
					type="text" 
					class="form-control" 
					name="ingredients" 
					required>{{$recipes[0]->ingredients}}</textarea>
				</div>
				
				<div class="form-group col-sx-12 col-md-9 col-lg-9">
					<label for="description">Receptes apraksts:</label>
					<textarea type="text" 
					class="form-control" 
					name="description"   required>{{$recipes[0]->description}}</textarea>
				</div>
				
				@if( session('error') )
			<div class="alert alert-danger" role="alert">
			  {{ session('error') }}
			</div>
    
  @endif
				<div class="row form-group col-sx-12 col-md-9 col-lg-9">
				<button type="submit" name="button" value="Update recipe" class="btn btn-primary m-2">Saglabāt</button>
				<button type="submit" name="button" value="pubRecipe2" class="btn btn-secondary m-2">Publicēt</button>
			</div>
			</form>
@endsection