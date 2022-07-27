<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BungalowController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\DB;
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
})->name('/');

Route::get('/catalogue', [BungalowController::class, 'catalogue'])->name('catalogue');
// Route::get('/catalogue', function () {
//     $bungalows = Bungalow::all();
//     return view('paradis.catalogue', compact('bungalows'));
// })->name('catalogue');

Route::get('/bungalows', [BungalowController::class])->middleware(['auth'])->name('bungalows');
Route::get('/bungalows/{id}', [BungalowController::class, 'show'])->middleware(['auth'])->name('bungalows');

Route::get('/accueil', function () {
    return view('paradis.accueil');
})->middleware(['auth'])->name('accueil');

#########################################  Route vers le panel admistrateur ###################
Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/bungalows', BungalowController::class);
    Route::resource('/reservations', ReservationController::class);
    Route::resource('/users', UserController::class);
});

require __DIR__ . '/auth.php';
