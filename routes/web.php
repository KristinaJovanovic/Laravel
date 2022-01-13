<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\CategoryController;
/*
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
    return view('welcome');
});
// Route::get('pozdrav', function(){
//     $ime = "Kristina";
//     return view('product', compact('ime'));
// });

// Route::get('/addProduct', [ProductController::class, 'get']);//
// Route::post('/addProduct', [ProductController::class, 'addProduct']);

// Route::get('products', [ProductController::class, 'get']);//
// //Route::get('products/{id}', [ProductController::class, 'destroy']);  //

// Route::get('products/{id}', [ProductController::class, 'show']); //kada se skine komentar pronalazi se proizvod


// Route::get('/producers', [ProducerController::class, 'getProducers']);//

// Route::get('/addProducer', [ProducerController::class, 'openAddProducerForm']);
// Route::post('/addProducer', [ProducerController::class, 'addProducer']);

// Route::get('/categories', [CategoryController::class, 'getCategories']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


