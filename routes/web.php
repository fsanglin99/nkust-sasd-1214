<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class,"index"]);
Route::post('/insert',[MainController::class,"insert"]);
Route::get('/mylogout',[MainController::class,"logout"]);
// Route::get('/remove',[MainController::class,"remove"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/
     dashboard', function () {
    return redirect('/');
})->name('dashboard');


//Route::middleware(['auth:sanctum', 'verified'])->get('/
//    dashboard', function () {
//   return view('dashboard');
// })->name('dashboard');