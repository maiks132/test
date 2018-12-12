<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recepte extends Model
{
    protected $table="recipe";
  
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipePhoto', 'recipeName', 'ingredients', 'description',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_ID', 'id',
    ];
}