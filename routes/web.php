<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/home', [AdminController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/game', [MainController::class, 'permainan'])->name('permainan');
    Route::get('/prediksi', [MainController::class, 'prediksi'])->name('prediksi');
    Route::get('/kuis', [MainController::class, 'kuis'])->name('kuis');

    Route::get('/game/Mahjong', [GameController::class, 'mahjong'])->name('mahjong');
    Route::get('/game/TebakAngka', [GameController::class, 'TebakAngka'])->name('TebakAngka');
    Route::get('/game/MemoryGame', [GameController::class, 'Ingat'])->name('Ingat');
    Route::get('/game/TekaTekiBlok', [GameController::class, 'Puzzle'])->name('Puzzle');
   
});

Route::prefix('dashboard')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/form', [DashboardController::class, 'form'])->name('form');
    Route::get('/chart', [DashboardController::class, 'chart'])->name('chart');
    Route::get('/table', [DashboardController::class, 'table'])->name('table');
});

Route::get('/informasi', [MainController::class, 'informasi'])->name('informasi');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/detail', [MainController::class, 'detail'])->name('detail');
Route::get('/masukan', [MainController::class, 'masukan'])->name('masukan');
Route::get('/project', [MainController::class, 'project'])->name('project');

Route::post('/', [MainController::class, 'subscribe'])->name('subscribe');

Route::fallback(function () {
    return view('404');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });