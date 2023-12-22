<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/contato', [EventController::class, 'contact']);

Route::get('/produtos', [EventController::class, 'products']);

Route::get('/produtos/{id}', function ($id) {
	return view('pages.single-product', ['id' => $id]);
});

Route::get('/eventos/novo', [EventController::class, 'create_event']);