<div class="attels">
			<div class="augsa">
			<div class="reg">

@if (Auth::check())
    <a class="button" href="/galadarbs/public/userProfile">Profils</a>
				<a class="button" href="/galadarbs/public/logout">Iziet</a>
@else

		<a class="button" href="/galadarbs/public/register">Reģistrēties</a>
				<a class="button" href="/galadarbs/public/login">Ienākt</a>
@endif
				
			</div>
			<header class="blog-header">
				<a class="blog-header-logo teksta-krasa" href="/galadarbs/public">Sufle.lv</a></header>
		</div>
		<nav class="navbar navbar-expand-xl navbar-light">
			<a class="navbar-brand" href="/galadarbs/public"><i class="fas fa-home"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav" href="/galadarbs/public/new">Jaunumi</a>
					</li>
					<li class="nav-item">
						<a class="nav" href="/galadarbs/public/blog">Blogs</a>
					</li>
					<li class="nav-item">
						<a class="nav" href="/galadarbs/public/recipes">Receptes</a>
					</li>
					<li class="nav-item">
						<a class="nav" href="/galadarbs/public/ingredients">Sastāvdaļas</a>
					</li>
					<li class="nav-item">
						<a class="nav" href="/galadarbs/public/children">Mammām</a>
					</li>
				</ul>
				<div class="button2">
				<form class="form-inline my-2 my-xl-0 d-flex justify-content-end">
					<input class="form-control mr-sm-2" type="search" placeholder="Meklēt..." aria-label="Search">				
					<button class="btn btn-outline-submit my-2 my-sx-0" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="10.5" cy="10.5" r="7.5"></circle>
							<line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
						</button>
					</form>
				</div>
				</div>
			</nav>
			
		</div>