<?php

use App\Http\Controllers\Admin\AdminController;
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

################################ Route pour ma page accueil  ########################
Route::get('/', function () {
    return view('paradis.accueil');
});

Route::get('/accueil', function () {
    return view('paradis.accueil');
})->middleware(['auth'])->name('accueil');

#########################################  Route vers le panel admistrateur ###################
Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});

require __DIR__.'/auth.php';
