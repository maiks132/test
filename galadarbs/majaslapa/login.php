<?php
error_reporting(-1);
ini_set('display_errors', 'on');

require_once('parts/header.php');

?>
<main class="container">
	<div class="fons">
		<h2>Pievienošanās</h2><br>

		<form class="row">
			<div class="form-group col-sx-12 col-md-12 col-lg-6">
				<input type="text" class="form-check-input" id="exampleCheck1" required style="display: none; 
				opacity: 0; 
				position: absolute; 
				left: -9999999999999999px">
				<label for="exampleInputEmail1">E-pasta adrese</label>
				<input type="email" class="form-control" id="exampleInputEmail1" 
				aria-describedby="emailHelp" placeholder="Ievadiet e-pastu">
				<small id="emailHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group col-sx-12 col-md-12 col-lg-6">
				<label for="exampleInputPassword1">Parole</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ievadiet paroli">
			</div>
			<div class="form-check col-12 m-2">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Atcerēties mani</label>
			</div>
			<button type="submit" class="btn btn-primary m-2">OK</button>
		</form>
	</div>
</div>
</main>
<?php

require_once('parts/footer.php');

?>