<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//protected route
Route::group(['middleware' => ['auth:sanctum']], function(){
    //protected users route
    Route::post('/logout', [UsersController::class, 'logout']);
    Route::put('/user/{id}', [UsersController::class, 'update']);
    Route::delete('/user/{id}', [UsersController::class, 'destroy']);

    //protected posts route
    Route::post('/posts', [PostsController::class, 'store']);
    Route::put('/post/{id}', [PostsController::class, 'update']);
    Route::delete('/post/{id}', [PostsController::class, 'destroy']);

    //protected comments route
    Route::post('/comment', [CommentsController::class, 'store']);
    Route::put('/comment/{id}', [CommentsController::class, 'update']);
    Route::delete('/comment/{id}', [CommentsController::class, 'destroy']);

    //protected likes route
    Route::post('/like', [LikesController::class, 'store']);
    Route::delete('/unlike/{id}', [LikesController::class, 'destroy']);

    //protected categories route
    Route::post('/category', [CategoriesController::class, 'store']);
    Route::put('/category/{id}', [CategoriesController::class, 'update']);
    Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);
});

// public route
// user
Route::get('/users', [UsersController::class, 'index']);
Route::get('/user/{id}', [UsersController::class, 'show']);
Route::post('/user', [UsersController::class, 'store']);
Route::post('/login', [UsersController::class, 'login']);

//posts
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/post/{id}', [PostsController::class, 'show']);

//categories
Route::get('/categories', [CategoriesController::class, 'index']);

// api calls
Route::get('/', function(){
    return view('index');
});