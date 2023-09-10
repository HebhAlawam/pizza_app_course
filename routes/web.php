<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/welcome', 'welcome');

######### Start Test Route ############
Route::view('/myRoute1/welcome', 'MyWelcome');
Route::view('/myRoute2/welcome', 'MyWelcome', ['name' => 'Hebh']);
######### Start Test Route ############

######### Start Admin Route ############

Route::resource('pizza',PizzaController::class);
Route::resource('category',App\Http\Controllers\CategoryController::class);

######### End Admin Route ############
