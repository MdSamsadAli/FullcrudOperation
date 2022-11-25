<?php

use App\Http\Controllers\student\postController;
use Illuminate\Support\Facades\Route;

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

Route::get('/insert', function () {
    return view('student.insert');
})->name("add_more");

Route::post('/store', [postController::class, 'store']);
Route::get('/show', [postController::class, 'show']);
Route::get('/delete/{id}', [postController::class, 'destroy']);
Route::get('/edit/{id}', [postController::class, 'edit']);
Route::post('/update/{id}', [postController::class, 'update']);