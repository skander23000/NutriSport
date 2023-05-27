<?php

use App\Models\Exercices;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InformationController;
use App\Http\Controllers\Frontend\Information_1Controller;
use App\Http\Controllers\Frontend\Information_2Controller;
use App\Http\Controllers\Frontend\Information_3Controller;
use App\Http\Controllers\Frontend\HistoriqueController;
use App\Http\Controllers\ExercicesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegimeController;
use App\Http\Controllers\ProgrammeController;
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
Route::get('/',[HomeController::class,'index']);


Route::get('/information_1',[Information_1Controller::class,'index'])->name('information_1')->middleware('isLoggedIn');


Route::get('/information_2',[Information_2Controller::class,'index'])->name('information_2')->middleware('isLoggedIn');

Route::post('/storedb',[Information_3Controller::class,'store']);
Route::get('/information_3',[Information_3Controller::class,'index'])->name('information_3')->middleware('isLoggedIn');


Route::get('/information',[InformationController::class,'index'])->middleware('isLoggedIn');
Route::get('/historique',[HistoriqueController::class,'index'])->name('historique')->middleware('isLoggedIn');

Route::post('/generate',[GenererController::class,'generate'])->name('generate');

Route::get('/regime',[RegimeController::class,'index'])->name('regime')->middleware('isLoggedIn');
Route::get('/programme',[ProgrammeController::class,'index'])->name('programme')->middleware('isLoggedIn');

Route::get('/exercices',[ExercicesController::class,'index'])->name('exercices.index')->middleware('isLoggedIn');
Route::get('/learn/{id}', 'App\Http\Controllers\ExercicesController@learnMore')->name('learn')->middleware('isLoggedIn');
Route::get('/exercices/search',[ExercicesController::class,'search'] )->name('exercices.search');

Route::get('/login',[AuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[AuthController::class,'registration']);
Route::get('/master',[AuthController::class,'master']);
Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::post('/register-user',[AuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[AuthController::class,'loginUser'])->name('login-user');
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/exercices/logout',[AuthController::class,'logout']);



Route::get('/users', 'App\Http\Controllers\UserController@index')->name('users')->middleware('isAdmin')->middleware('isLoggedIn');
Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::post('/users', 'App\Http\Controllers\UserController@store')->name('users.store');
Route::get('/users/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'App\Http\Controllers\UserController@update')->name('users.update');
Route::delete('/users/{user}', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');