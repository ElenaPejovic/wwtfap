<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CabinController;
use App\Http\Controllers\FrameController;
use App\Http\Controllers\TrunkController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UpgradeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [UserController::class, 'homepage'])->name('homepage');

Route::get('/vehicle-cabins', [CabinController::class, 'kabine'])->name('vehicle-cabins');
Route::get('/vehicle-cabins/{id}',[CabinController::class,'kabinaDetaljno'])->name('cabin-details');

Route::get('/vehicle-frames', [FrameController::class, 'ramovi'])->name('vehicle-frames');
Route::get('/vehicle-frames/{id}',[FrameController::class,'ramDetaljno'])->name('frame-details');

Route::get('/vehicle-trunks', [TrunkController::class, 'sanduci'])->name('vehicle-trunks');
Route::get('/vehicle-trunks/{id}',[TrunkController::class,'sandukDetaljno'])->name('trunk-details');

Route::get('/types', [TypeController::class, 'tipovi'])->name('types');

Route::get('/upgrade', [UpgradeController::class, 'nadogradnje'])->name('upgrade');
Route::get('/upgrade/{id}', [UpgradeController::class, 'nadogradnjaDetaljno'])->name('upgrade-details');


Route::get('/dashboard', function () {
    return view('homepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/deals', [AdminController::class, 'dealsForm'])->name('deals-form');
    Route::post('/deals', [AdminController::class, 'deals'])->name('deals-processing');
    Route::get('/deals-list', [AdminController::class, 'listDeals'])->name('deals-list');
    Route::get('/deal-detail/{id}', [AdminController::class, 'dealDetail'])->name('deals-detail');
    Route::post('/deals-detail.{id}', [AdminController::class, 'changeStatus'])->name('change-status');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
