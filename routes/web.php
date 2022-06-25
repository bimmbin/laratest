<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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


//laravel basic flow ---------------->route->controller->blade(view)



Route::get('/', [TestController::class, 'tes']);

//if form submitted (create)
Route::post('/', [TestController::class, 'store']);


//edit to get data, and render to input text
//it works by using redirect-with method, then output in blade using session
Route::get('/{id}', [TestController::class, 'edit']);

//id in here is from edit action, by using the blade session->id
//then updates the data by using save();
Route::post('/{id}', [TestController::class, 'update']);

//unique form method by laravel, gets the id then delete certain rows
Route::delete('/{id}', [TestController::class, 'destroy']);