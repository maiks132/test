@extends('layouts.master')
@section('title', 'Testa lapas nosaukums')
@section('content')
    <?php
//select all recipe

//tikai publicetas
$recipeid = DB::table('recipe')->where('id','=', $recipeID)->first();

$user = DB::table('users')->select('username')->where('id','=', $recipeid->user_ID)->first();
//$datums = date("Y/m/d",$recipePub->created_at) ;

// print_r($recipePub);
// echo htmlspecialchars_decode(string)
//echo $user->username;
//echo $user->username;
//echo $recipeid->user_ID;
?>
@csrf
<div class="container" method="post">
	
	<h2>{{$recipeid->recipeName}}</h2><br>

<img src="http://{{$recipeid->recipePhoto}}" style="width: 100%; height: 100%;"><br><br>
<h3>Sastāvdaļas:</h3>
	<p>
	<ul>
		
			{!!$recipeid->ingredients!!}
		
	</ul></p><br>
<h3>Pagatavošana:</h3>

	<p>{!!$recipeid->description!!}</p>

<h4>Autors: <p>{{$user->username}}</p></h4>
</div>
@endsection