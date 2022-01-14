<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::resource('/proizvodi', ProductController::class);

// Route::resource('/proizvodjac', ProducerController::class);

// Route::resource('/kategorija', CategoryController::class);
Route::delete('/deleteProducts/{id}',[ProductController::class,'deleteProduct']);
Route::get('products/{id}', [ProductController::class, 'show']);

Route::post('/addProducer',[ProducerController::class,'addProducer']);
Route::get('/categories', [CategoryController::class, 'getCategories']);
Route::delete('/deleteProducer/{id}',[ProducerController::class,'destroy']);
Route::get('products', [ProductController::class, 'get']);//
Route::get('/producers', [ProducerController::class, 'getProducers']);//
//Route::post('/addCategory',[CategoryController::class,'addCategory']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::group(['middleware'=>['auth:sanctum']],function(){

    Route::post('/logout',[AuthController::class,'logout']);
});
