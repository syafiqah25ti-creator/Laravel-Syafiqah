<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use  App\http\Controllers\QuestionController;
use  App\http\Controllers\DashboardController;
use  App\http\Controllers\PelangganController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [Homecontroller::class, 'index']);
Route::get('question/respon', [QuestionController::class, 'showRespon'])
    ->name('question.respon');
Route::post('question/store', [QuestionController::class, 'store'])
        ->name('question.store');
Route::any('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('pelanggan', PelangganController::class);

