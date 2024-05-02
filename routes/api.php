<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* routes for consume in vue proyect */

/* routes for validate methods login and register */
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/check', [RegisterController::class, 'checkData']);
Route::post('/login', [LoginController::class, 'check']);

/*methods reationship category*/
Route::get('/categories', [CategoryController::class, 'active']);/*method for obtain all categories with status active*/
Route::get('/categoriesNumberSongs', [CategoryController::class, 'categoryWithSong']);/*get category whit number of song each one*/
Route::get('/allCategories', [CategoryController::class, 'all']);/*obtain all categories */
Route::post('/getCategoryId', [CategoryController::class, 'getCategoryId']);/*obtain category for id */
Route::get('/count', [CategoryController::class, 'count']);/*method for obtain number of categories and songs active*/
Route::put('/updateCategory', [CategoryController::class, 'update']);/*update name of category*/
Route::put('/updateCategoryStatus', [CategoryController::class, 'updateStatus']);/*update status of category*/

/*methods reationship song*/
Route::get('/songs', [SongController::class, 'active']);/*method for obtain all songs with status active*/
Route::post('/songsByCategory', [SongController::class, 'getSongsByCategory']);/*method for obtain songs for category selected */


/*methods reationship user*/
Route::post('/user', [UserController::class, 'get_user']);/*obtain user for register in local storage*/


