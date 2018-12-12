<?php

// use Illuminate\Http\Request;
use App\User;
use \App\Recepte as Recepte;
// use \Auth as Auth;
// dd(Recepte::all());
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	return view('home');
})->name('home');

Route::get('/login', function(){
	return view('author/login');
})->name('author.login');

Route::get('/register', function(){
	Auth::logout();
	return view('author/register');
})->name('author.register');

Route::get('/confirm', function(){
	return view('author/confirm_reg');
})->name('author.confirm_reg');

Route::get('/userProfile', function(){
	return view('userProfile');
})->name('userProfile');

Route::get('/logout', function(){
	Auth::logout();
	return redirect(route('home'));
});

Route::get('/addReceptes', function(){
	return view('addReceptes');
})->name('addReceptes');

Route::get('/new', function(){
	return view('pages/new');
})->name('pages.new');

Route::get('/blog', function(){
	return view('pages/blog');
})->name('pages.blog');

Route::get('/recipes', function(){
	return view('pages/recipes');
})->name('pages.recipes');

Route::get('/ingredients', function(){
	return view('pages/ingredients');
})->name('pages.ingredients');

Route::get('/children', function(){
	return view('pages/children');
})->name('pages.children');

Route::get('/viewReceptes/{id}', function($id){
	return view('pages/viewReceptes')->with('recipeID', $id);
})->name('pages.viewReceptes');

Route::get('/manasReceptes', function(){
	return view('pages/savedReceptes');
})->name('pages.savedeceptes');


Route::get('/editReceptes/{id}', function($id){
	return view('pages/editReceptes')->with('recipeID', $id);
})->name('pages.editReceptes');

Route::post('register', function(){
	
	$existing = User::where('email', '=', $_POST['email'])->count();
	$existingUser = User::where('username', '=', $_POST['username'])->count();
	if($_POST['password'] !== $_POST['password_confirmation']){
		return redirect()
		->back()
		->withInput()
		->with(['error' => 'Paroles nesakrīt!']);
	}
	else if($existing>0){
		return redirect()
		->back()
		->withInput()
		->with(['error' => 'Nederīgs e-pasts!']);
	}else if($existingUser>0){
		return redirect()
		->back()
		->withInput()
		->with(['error' => 'Lietotāja vārds jau tiek lietots!']);
	}
	$user = new User();
	$user->username = $_POST['username'];
	$user->email = $_POST['email'];
	$hashed = Hash::make($_POST['password']);
	$user->password = $hashed;

	$user->save();
	
	return redirect(route('author.confirm_reg'));
});


Route::post('/login', function(){

	$user = User::where('email', $_POST['email'])->first();

	
	
	if(isset($user) && Hash::check($_POST['password'], $user->password)){

		Auth::login($user);
		return redirect(route('home'));	
	}
	else
	{
		return redirect()
		->back()
		->withInput()
		->with(['error' => 'Nepareizs e-pasts vai parole!']);
	}
});


Route::post('/addReceptes', function(){
	
	if(isset($_POST['button'])){
		if($_POST['button']=='saveRecipe'){		
			
			$name = Recepte::where('recipeName', '=', $_POST['recipeName'])->count();

			if($name>0){
				return redirect()
				->back()
				->withInput()
				->with(['error' => 'Receptes nosaukums ir aizņemts!']);
			}
			if(isset($_FILES['picture'])){
				$picture = $_FILES['picture']["tmp_name"];
				// dd($picture);
				try{
					$bildes = "recipes-".rand(1000,9999).".png";
					$uplaod_dir = $_SERVER['DOCUMENT_ROOT']."/galadarbs/public/bildes";
					// dd($bildes);
					$kopa = $uplaod_dir.'/'.$bildes;
					move_uploaded_file($picture, $kopa);
					//return redirect(route('userProfile'));
				}
				catch(\Exception $e){
					dd($e->getMessage());
				}
			}

			$recipes = new Recepte();
			$recipes->recipePhoto = $_SERVER['HTTP_HOST']."/galadarbs/public/bildes/".$bildes;
			$recipes->recipeName = $_POST['recipeName'];
			$recipes->ingredients = $_POST['ingredients'];
			$recipes->description = $_POST['description'];
			$recipes->published = '0';
			$recipes->user_ID = Auth::user()->id;
			$recipes->save();
			// dd($recipes);
			// var_dump(request()->all());
			// echo(request()->input('email'));
			
			return redirect(route('userProfile'));
			}

			if($_POST['button']=='pubRecipe'){
				$name = Recepte::where('recipeName', '=', $_POST['recipeName'])->count();

				if($name>0){
					return redirect()
					->back()
					->withInput()
					->with(['error' => 'Receptes nosaukums ir aizņemts!']);
				}
				if(isset($_FILES['picture'])){

					$picture = $_FILES['picture']["tmp_name"];
					// dd($picture);
					try{
						$bildes = "recipes-".rand(1000,9999).".png";
						$uplaod_dir = $_SERVER['DOCUMENT_ROOT']."/galadarbs/public/bildes";
						// dd($bildes);
						$kopa = $uplaod_dir.'/'.$bildes;
						move_uploaded_file($picture, $kopa);
						//return redirect(route('userProfile'));
					}
					catch(\Exception $e){
						dd($e->getMessage());
					}
				}

				$recipes = new Recepte();
				$recipes->recipePhoto = $_SERVER['HTTP_HOST']."/galadarbs/public/bildes/".$bildes;
				$recipes->recipeName = $_POST['recipeName'];
				$recipes->ingredients = $_POST['ingredients'];
				$recipes->description = $_POST['description'];
				$recipes->published = '1';
				$recipes->user_ID = Auth::user()->id;
				$recipes->save();
			
			// var_dump(request()->all());
			// echo(request()->input('email'));
			
				return redirect(route('pages.recipes'));
			}
		}		
			
})->name('bildes.store');


// Route::get('Recepte/update/{id}', 'RecepteController@update');
// Route::post('editReceptes/upadate/{id}','RecepteController@update'); 
	
// 	function update(Request $request, $id){

// 	if(isset($_POST['button'])){
// 		if($_POST['button']=='saveRecipe2'){		
// 			try{
//         //Find the user object from model if it exists
//         $recipes= Recepte::findOrFail($id);

//         //$request contain your post data sent from your edit from
//         //$user is an object which contains the column names of your table

//         //Set user object attributes
//         $recipes->recipeName = $request['recipeName'];
// 			$recipes->ingredients = $request['ingredients'];
// 			$recipes->description = $request['description'];
// 			$recipes->published = '0';
// 			$recipes->user_ID = Auth::user()->id;
// 			$recipes->save();
// 			return redirect(route('home'));

        
//     }
//     catch(ModelNotFoundException $err){
//         //Show error page
//     }

// 			if($_POST['button']=='pubRecipe2'){
				
// 				$name = Recepte::where('recipeName', '=', $_POST['recipeName'])->count();

// 				if($name>0){
// 					return redirect()
// 					->back()
// 					->withInput()
// 					->with(['error' => 'Receptes nosaukums ir aizņemts!']);
// 				}
// try{
// 				$recipes= Recepte::findOrFail($id);
// 				// $recipes->recipePhoto = $_SERVER['HTTP_HOST']."/galadarbs/public/bildes/".$bildes;
// 				$recipes->recipeName = $_POST['recipeName'];
// 				$recipes->ingredients = $_POST['ingredients'];
// 				$recipes->description = $_POST['description'];
// 				$recipes->published = '1';
// 				$recipes->user_ID = Auth::user()->id;
// 				$recipes->save();
			
// 			// var_dump(request()->all());
// 			// echo(request()->input('email'));
			
// 				return redirect(route('userProfile'));
// 				 }
//     catch(ModelNotFoundException $err){
//         //Show error page
//     }
// 			}
// 		}}
// 			}
// 		