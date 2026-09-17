<?php
Route::get('/', function () {
    return redirect()->route('chery.index');
});
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheryController;

Route::get('/chery', [CheryController::class, 'index'])
    ->name('chery.index');

Route::get('/chery/mobil', [CheryController::class, 'mobil'])
    ->name('chery.mobil.index');

Route::get('/chery/mobil/omoda5', [CheryController::class, 'omoda5'])
    ->name('chery.mobil.omoda5');

Route::get('/chery/mobil/tiggo8', [CheryController::class, 'tiggo8'])
    ->name('chery.mobil.tiggo8');

Route::get('/chery/promo', [CheryController::class, 'promo'])
    ->name('chery.promo');

Route::get('/chery/tentang-kami', [CheryController::class, 'tentangKami'])
    ->name('chery.tentang');

Route::get('/chery/kontak', [CheryController::class, 'kontak'])
    ->name('chery.kontak');