<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecepteUpdateController extends Controller
{
   public function index(){
      $recipes = DB::select('select * from recipe');
      return view('recipe_edit_view',['recipe'=>$recipes]);
   }
   public function show($id) {
      $recipes = DB::select('select * from recipe where id = ?',[$id]);
      return view('recipe_update',['recipe'=>$recipes]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('recipeName');
      DB::update('update recipe set name = ? where id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/editReceptes">Click Here</a> to go back.';
   }
}
