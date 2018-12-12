<?php
error_reporting(-1);
ini_set('display_errors', 'on');

require_once('parts/header.php');

		?>
		<div class="container">
			<div class="fons">
			<h2>Reģistrācija</h2><br>

			<form class="row">
				<div class="form-group col-sx-12 col-md-12 col-lg-6">
					<label for="username">Lietotājs</label>
					<input type="username" class="form-control" id="username" aria-describedby="userHelp" placeholder="Ievadiet vārdu" required>
					<small id="userHelp" class="form-text text-muted">Lietotāja "nickname" obligātais lauks*</small>
				</div>
				<div class="form-group col-sx-12 col-md-12 col-lg-6">
					<label for="email">E-pasta adrese</label>
					<input type="email" class="form-control" id="email" 
					aria-describedby="emailHelp" placeholder="Ievadiet e-pastu"required>
					<small id="emailHelp" class="form-text text-muted">Obligātais lauks*</small>
				</div>
				<div class="form-group col-sx-12 col-md-12 col-lg-6">
					<label for="password">Parole</label>
					<input type="password" class="form-control" id="password" placeholder="Ievadiet paroli" required><small id="passwordHelp" class="form-text text-muted">Obligātais lauks*</small>
				</div>
				<div class="form-group col-sm-12 col-md-12 col-lg-6">
					<label for="password_conformation">Parole atkārtoti</label>
					<input type="password" class="form-control" id="password_conformation" placeholder="Ievadiet paroli" required><small id="passwordHelp" class="form-text text-muted">Obligātais lauks*</small>
				</div>
				<div class="form-check col-12 m-2">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1" required>Piekrītu noteikumiem</label> 
				</div>
				<button type="submit" class="btn btn-primary m-2">Pievienoties</button>
			</form>
		</div>
	</div>
		</div>
		<?php

require_once('parts/footer.php');

		?>