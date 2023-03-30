<?php

use App\Models\Ligne;
use App\Models\Chauffeur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LigneController;
use App\Http\Controllers\admin\DashboadController;
use App\Http\Controllers\Admin\ChauffeurController;

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
    $lignes = Ligne::all();
    $chauffeurs = Chauffeur::all();
    return view('welcome', ['lignes' => $lignes, 'chauffeurs' => $chauffeurs]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('dashboad', [DashboadController::class, 'index']);

    Route::controller(LigneController::class)->group(function () {
        Route::get('/ligne', 'index');
        Route::get('/ligne/create', 'create');
        Route::post('/ligne','store');
        Route::get('/ligne/{ligne}/edit','edit');
        Route::put('/ligne/{ligne}','update');
    });

    Route::controller(ChauffeurController::class)->group(function () {
        Route::get('/chauffeur', 'index');
        Route::get('/chauffeur/create', 'create');
        Route::post('/chauffeur','store');
        Route::get('/chauffeur/{chauffeur}/edit','edit');
        Route::put('/chauffeur/{chauffeur}','update');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index');
       
    });
});


