<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Recipe;
use App\Models\User;
use App\Notifications\NewRecipeNotification;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::post('/search', [HomeController::class, 'search'])->name('search');
    Route::get('/favorites' ,[HomeController::class , 'favorite'])->middleware('auth')->name('favorites');// fetching favorite recipes
});


Route::prefix('/profile')->middleware('auth')->group(function(){
    Route::get('/', [UserController::class , 'index'])->name('myProfile');
    Route::get('/edit/{id}' , [UserController::class , 'edit'])->name('edit_profile');
    Route::post('/update/{id}' , [UserController::class , 'update'])->name('updateprofile');
    Route::post('/updateprofilePrivacy/{id}' , [UserController::class , 'updateprofilePrivacy'])->name('updateprofilePrivacy');
});
Route::get('profile/{id}', [UserController::class , 'show'])->name('ownerProfile'); // for other users 

//! TODO : routes for recipes 
Route::get('/recipe/{id}' , [RecipeController::class , 'show'])->name('showRecipe');;

Route::prefix('/recipe')->middleware('auth')->group(function(){
    Route::get('/',[RecipeController::class , 'create'])->name('showForm');//showing form for creating a new recipe
    Route::post('/' ,[RecipeController::class, 'store'])->name('addrecipe');//adding recipe
    Route::delete('/{recipe}',[RecipeController::class , 'destroy'])->name('destroyRecipe');//delete recipes
    Route::get('/form/{id}' , [RecipeController::class , 'edit'])->name('showEditingFormForRecipe');//update recipe
    Route::put('/{id}' ,[RecipeController::class , 'update'])->name('updatingRecipe');//update editing recipe
    //fetching recipes already done in the home controller 
});

Route::prefix('/category')->middleware('auth')->group(function (){
        Route::get('/' , [CategoryController::class , 'create'])->name('create-category'); // show the form for creating a new category
        Route::post('/' , [CategoryController::class , 'store'])->name('add-category'); //create new category
        Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

    }
);
Route::prefix('/favorite')->middleware('auth')->group(function (){
    Route::post('/' , [FavoriteController::class , 'store'])->name('favorite'); //create new category
});

// for rating 

// end rating routing 


Route::get('/review/{id}' , [ReviewController::class, 'show'])->name('recipeReview');
Route::prefix('/review')->middleware('auth')->group(function (){
    Route::post('/' , [ReviewController::class , 'store'])->name('createReview');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('delete-category');

    /*
    we can also create an update route and delete route but it is not required from the requirements Project
    */
});


//route for testing the custom mail notification 
Route::get('/mailing' , function(){
    $recipe = Recipe::first(); // Get the first recipe for demonstration

    Notification::send(User::all() , new NewRecipeNotification($recipe));
});


Auth::routes();


/*
Everything is set up and functioning as expected, except for the user notification feature. I haven't figured out why it's not working yet.

I will submit the project to you now. Thank you for your assistance. I'm open to any guidance on how to implement email notifications for users.
*/
Auth::routes();

// Static pages
Route::view('/about', 'pages.home')->name('homePage');
Route::view('/recipes', 'pages.recipes')->name('recipesPage');
Route::view('/contact', 'pages.contact')->name('contactPage');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
